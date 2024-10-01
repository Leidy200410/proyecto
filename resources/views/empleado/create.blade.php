<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Empleado</title>
    <!-- Agrega aquí los enlaces a Bootstrap CSS si es necesario -->
</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
    @extends('layout.app')

    {{-- Definimos el título --}}
    @section('title', 'Registrar Empleado')

    @section('content')

    <center>
  <br>
<div  class="card" style="width: 30rem;">

    <h1 class="text-center">Crear Empleado</h1>
    <h5 class="text-center">Formulario para crear empleados</h5>

    
        <div class="container">
            <form action="/empleado/store" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                        @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" required>
                        @error('apellido')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label for="cargo">Cargo</label>
                        <input type="text" class="form-control" name="cargo" id="cargo" required>
                        @error('cargo')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label for="dui">DUI</label>
                        <input type="text" class="form-control" name="dui" id="dui" required>
                        @error('dui')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" required>
                        @error('telefono')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
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
