<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Astratopo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

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

    <div class="bg-editar py-5 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-7 mb-4">
                    <form method="POST" action="{{ route('editnosotros.update', ['id' => $nosotros->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="d-flex align-items-center mb-4 justify-content-center gap-3">
                            <a href="{{ route('panel') }}" class="btn btn-outline-light p-2" style="width: fit-content;">
                                <i class="fa-solid fa-arrow-left" style="color: #000000;"></i>
                            </a>
                            <h4 class="mb-0">Editar sección Nosotros</h4>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="tituloPrincipal" class="form-label">Título principal</label>
                                <input type="text" class="form-control" id="tituloPrincipal" name="tituloPrincipal" required value="{{ $nosotros->tituloPrincipal }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="descripcionInicial" class="form-label">Descripción inicial</label>
                                <input type="text" class="form-control" id="descripcionInicial" name="descripcionInicial" required value="{{ $nosotros->descripcionInicial }}">
                            </div>

                            <div class="col-12 mb-3">
                                <label for="textoDescriptivo" class="form-label">Texto descriptivo</label>
                                <textarea class="form-control" id="textoDescriptivo" name="textoDescriptivo" rows="4" style="resize: none;" required>{{ $nosotros->textoDescriptivo }}</textarea>
                            </div>

                            <div class="col-12 mb-3 text-center">
                                @if ($nosotros->imagen)
                                <img src="{{ asset($nosotros->imagen) }}" class="imagen img-fluid mt-4" style="max-width: 200px;">
                                @endif
                                <input class="form-control" type="file" id="imagen" name="imagen">
                            </div>
                        </div>

                        <div class="text-center mt-4 d-flex justify-content-center gap-3 flex-wrap">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            <button type="submit" class="btn btn-danger ms-2">Cancelar</button>
                        </div>
                    </form>



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