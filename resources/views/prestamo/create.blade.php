<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Prestamo</title>
</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'Registrar Prestamo')

@section('content')
<center>
  <br>
<div  class="card" style="width: 30rem;">
<h1 class="text-center">Crear Prestamo</h1>

<div class="container">
    <form action="/prestamo/store" method="POST">
      @csrf
  <div class="row">
    <div class="col-6">
    <label for="idequipo">idequipo</label>
      <input type="text" class="form-control" name="idequipo">
      @error('idequipo')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>
    </div>
    <div class="row">
  <div class="col-6">
  <label for="idusuario">idusuario</label>
    <input type="text" class="form-control" name="idusuario">
    @error('idusuario')
    <span class="invalid-feedback d-block" role="alert">
      <strong>{{$message}}</strong>
    </span>
    @enderror
  </div>
  </div>
  <div class="row">
    <div class="col-6">
    <label for="fechaprestamo">Fecha del préstamo</label>
      <input type="date" class="form-control" name="fechaprestamo">
      @error('fechaprestamo')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>

  <div class="row">
    <div class="col-6">
    <label for="fechadevolucion">Fecha de devolucion</label>
      <input type="text" class="form-control" name="fechadevolucion">
      @error('fechadevolucion')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>

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