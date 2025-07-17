<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Astratopo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />

    <!-- FontAwesome para íconos sociales (si se usan en footer) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Copia completa del estilo de tu vista buena -->
    <style>
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

        .card.bg-dark.text-white {
            background-color: #000 !important;
        }

        .btn-light {
            color: #000;
            font-weight: 600;
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
    </style>
</head>

<body>
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

    <!-- Formulario de contacto -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark text-white shadow-lg rounded">
                    <div class="card-header text-center">
                        <h3>Contáctenos</h3>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <form action="#" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Correo electrónico</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="asunto" class="form-label">Asunto</label>
                                <input type="text" id="asunto" name="asunto" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea id="mensaje" name="mensaje" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-light">Enviar</button>
                            </div>
                        </form>

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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>