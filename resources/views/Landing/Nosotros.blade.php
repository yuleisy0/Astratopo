<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Astratopo | Nosotros</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@600&display=swap" rel="stylesheet" />


    <style>
        .navbar .nav-link.active {
            border-bottom: 2px solid white;
            padding-bottom: 5px;
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

        iframe {
            border-radius: 8px;
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
            /* filter: brightness(0) invert(1);*/
            margin-right: 8px;
        }

        body {
            font-family: 'Lato', sans-serif;
            background-color: #fff;
            color: #000;
        }

        h1,
        h5 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: #000;
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

    <!-- CONTENIDO NOSOTROS -->
    <div class="container my-5" id="nosotros">
        <h2 class="tituloPrincipal text-center mb-4">{{ $nosotros->tituloPrincipal }}</h2>

        <div class="row align-items-center mb-5">
            <div class="col-md-8">
                <h5 class="descripcionInicial">{{ $nosotros->descripcionInicial }}</h5>
                <p class="textoDescriptivo">{{ $nosotros->textoDescriptivo }}</p>
                <p> Nos trasladamos a cualquier parte del país</p>
                <ul>
                    <li>Verificación de linderos</li>
                    <li>Avalúos</li>
                    <li>Informes técnicos</li>
                    <li>Obra civil</li>

                </ul>
                <div class="mt-3 d-flex align-items-center">
                    <i class="bi bi-person-fill me-2"></i>
                    <strong>Genesis Matamorros Burgos</strong> – Ingeniera
                    <i class="bi bi-telephone-fill ms-3"></i>
                    <span class="ms-1">+506 6077- 2694</span>
                </div>
            </div>
            <div class="col-md-4 text-center mt-4 mt-md-0">

                @if($nosotros->imagen)
                <img src="{{ asset($nosotros->imagen) }}" alt="Imagen nosotros" class="img-fluid rounded-circle" style="max-width: 300px;">
                @endif
            </div>
        </div>

        <h5 class="mb-3">Ubicación en Guácimo</h5>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3935.1222225092645!2d-83.67492342568584!3d10.212280171789867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa74fc1c536a8ad%3A0xa95bbcf304e3d6d6!2sGu%C3%A1cimo%2C%20Lim%C3%B3n!5e0!3m2!1ses-419!2scr!4v1720374718881!5m2!1ses-419!2scr"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- FOOTER -->
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

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>