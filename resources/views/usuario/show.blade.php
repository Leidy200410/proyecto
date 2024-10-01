<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
	
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <h1>Usuario</h1>
    <h5>Listado de usuario</h5>
    <hr>
    {{-- Botón para ir al formulario a agregar usuario --}}
    <a href="/usuario/create" class="btn btn-danger">Agregar nuevo usuario</a>
    <table class="table table-hover table-bordered table-info mt-2">
        <tr>
            <td>NOMBRE</td>
            <td>DUI</td>
            <td>GMAIL</td>
            <td>DIRECCION</td>
            <td>TELEFONO</td>
            <td>FECHA DE REGISTRO</td>

           
</tr>
   
    </table>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
