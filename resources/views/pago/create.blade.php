<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Pago</title>
</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'Registrar Pago')

@section('content')

<center>
  <br>
<div  class="card" style="width: 30rem;">
<h1 class="text-center">Crear Pago</h1>

<div class="container">
    <form action="/pago/store" method="POST">
      @csrf
  <div class="row">
    <div class="col-6">
    <label for="monto">Monto</label>
      <input type="numerico" class="form-control" name="monto">
      @error('monto')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>

  <div class="row">
    <div class="col-6">
    <label for="fechapago">Fecha de pago</label>
      <input type="date" class="form-control" name="fechapago">
      @error('fechapago')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>

  <div class="row">
    <div class="col-6">
    <label for="tipopago">Tipo de pago</label>
      <input type="text" class="form-control" name="tipopago">
      @error('tipopago')
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