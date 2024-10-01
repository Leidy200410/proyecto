<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Pago</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<center>
  <br>
<div  class="card" style="width: 30rem;">
<h1 class="text-center">Modificar Pago</h1>
<h5 class="text-center">Formulario para actualizar datos de pago</h5>
<hr>
<div class="container">
    <form action="/pago/update" method="POST">
  <div class="row">
    <div class="col-6">
      Id Pago
      <input type="text" class="form-control" name="idpago">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
      Id prestamo
      <input type="text" class="form-control" name="idprestamo">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
    </div>

    <div class="col-6">
        Monto
      <input type="numerico" class="form-control" name="monto">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
     Fecha Pago
      <input type="numerico" class="form-control" name="fechapago">
      
      <span class="invalid-feedback d-block" role="alert">
       
      </span>
      
    </div>

    <div class="col-6">
      Tipo Pago</P>
      <input type="text" class="form-control" name="tipopago">
      
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
