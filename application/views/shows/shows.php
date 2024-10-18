<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <title>Shows</title>
</head>

<body data-bs-theme="dark">
    <div class="fondo min-vh-100" style="background-image: url('<?php echo base_url("assets/imagenes/fondo-shows.jpg"); ?>');">
        <section class="container my-5 pt-5">
            <div class="row">
                <?php foreach ($shows as $show): ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4">
                        <div class="card w-100">
                            <img src="<?php echo base_url('assets/imagenes/' . $show->imagen) ?>" class="card-img-top" style="width: 100%; height: 13rem;" alt="imagen del show">
                            <?php if($show->cant_entradas_disponibles == 0) : ?>
                            <img src="<?php echo base_url('assets/imagenes/soldout.png') ?>" class="card-img-center" style="width: 10%; height: 10%; position:absolute  top: 100%; left: 100%; transform: translate(45%, -100%); " alt="Sold Out">
                            <?php endif;?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $show->nombre; ?></h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $show->fecha; ?></h6>
                                <?php if($show->cant_entradas_disponibles > 0) : ?>
                                <div class="d-flex justify-content-between">
                                    <a href="<?php echo base_url('shows/show/') . $show->id; ?>" class="btn" style="background-color: var(--rojo);">Más Info</a>
                                    <a href="<?php echo base_url('shows/show/') . $show->id; ?>" class="btn text-dark bg-white">Comprar</a>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>