<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <h1>Empleados</h1>
    <h5>Listado de empleados</h5>
    <hr>
    {{-- Botón para ir al formulario a agregar empleado --}}
    <a href="/empleado/create" class="btn btn-danger">Agregar nuevo empleado</a>
    <table class="table table-hover table-bordered table-info mt-2">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Cargo</td>
            <td>DUI</td>
            <td>Teléfono</td>
            <td>Acciones</td>
        </tr>
   
    </table>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
