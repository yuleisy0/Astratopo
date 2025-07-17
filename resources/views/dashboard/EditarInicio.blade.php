<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar Carrusel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">

                <div class="d-flex align-items-center mb-4 justify-content-center gap-3">
                    <a href="{{ route('panel') }}" class="btn btn-outline-light p-2" style="width: fit-content;">
                        <i class="fa-solid fa-arrow-left" style="color: #000000;"></i>
                    </a>
                    <h4 class="mb-0">Editar sección Inicio</h4>
                </div>
                <hr>

                <form method="POST" action="{{ route('editinicio.update', ['id' => $inicio->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="form-label">Reemplazar Imagen 1:</label>
                        <input type="file" class="form-control" name="img1">
                        <img id="previewImg1" src="#" alt="Vista previa Imagen 1" class="img-fluid mb-3 d-none" />
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Reemplazar Imagen 2:</label>
                        <input type="file" class="form-control" name="img2">
                        <img id="previewImg2" src="#" alt="Vista previa Imagen 2" class="img-fluid mb-3 d-none" />
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Reemplazar Imagen 3:</label>
                        <input type="file" class="form-control" name="img3">
                        <img id="previewImg3" src="#" alt="Vista previa Imagen 3" class="img-fluid mb-3 d-none" />
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Reemplazar Imagen 4:</label>
                        <input type="file" class="form-control" name="img4">
                        <img id="previewImg4" src="#" alt="Vista previa Imagen 4" class="img-fluid mb-3 d-none" />
                    </div>

                    <div class="text-center mb-4">
                        <button type="submit" class="btn btn-success me-2">Guardar</button>
                        <button type="button" class="btn btn-danger ms-2" id="btnCancelar">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function previewImage(input, previewId) {
            const file = input.files[0];
            const preview = document.getElementById(previewId);

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                }
                reader.readAsDataURL(file);
            }
        }

        document.querySelector('input[name="img1"]').addEventListener('change', function() {
            previewImage(this, 'previewImg1');
        });

        document.querySelector('input[name="img2"]').addEventListener('change', function() {
            previewImage(this, 'previewImg2');
        });

        document.querySelector('input[name="img3"]').addEventListener('change', function() {
            previewImage(this, 'previewImg3');
        });

        document.querySelector('input[name="img4"]').addEventListener('change', function() {
            previewImage(this, 'previewImg4');
        });
    </script>

</body>

</html>

<style>
    .carousel-item img {
        height: 450px;
        object-fit: cover;
        border-radius: 0.5rem;
        box-shadow: 0 4px 15px rgb(0 0 0 / 0.15);
        filter: grayscale(100%) contrast(1.2);
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

    img.img-fluid {
        max-height: 200px;
        object-fit: cover;
        border: 2px dashed #ccc;
        border-radius: 0.5rem;
        margin-top: 10px;
    }
</style>