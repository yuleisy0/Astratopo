<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Astrotopo - Topografía Profesional</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous" />

  <!-- FontAwesome para íconos sociales -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Google Fonts - Montserrat y Lato -->
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@600&display=swap" rel="stylesheet" />

  <style>
    /* Tipografía moderna */
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

    /* Hero section */
    .hero-text h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .hero-text p {
      font-size: 1.125rem;
      color: #222;
    }

    /* Carousel */
    .carousel-item img {
      height: 450px;
      object-fit: cover;
      border-radius: 0.5rem;
      box-shadow: 0 4px 15px rgb(0 0 0 / 0.15);
    
    }

    .carousel-caption {
      background-color: rgba(0, 0, 0, 0.7);
      padding: 1rem 1.5rem;
      border-radius: 0.5rem;
      bottom: 20px;
    }

    .carousel-caption h5,
    .carousel-caption p {
      color: #fff;
      margin: 0;
    }

    /* Cards misión y visión */
    .card-mv {
      border: 1px solid #000;
      border-radius: 1rem;
      box-shadow: 0 8px 24px rgb(0 0 0 / 0.15);
      transition: transform 0.3s ease;
      background-color: #fff;
      color: #000;
    }

    .card-mv:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 32px rgb(0 0 0 / 0.25);
    }

    .card-mv .card-body {
      padding: 2rem;
    }

    /* Footer */
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


    .accordion-button:not(.collapsed) {
      background-color: #000 !important;
      color: #fff;
    }



    /* Responsive ajustes */
    @media (max-width: 767.98px) {
      .hero-text h1 {
        font-size: 1.8rem;
      }

      .carousel-item img {
        height: 300px;
      }

      .align-img-to-carousel {
        margin-top: 60px;
      }
    }
  </style>
</head>

<body>

  <!-- Navbar -->
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

  <!-- Hero principal -->
  <section class="container mt-5 mb-5">
    <div class="row align-items-center">
      <div class="col-lg-6 hero-text">
        <h1 style="font-weight: 400;">Tu proyecto inicia con una buena medición</h1>
        <p class="mb-4" style="font-size: 20px;">Somos Astratopo, una empresa de ingeniería topográfica
          Garantizamos calidad y precisión en cada proyecto</p>
        <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt, nisl non fermentum cursus, urna
          nisl varius justo, nec tincidunt lacus lorem nec nulla.</p>-->
      </div>
      <div class="col-lg-6 d-flex justify-content-end align-items-start" style="margin-top: 40px;">
        <img src="{{ asset('images/imagenPrincipal_1.jpeg') }}" alt="Imagen topografía" class="img-fluid rounded shadow" style="height: 400px; object-fit: cover; width:400px " />
      </div>


    </div>
  </section>


  <!-- Carrusel / Slider -->
  <section class="container mt-5 mb-5">
    <div id="carouselAstrotopo" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators mb-5">
        <button type="button" data-bs-target="#carouselAstrotopo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselAstrotopo" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselAstrotopo" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselAstrotopo" data-bs-slide-to="3" aria-label="Slide 4"></button>

      </div>

      <div class="carousel-inner rounded shadow-sm">
        @if($inicio && $inicio->img1)
        <div class="carousel-item active">
          <img src="{{ asset('storage/inicio/' . $inicio->img1) }}" class="d-block w-100" alt="Imagen 1">
          <div class="carousel-caption d-none d-md-block">
            <h5>Medición precisa</h5>
            <p>Resultados confiables para tus proyectos.</p>
          </div>
        </div>
        @endif

        @if($inicio && $inicio->img2)
        <div class="carousel-item {{ empty($inicio->img1) ? 'active' : '' }}">
          <img src="{{ asset('storage/inicio/' . $inicio->img2) }}" class="d-block w-100" alt="Tecnología avanzada">
          <div class="carousel-caption d-none d-md-block">
            <h5>Tecnología avanzada</h5>
            <p>Equipos modernos para mayor exactitud.</p>
          </div>
        </div>
        @endif

        @if($inicio && $inicio->img3)
        <div class="carousel-item {{ empty($inicio->img1) && empty($inicio->img2) ? 'active' : '' }}">
          <img src="{{ asset('storage/inicio/' . $inicio->img3) }}" class="d-block w-100" alt="Compromiso con la calidad">
          <div class="carousel-caption d-none d-md-block">
            <h5>Compromiso con la calidad</h5>
            <p>Apoyamos tu éxito con resultados confiables.</p>
          </div>
        </div>
        @endif

        @if($inicio && $inicio->img4)
        <div class="carousel-item {{ empty($inicio->img1) && empty($inicio->img2) ? 'active' : '' }}">
          <img src="{{ asset('storage/inicio/' . $inicio->img4) }}" class="d-block w-100" alt="Compromiso con la calidad">
          <div class="carousel-caption d-none d-md-block">
            <h5>Confianza y seguridad</h5>
            <p>Trabajo profesional que respalda tu inversión.</p>
          </div>
        </div>
        @endif

        @if(!$inicio || (empty($inicio->img1) && empty($inicio->img2) && empty($inicio->img3)))
        <div class="carousel-item active">
          <img src="{{ asset('images/placeholder.jpeg') }}" class="d-block w-100" alt="Imagen de respaldo">
          <div class="carousel-caption d-none d-md-block">
            <h5>Astrotopo</h5>
            <p>Imágenes próximamente disponibles.</p>
          </div>
        </div>
        @endif
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselAstrotopo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselAstrotopo" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </section>



  <!-- Misión y Visión -->
  <section class="container my-5">
    <div class="row g-4 mt-5">
      <div class="col-md-6">
        <div class="card card-mv">
          <div class="card-body">
            <h5 class="card-title text-center mb-4">Misión</h5>
            <p>En Astrotopo, ofrecemos servicios profesionales de topografía con tecnología avanzada,
              comprometidos con brindar soluciones confiables y personalizadas que apoyen el desarrollo exitoso de proyectos
              en la construcción, ingeniería y planificación territorial. Nuestro enfoque es entregar resultados de alta calidad
              con integridad, eficiencia y atención cercana a nuestros clientes.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card-mv">
          <div class="card-body">
            <h5 class="card-title text-center mb-4">Visión</h5>
            <p>Ser reconocidos como una empresa líder en servicios topográficos en nuestra región, destacándonos por la
              innovación, excelencia técnica y compromiso con el crecimiento sostenible de nuestros clientes. Queremos
              ampliar nuestra presencia, construir relaciones duraderas y contribuir al progreso de la infraestructura con
              responsabilidad y profesionalismo.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="container my-5">
    <h3 class="text-center mb-4">Preguntas frecuentes</h3>

    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed custom-dark" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            ¿Qué servicios ofrece la empresa?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Ofrecemos servicios profesionales de topografía como levantamientos topográficos, deslindes de propiedades, nivelaciones, replanteos para construcción, y estudios catastrales. Adaptamos cada proyecto según las necesidades del cliente, ya sea particular, empresarial o institucional.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed custom-dark" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            ¿Para qué necesito un estudio topográfico?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Un estudio topográfico es esencial para conocer con precisión las dimensiones, formas y características del terreno. Es fundamental para trámites legales, construcción, subdivisión de lotes o regularización de propiedades.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed custom-dark" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            ¿En qué zonas brindan servicio?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Atendemos proyectos en toda Costa Rica.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed custom-dark" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            ¿Qué documentos necesito para solicitar un servicio?
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Generalmente se requiere una copia del plano de la propiedad, escritura o documento de propiedad, y datos personales del propietario. En algunos casos, podríamos solicitar información adicional según el tipo de estudio requerido.</div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed custom-dark" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
            ¿Cuánto cuesta un plano de catastro?
          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Este servicio se cotiza dependiendo del área de la propiedad, ubicación y complejidad de cada caso, siempre se realiza el estudio previo del inmueble para garantizar la seguridad jurídica</div>
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

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>