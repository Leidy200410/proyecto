<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Informes</title>
</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'Registrar Informes')

@section('content')
<center>
  <br>
<div  class="card" style="width: 30rem;">

<h1 class="text-center">Crear Informes</h1>

<div class="container">
    <form action="/informes/store" method="POST">
      @csrf
    <div class="row">
  <div class="col-6">
  <label for="fechainforme">Fecha del informe</label>
    <input type="date" class="form-control" name="fechainforme">
    @error('fechainforme')
    <span class="invalid-feedback d-block" role="alert">
      <strong>{{$message}}</strong>
    </span>
    @enderror
  </div>
  </div>
  <div class="row">
    <div class="col-6">
    <label for="detalles">Detalles</label>
      <input type="text" class="form-control" name="detalles">
      @error('detalles')
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