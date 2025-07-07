<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Astratopo</title>

<body>
    <div class="bg-login py-5 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="row w-100">
            <div class="col-sm-6 mx-auto">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title mt-3">Cambiar Contraseña</h5>
                        <p class="card-text mt-4">Ingresa tu nueva contraseña. Asegúrate de que sea segura y fácil de recordar. Una buena contraseña contiene al menos 8 caracteres, incluyendo letras, números y símbolos.</p>
                        <form action="{{ route('guardar.nueva.contrasena') }}" method="POST">
                            @csrf
                            <input type="hidden" name="email" value="{{ $email }}">
                            <div class="mb-3">
                                <input type="password" class="form-control mx-auto" id="password" name="password" required placeholder="Nueva Contraseña" style="width: 60%; text-align: center;">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control mx-auto" id="password_confirmation" name="password_confirmation" required placeholder="Confirmar Contraseña" style="width: 60%; text-align: center;">
                            </div>
                            <button type="submit" class="btn btn-dark">Guardar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>