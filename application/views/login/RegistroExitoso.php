<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    </head>

    <body class="container d-flex flex-column justify-content-center vh-100 align-items-center" data-bs-theme="dark" 
        style="background-image: url('<?php echo base_url("assets/imagenes/fondo-login.jpg"); ?>'); background-repeat: no-repeat; background-size: cover; ">
        <div class="card mx-auto" style="border-radius: 15px;">
            <div class="card-body p-5 ">
              <h2 class="text-uppercase text-center mb-4">¡Registro Exitoso!</h2>

              <p> <a href="<?= base_url('loginC') ?>"
                    class="fw-bold text-body text-center"><u>Ingresá con tu cuenta</u></a></p>
            </div>
          </div>     
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>