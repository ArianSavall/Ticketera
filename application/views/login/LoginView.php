<?php ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    </head>

    <body class="d-flex justify-content-center align-items-center" data-bs-theme="dark">
        <div class="container">
            <br/><br/>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <h3 class="panel-title colorN">Ingrese con su usuario</h3>
                    <div class="panel-body">
                        <form action="<?= base_url(); ?>LoginC/ValidaUsuario" method="POST">                              
                            <p>Ingrese su Usuario</p>  <input type="text" placeholder="Email" autofocus name="usuario" class="form-control" required="" autocomplete="off">
                            <p>Ingrese su Clave</p>  <input type="password" placeholder="Contraseña" name="clave" class="form-control"   required="" autocomplete="off">
                            <hr/>
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok" ></span>Entrar</button>
                            <p><br/></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    <h1> <?php echo($conforme); ?> </h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>