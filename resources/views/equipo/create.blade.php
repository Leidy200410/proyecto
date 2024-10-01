<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Equipo</title>
</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'Registar Equipo')

@section('content')
<center>
  <br>
<div  class="card" style="width: 30rem;">
<h1 class="text-center">Crear Registro de Equipo</h1>

<div class="container">
    <form action="/equipo/store" method="POST">
      @csrf
  <div class="row">
    <div class="col-6">
    <label for="nombre">Nombre</label>
      <input type="text" class="form-control" name="nombre">
      @error('nombre')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>
    </div>
    <div class="row">
  <div class="col-6">
  <label for="descripcion">Descripcion</label>
    <input type="text" class="form-control" name="descripcion">
    @error('descripcion')
    <span class="invalid-feedback d-block" role="alert">
      <strong>{{$message}}</strong>
    </span>
    @enderror
  </div>
  </div>
  <div class="row">
    <div class="col-6">
    <label for="estado">Estado</label>
      <input type="text" class="form-control" name="estado">
      @error('estado')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>
  <div class="row">
    <div class="col-6">
    <label for="fecharegistro">Fecha de registro</label>
      <input type="date" class="form-control" name="fecharegistro">
      @error('fecharegistro')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>
  <div class="row">
    <div class="col-6">
    <label for="estadoequipo">Estado del equipo</label>
      <input type="text" class="form-control" name="estadoequipo">
      @error('estadoequipo')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>

  <br>
  <hr>
  <div class="col-12 mt-2">
  <button class="btn btn-success">Guardar</button>
  </div>
</form>
</div></div></center>

<hr>
@endsection

</body>
</html>