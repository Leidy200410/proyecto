<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestamo</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <h1>Prestamo</h1>
    <h5>Listado de prestamo</h5>
    <hr>
    {{-- Botón para ir al formulario a agregar prestamo --}}
    <a href="/prestamo/create" class="btn btn-danger">Agregar nuevo prestamo</a>
    <table class="table table-hover table-bordered table-info mt-2">
        <tr>
            <td>ID PRESTAMO</td>
            <td>ID USUARIO</td>
            <td>FECHA PRESTAMO</td>
            <td>FECHA DEVOLUCION</td>
           
</tr>
   
    </table>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
