<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'Registrar Usuario')

@section('content')

<center>
  <br>
<div  class="card" style="width: 30rem;">
<h1 class="text-center">Crear Usuario</h1>

<div class="container">
    <form action="/usuario/store" method="POST">
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
  <label for="dui">DUI</label>
    <input type="numerico" class="form-control" name="dui">
    @error('dui')
    <span class="invalid-feedback d-block" role="alert">
      <strong>{{$message}}</strong>
    </span>
    @enderror
  </div>
  </div>
  <div class="row">
    <div class="col-6">
    <label for="gmail">Gmail</label>
      <input type="text" class="form-control" name="gmail">
      @error('gmail')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>

  <div class="row">
    <div class="col-6">
    <label for="direccion">Direccion</label>
      <input type="text" class="form-control" name="direccion">
      @error('direccion')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>

  <div class="row">
    <div class="col-6">
    <label for="telefono">Teléfono</label>
      <input type="numerico" class="form-control" name="telefono">
      @error('telefono')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>

  <div class="row">
    <div class="col-6">
    <label for="fecharegistro">Fecha de registro</label>
      <input type="date" class="form-control" name="fecharegistro">
      @error('registro')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>

  <br>
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