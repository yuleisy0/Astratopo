<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Astratopo</title>

    <style>
        .navbar .nav-link.active {
            border-bottom: 2px solid white;
            padding-bottom: 5px;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/Atratopo.jpeg') }}" alt="logo" width="30" height="24">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}" href="{{ route('inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('nosotros') ? 'active' : '' }}" href="{{ route('nosotros') }}">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('servicios') ? 'active' : '' }}" href="{{ route('servicios') }}">Servicios</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contactanos') ? 'active' : '' }}" href="{{ route('contactanos') }}">Contáctanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('galeria') ? 'active' : '' }}" href="{{ route('galeria') }}">Galería</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>