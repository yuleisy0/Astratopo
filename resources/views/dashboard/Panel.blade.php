<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <title>Astratopo</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/Atratopo.jpeg') }}" alt="logo" width="30" height="24" />
      </a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-outline-light">Cerrar sesión</button>
      </form>
    </div>
  </nav>

  <div class="bg-editar py-5 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="container">
      <h4 class="text-center mb-5">Secciones disponibles para editar</h4>

      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-5 mb-4">
          <div class="card bg-dark text-white h-100 cardInicio">
            <div class="card-body px-4 py-3">
              <h5 class="card-title text-center mt-4 mb-4">Sección Inicio</h5>
              <a href="#" class="btn btn-outline-light mx-auto d-block mb-3 text-center" style="width: fit-content;">
                Editar
              </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-5 mb-4">
          <div class="card bg-dark text-white h-100 cardInicio">
            <div class="card-body px-4 py-3">
              <h5 class="card-title text-center mt-4 mb-4">Sección Nosotros</h5>
              <a href="{{ route('editnosotros') }}" class="btn btn-outline-light mx-auto d-block mb-3 text-center" style="width: fit-content;">
                Editar
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-NiZsaRswZmzGrST06Ax0l4LjsvF0fFt9vqvHF0sFxqEKXOnJ3xnQqctyRWle0sjc" crossorigin="anonymous"></script>

</body>

</html>

<style>
  .cardInicio {
    border-radius: 30px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    color: white;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    border-style: solid;
    border-bottom: 0px 6px 20px rgba(0, 0, 0, 0.3);
  }

  .cardInicio:hover {
    transform: scale(1.05);
    box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.3);
  }
</style>