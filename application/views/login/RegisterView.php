<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/Imagenes/logo.ico'); ?>">

        <title>Registro</title>
    </head>

    <div class = "d-flex flex-column justify-content-center align-items-center">
        <?php if($errorMessage != '') :?>
                <div class="alert alert-danger" style="margin-top: 140px";>
                    <?=$errorMessage?> 
                </div>
        <?php endif; ?>

    </div>

    <body class="container d-flex flex-column justify-content-center vh-100 align-items-center" data-bs-theme="dark" 
        style="background-image: url('<?php echo base_url("assets/imagenes/fondo-login.jpg"); ?>'); background-repeat: no-repeat; background-size: cover; ">
        <div class="card mt-3" style="border-radius: 15px;">
            <div class="card-body p-4">
              <h2 class="text-uppercase text-center mb-4">Registrarse</h2>

              <form action="<?= base_url(); ?>RegisterC/registrarUsuario" method="POST">

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" placeholder="Nombre de Usuario" name="nombre" id="form3Example1cg" class="form-control form-control-lg fs-6" required/>
                  <!--<label class="form-label" for="form3Example1cg">Nombre de usuario</label>-->
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" placeholder="Correo Electrónico" name="email" id="form3Example3cg" class="form-control form-control-lg fs-6" required/>
                  <!--<label class="form-label" for="form3Example3cg">Your Email</label>-->
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" placeholder="Contraseña" name="password" id="form3Example4cg" class="form-control form-control-lg fs-6" required/>
                  <!--<label class="form-label" for="form3Example4cg">Password</label>-->
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" placeholder="Repetir contraseña" name="passwordRepetida" id="form3Example4cdg" class="form-control form-control-lg fs-6" required/>
                  <!--<label class="form-label" for="form3Example4cdg">Repeat your password</label>-->
                </div>

                <div class="d-flex justify-content-center">
                  <button  type="submit" data-mdb-button-init
                    data-mdb-ripple-init class="btn btn-block btn-lg gradient-custom-4 text-body" style="background-color: var(--rojo);">Registrarse</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">¿Ya tenés una cuenta? <a href="<?= base_url('loginC') ?>"
                    class="fw-bold text-body"><u>Ingresá</u></a></p>

              </form>

            </div>
          </div>     
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
</body>
</html>