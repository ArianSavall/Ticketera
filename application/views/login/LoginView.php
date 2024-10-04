<?php ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/navbar.css'); ?>">
    </head>
    <body>
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
</body>
</html>
</body>
</html>