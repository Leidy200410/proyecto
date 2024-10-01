<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Informe</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<center>
  <br>
<div  class="card" style="width: 30rem;">
<h1 class="text-center">Modificar Informe</h1>
<h5 class="text-center">Formulario para actualizar datos de informe</h5>
<hr>
<div class="container">
    <form action="/informes/update" method="POST">
  <div class="row">
    <div class="col-6">
      Id Equipo
      <input type="text" class="form-control" name="idequipo">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
      Fecha Informe
      <input type="date" class="form-control" name="fechainforme">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
    </div>

    <div class="col-6">
      Detalles
      <input type="text" class="form-control" name="detalles">
      
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
