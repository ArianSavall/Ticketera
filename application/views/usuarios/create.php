<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <title>Crear usuario</title>
</head>
<body class="fondo" style="background-image: url('<?php echo base_url("assets/imagenes/fondo.png"); ?>');" data-bs-theme="dark">
    <div class="container p-5 bg-dark rounded" style="width: 50%; margin-top: 100px; margin-bottom: 100px;">
        <h1>Crear usuario</h1>
        <form action="<?php echo base_url('usuario/store') ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombreUsuario" class="form-label">Nombre: </S></label>
                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required>
            </div>
            <div class="mb-3">
                <label for="emailUsuario" class="form-label">Email: </S></label>
                <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" required>
            </div>
            <div class="mb-3">
                <label for="passwordUsuario" class="form-label">Contraseña: </S></label>
                <input type="" class="form-control" id="passwordUsuario" name="passwordUsuario" required>
            </div>
            <div class="mb-3">
                <label for="esAdmin" class="form-label">Es Admin?: </S></label><br>
                <input type="radio" name="esAdmin" value="1"> Sí<br>
                <input type="radio" name="esAdmin" value="0"> No<br>
            </div>
           
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>