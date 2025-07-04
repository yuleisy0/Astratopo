<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <title>Astratopo</title>
</head>

<body>
  <div class="bg-login py-5">
    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5 border-end">
            <img src="{{ asset('images/loginImg.svg') }}"
              class="img-fluid" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <div class="text-center">
              <img src="{{ asset('images/Atratopo.jpeg') }}" alt="logo" height="200" class="mx-auto d-block">
            </div>
            <h3>Iniciar sesión</h3>
            <p class="mt-4">Bienvenido al panel administrativo de Astratopo</p>

            <form method="POST" action="{{ url('/login') }}">
              @csrf

              <div class="mb-3 mt-4">
                <label for="exampleInputEmail1" class="form-label">Correo de usuario</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
              </div>
              <div class="mb-3">

                <div class="d-grid gap-2 text-center">
                  <button type="password" class="btn btn-dark">Iniciar sesión</button>
                  @if ($errors->any())
                  <div style="color:red;">
                    @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                  </div>
                  @endif
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </section>
  </div>


</body>

</html>