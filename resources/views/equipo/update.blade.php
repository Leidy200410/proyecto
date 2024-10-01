<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Equipo</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<center>
  <br>
<div  class="card" style="width: 30rem;">
<h1 class="text-center">Modificar Equipo</h1>
<h5 class="text-center">Formulario para actualizar datos de equipo</h5>
<hr>
<div class="container">
    <form action="/equipo/update" method="POST">
  <div class="row">
    <div class="col-6">
      Nombre
      <input type="text" class="form-control" name="nombre">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
      Descripcion
      <input type="text" class="form-control" name="descripcion">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
    </div>

    <div class="col-6">
      Estado
      <input type="text" class="form-control" name="estado">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
      Fecha Registro
      <input type="date" class="form-control" name="fecharegistro">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
      Estado Equipo
      <input type="text" class="form-control" name="estadoequipo">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

  <div class="col-12 mt-2">
    <button class="btn btn-success">Actualizar</button>
  </div>
</form>
</div></div>
</center>

<hr>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
