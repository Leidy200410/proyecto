<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informes</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <h1>Informes</h1>
    <h5>Listado de informes</h5>
    <hr>
    {{-- Botón para ir al formulario a agregar informe --}}
    <a href="/informes/create" class="btn btn-danger">Agregar nuevo informe</a>
    <table class="table table-hover table-bordered table-info mt-2">
        <tr>
            <td>ID EQUIPO</td>
            <td>FECHA INFORME</td>
            <td>DETALLES</td>
           
</tr>
   
    </table>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
