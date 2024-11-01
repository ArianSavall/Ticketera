<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/Imagenes/logo.ico'); ?>">

    <title>Como Llegar</title>
</head>
<body class="fondo d-flex mt-5" style="background-image: url('<?php echo base_url("assets/imagenes/fondo-como-llegar.jpg"); ?>');" data-bs-theme="dark">
    <div class="container bg-dark d-flex p-4  mt-5 rounded justify-content-between">
        <div class="d-flex flex-column align-items-center gap-5">
            <h4>Medios de transporte</h4>
            <div class="d-flex gap-5 bg-light rounded text-dark p-3">
                <div>
                    <p>Tren - <span class="fw-bold">Linea Urquiza</span></p>
                    <p>Tren - <span class="fw-bold">San Martin</span></p>
                </div>
                <div>
                    <p>Subte - <span class="fw-bold">Linea B</span></p>
                    <div>
                        <p>Colectivos: <span class="d-block text-secondary">34, 42, 55, 63, 78, 87, 93, 111, 176, </span><span class="d-block text-secondary">19, 47, 65, 71, 76, 90, 99, 108, 109,</span><span class="text-secondary">110, 127, 166</span></p>
                        <p></p>
                    </div>
                </div>
            </div> 
        </div>
        <img src="<?php echo base_url("assets/imagenes/mapa.png"); ?>" alt="mapa" style="max-width: 600px;">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>