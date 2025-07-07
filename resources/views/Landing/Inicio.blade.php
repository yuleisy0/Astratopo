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
         
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-5" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      <div class="col-sm-6 mb-3 mb-sm-0 mt-4">
        
            <h1 class="card-title">Tu proyecto inicia con una buena medición</h1>
            <p class="card-text mt-4">Solo en Astratopo, tu topografía de confianza</p>
            <p class="card-text mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
      </div>
      <div class="col-sm-6">
       
              <img src="{{ asset('images/Construction-pana.svg') }}" alt="imagen" class="img-fluid rounded">

      </div>
    </div>
    <div class="row mt-5 mb-5">

    <h1>CARRUSEL</h1>
      </div>

<div class="row mt-5 mb-5">
  <div class="col-sm-6  mb-sm-0 mt-5">
    <div class="card bg-dark text-white">
      <div class="card-body px-4 py-3">
        <h5 class="card-title text-center">Misión</h5>
        <p class="card-text mt-4 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mt-5">
    <div class="card bg-dark text-white">
      <div class="card-body px-4 py-3">
        <h5 class="card-title text-center">Visión</h5>
        <p class="card-text mt-4 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
      </div>
    </div>
  </div>
</div>
  </div>
  <footer class="footer mt-auto py-3 bg-dark">
<div class="container">
<span class="text-muted">Place sticky footer content here.</span>
</div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>