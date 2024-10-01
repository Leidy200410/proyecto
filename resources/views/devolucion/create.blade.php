<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Devolucion</title>
</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'Registrar Devolucion')

@section('content')
<center>
  <br>
<div  class="card" style="width: 30rem;">

<h1 class="text-center">Crear Devolucion</h1>
<div class="container">
    <form action="/devolucion/store" method="POST">
      @csrf
  <div class="row">
    <div class="col-6">
    <label for="idprestamo">IDPRESTAMO</label>
      <input type="text" class="form-control" name="idprestamo">
      @error('idprestamo')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>
    </div>
    <div class="row"><div class="col-6">
  <label for="estadoequipo">Estado del equipo</label>
    <input type="text" class="form-control" name="estadoequipo">
    @error('estadoequipo')
    <span class="invalid-feedback d-block" role="alert">
      <strong>{{$message}}</strong>
    </span>
    @enderror
  </div></div>
  
  <div class="row">
    <div class="col-6">
    <label for="observaciones">Observaciones</label>
      <input type="text" class="form-control" name="observaciones">
      @error('observaciones')
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
</div>
</div>

</center>

<hr>
@endsection
</body>
</html>