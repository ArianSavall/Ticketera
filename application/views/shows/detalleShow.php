<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <title>Document</title>
</head>

<body class="fondo" data-bs-theme="dark" style="background-image: url('<?php echo base_url("assets/imagenes/fondo-detalle-show.jpg"); ?>');">
    <div class="d-flex align-items-center justify-content-center mt-5">
        <div class="w-75 h-75 bg-dark mt-5 d-flex flex-column rounded p-3 align-items-center justify-content-center text-center">
            <h1 class="mb-4"><?php echo $show->nombre; ?></h1>
            <p><?php echo $show->descripcion; ?></p>
            
            <div class="d-flex flex-column flex-lg-row my-4 align-items-center justify-content-center">
                <img src="<?php echo base_url('assets/imagenes/') . $show->imagen; ?>" alt="foto del show" class="img-fluid rounded shadow mb-3 mb-lg-0" style="height: 16rem; width: 25rem;">

                <div class="rounded p-4 ms-3" style="background-color: var(--rojo);">
                    <p>UNLA Arena <a href="#">¿Cómo Llegar?</a></p>
                    <p>Fecha: <?php echo $show->fecha; ?></p>
                    <p>Precio: $<?php echo $show->precio_entradas; ?></p>

                    <div class="d-flex align-items-center">
                        <input type="number" id="cantidadEntradas" name="cantidad" class="form-control me-2" value="1" min="1" max="10" style="width: 5rem; text-align: center;">
                        <a href="#" class="btn bg-light text-dark">Comprar</a>
                    </div>

                    <p class="mt-2">Total: </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
