<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Empleado</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<center>
  <br>
<div  class="card" style="width: 30rem;">
<h1 class="text-center">Modificar Empleado</h1>
<h5 class="text-center">Formulario para actualizar datos del empleado</h5>
<hr>
<div class="container">
    <form action="/empleado/update" method="POST">
  <div class="row">
    <div class="col-6">
      Nombre
      <input type="text" class="form-control" name="nombre">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
      Apellido
      <input type="text" class="form-control" name="apellido">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
    </div>

    <div class="col-6">
      Cargo
      <input type="text" class="form-control" name="cargo">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
      DUI
      <input type="text" class="form-control" name="dui">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
    </div>

    <div class="col-6">
      Teléfono
      <input type="text" class="form-control" name="telefono">

      <span class="invalid-feedback d-block" role="alert">
      
      </span>
      
    </div>
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
