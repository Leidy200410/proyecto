<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Mora</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<center>
  <br>
<div  class="card" style="width: 30rem;">
<h1 class="text-center">Modificar Mora</h1>
<h5 class="text-center">Formulario para actualizar datos de mora</h5>
<hr>
<div class="container">
    <form action="/mora/update" method="POST">
  <div class="row">
    <div class="col-6">
      Id Mora
      <input type="text" class="form-control" name="idmora">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
      Id Devolucion
      <input type="text" class="form-control" name="iddevolucion">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
    </div>

    <div class="col-6">
      Dias Tardados
      <input type="text" class="form-control" name="diastardanza">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
     Monto Mora
      <input type="numerico" class="form-control" name="montomora">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
      Estado Pago</P>
      <input type="text" class="form-control" name="estadopago">
      
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
