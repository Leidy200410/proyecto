<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    {{-- Nuestro menú --}}

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" >Registro de Prétamos de Equipos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProducts" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Empleados
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownProducts">
                            <li><a class="dropdown-item" href="/empleado/show">Ver Empleados</a></li>
                            <li><a class="dropdown-item" href="/empleado/update">Actualizar</a></li>
                            <li><a class="dropdown-item" href="/empleado/create">Crear</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownClient" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuarios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownClient">
                            <li><a class="dropdown-item" href="/usuario/show">Ver Usuarios</a></li>
                            <li><a class="dropdown-item" href="/usuario/update">Actualizar</a></li>
                            <li><a class="dropdown-item" href="/usuario/create">Crear</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Equipos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
                            <li><a class="dropdown-item" href="/equipo/show">Ver Equipos</a></li>
                            <li><a class="dropdown-item" href="/equipo/update">Actualizar</a></li>
                            <li><a class="dropdown-item" href="/equipo/create">Crear</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Préstamos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
                            <li><a class="dropdown-item" href="/prestamo/show">Ver Préstamos</a></li>
                            <li><a class="dropdown-item" href="/prestamo/update">Actualizar</a></li>
                            <li><a class="dropdown-item" href="/prestamo/create">Crear</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
                            <li><a class="dropdown-item" href="/informes/show">Ver Informes</a></li>
                            <li><a class="dropdown-item" href="/informes/update">Actualizar</a></li>
                            <li><a class="dropdown-item" href="/informes/create">Crear</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pago
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
                            <li><a class="dropdown-item" href="/pago/show">Ver Pago</a></li>
                            <li><a class="dropdown-item" href="/pago/update">Actualizar</a></li>
                            <li><a class="dropdown-item" href="/pago/create">Crear</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Devolución
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
                            <li><a class="dropdown-item" href="/devolucion/show">Ver Devolución</a></li>
                            <li><a class="dropdown-item" href="/devolucion/update">Actualizar</a></li>
                            <li><a class="dropdown-item" href="/devolucion/create">Crear</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mora
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
                            <li><a class="dropdown-item" href="/devolucion/show">Ver Mora</a></li>
                            <li><a class="dropdown-item" href="/devolucion/update">Actualizar</a></li>
                            <li><a class="dropdown-item" href="/devolucion/create">Crear</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container-fluid">
            {{-- Aquí irá el contenido de todas las páginas --}}
            @yield('content')
        </div>
        {{-- Scripts --}}
        @yield('scripts')
    
</body>
</html>