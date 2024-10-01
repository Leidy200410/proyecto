<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<center>
  <br>
<div  class="card" style="width: 30rem;">
<h1 class="text-center">Modificar Usuario</h1>
<h5 class="text-center">Formulario para actualizar datos de usuario</h5>
<hr>
<div class="container">
    <form action="/usuario/update" method="POST">
  <div class="row">
    <div class="col-6">
      Nombre
      <input type="text" class="form-control" name="nombre">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
      DUI
      <input type="numerico" class="form-control" name="dui">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
    </div>

    <div class="col-6">
        Gmail
      <input type="type" class="form-control" name="gmail">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
        Direccion
      <input type="type" class="form-control" name="direccion">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
        Telefono
      <input type="type" class="form-control" name="telefono">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
        Fecha Registro
      <input type="date" class="form-control" name="fecharegistro">
      
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
