<?php ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    </head>

    <body class="d-flex justify-content-center align-items-center" data-bs-theme="dark" 
        style="background-image: url('<?php echo base_url("assets/imagenes/fondo-login.jpg"); ?>'); background-repeat: no-repeat; background-size: cover; ">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                </div>
                
                <div class="col-md-4 mt-5 ">
                    <div class="alert alert-danger">
                        <?=$conforme?> 
                    </div>
                    <div class="px-3 py-3 bg-dark"> 
                        <h3 class="card-title colorN mb-4 mt-3">Ingresá a tu cuenta</h3>
                        <div class="panel-body">
                            <form action="<?= base_url(); ?>LoginC/ValidaUsuario" method="POST">
                                <div class="mb-3">
                                    <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" placeholder="Correo Electrónico">
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="clave" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>       
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
</body>
</html>