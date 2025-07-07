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
                        <p class="card-text mt-4">Ingrese el código de verificación enviado a su correo</p>
                        
                        <form action="{{ route('validar.codigo') }}" method="POST">
                            @csrf
                            <input type="hidden" name="email" value="{{ $email }}">

                            <div class="text-center mb-3 mt-4">
                                <input type="text" class="form-control mx-auto" id="codigo" name="codigo" required style="width: 60%;" placeholder="Ingresa el código">
                            </div>

                            <button type="submit" class="btn btn-dark">Verificar código</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>