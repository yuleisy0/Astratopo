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
                        <h5 class="card-title mt-3">Recuperar Contraseña</h5>
                        <p class="card-text mt-4">Por favor, ingrese su correo electrónico. Le enviaremos un código de verificación para continuar con el proceso.</p>
                        <form action="{{ route('enviar.codigo') }}" method="POST">
                            @csrf
                            <div class="text-center mb-3 mt-4 ">
                                <input type="email" class="form-control mx-auto" id="email" aria-describedby="emailHelp" name="email" required style="width: 60%;">
                            </div>
                            <button type="submit" class="btn btn-dark">Enviar código</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>