<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <title>Crear show</title>
</head>
<body class="fondo" style="background-image: url('<?php echo base_url("assets/imagenes/fondo.png"); ?>');" data-bs-theme="dark">
    <div class="container p-5 bg-dark rounded" style="width: 50%; margin-top: 100px; margin-bottom: 100px;">
        <h1>Crear Show</h1>
        <form action="<?php echo base_url('shows/store') ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="idShow" class="form-label">ID: </S></label>
                <input type="text" class="form-control" id="idShow" name="idShow">
            </div>
            <div class="mb-3">
                <label for="nombreShow" class="form-label">Nombre: </S></label>
                <input type="text" class="form-control" id="nombreShow" name="nombreShow">
            </div>
            <div class="mb-3">
                <label for="fechaShow" class="form-label">Fecha: </label>
                <input type="date" class="form-control" id="fechaShow" name="fechaShow">
            </div>
            <div class="mb-3">
                <label for="imagenShow" class="form-label">Seleccione una imagen: </label>
                <input type="file" class="form-control" id="imagenShow" name="imagenShow">
            </div>
            <div class="mb-3">
                <label for="cantEntradasShow" class="form-label">Cantidad de entradas disponibles: </label>
                <input type="number" min="1" class="form-control" id="cantEntradasShow" name="cantEntradasShow">
            </div>
            <div class="mb-3">
                <label for="precioEntradasShow" class="form-label">Precio de las entradas: </label>
                <input type="number" min="1" class="form-control" id="precioEntradasShow" name="precioEntradasShow">
            </div>
            <div class="mb-3">
                <label for="descripcionShow" class="form-label">Descripcion: </label>
                <textarea name="descripcionShow" id="descripcionShow" class="form-control" style="resize: none;"></textarea>
            </div>
           
           
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>