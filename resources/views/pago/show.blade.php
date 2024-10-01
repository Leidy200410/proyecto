<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <h1>Pago</h1>
    <h5>Listado de pago</h5>
    <hr>
    {{-- Botón para ir al formulario a agregar pago --}}
    <a href="/pago/create" class="btn btn-danger">Agregar nuevo pago</a>
    <table class="table table-hover table-bordered table-info mt-2">
        <tr>
            <td>ID PAGO</td>
            <td>ID PRESTAMO</td>
            <td>MONTO</td>
            <td>FECHA PAGO</td>
            <td>TIPO PAGO</td>

           
</tr>
   
    </table>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
