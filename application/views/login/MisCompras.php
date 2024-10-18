<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <title>UNLA ARENA</title>
</head>
<body class="container d-flex flex-column justify-content-center vh-100 align-items-center" data-bs-theme="dark" 
        style="background-image: url('<?php echo base_url("assets/imagenes/fondo-login.jpg"); ?>'); background-repeat: no-repeat; background-size: cover; ">         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre Espectaculo</th>
        <th>Cantidad de entradas compradas</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($compras as $compra):  ?>
            <tr>
                <td>
                    <?=$compra->id_compra?>
                </td>
                <td>
                    <?=$compra->nombre?>
                </td>
                <td>
                    <?=$compra->cant_entradas_compradas?>
                </td>
                <td>
                    <a href="<?= base_url()?>Shows/show/<?=$compra->id_espectaculo?>">
                        <button  type="submit" class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Info del show</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>