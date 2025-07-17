<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@600&display=swap" rel="stylesheet" />

    <title>Astratopo</title>

    <style>
        .navbar .nav-link.active {
            border-bottom: 2px solid white;
            padding-bottom: 5px;
        }

        .servicio-box {
            background-color: #e0e0e0;
            height: 120px;
            margin-bottom: 10px;
        }

        footer {
            background-color: #000;
            color: #ccc;
            padding: 2rem 0;
            font-size: 0.9rem;
        }

        .social-icons a {
            color: #ccc;
            margin: 0 12px;
            font-size: 1.6rem;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #fff;
            transform: scale(1.2);
        }

        /* Navbar */
        .navbar {
            box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
            background-color: #000 !important;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff !important;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #bbb !important;
            border-bottom: 3px solid #fff;
            font-weight: 600;
        }

        .navbar-brand img {
            margin-right: 8px;
        }

        h1,
        h5 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: #000;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/Atratopo.jpeg') }}" alt="Astrotopo" width="40" height="32" />
                Astrotopo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
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
                        <a class="nav-link {{ request()->routeIs('contactanos') ? 'active' : '' }}"
                            href="{{ route('contactanos') }}">Contáctanos</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- SECCIÓN SERVICIOS -->
    <div class="container my-5">
        <h2 class="tituloPrincipal text-center mb-4">Nuestros servicios</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-4">

            <!-- Servicio 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/catrastro.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6>Planos de catastro</h6>
                        <p class="card-text">Elaboración de planos detallados que permiten registrar legalmente propiedades y terrenos ante instituciones oficiales.</p>
                    </div>
                </div>
            </div>

            <!-- Servicio 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/Avaluos.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6>Avalúos</h6>
                        <p class="card-text">Estimación del valor de propiedades para procesos de venta, financiamiento o trámites legales y administrativos.</p>
                    </div>
                </div>
            </div>

            <!-- Servicio 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/replanteo.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6>Replanteo topográfico</h6>

                        <p class="card-text">Marcado físico en el terreno de puntos clave definidos en los planos para la ejecución de proyectos de construcción.</p>
                    </div>
                </div>
            </div>


        </div>

    </div>


    <footer>
        <div class="container text-center">
            <div class="social-icons mb-3">
                <a href="https://facebook.com/tuempresa" target="_blank" aria-label="Facebook"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/tuempresa" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com/tuempresa" target="_blank" aria-label="Instagram"><i
                        class="fab fa-instagram"></i></a>

            </div>
            <small>© 2025 Astrotopo. Todos los derechos reservados.</small>
        </div>
    </footer>

    <!-- Bootstrap JS y Bootstrap Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>