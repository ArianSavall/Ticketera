<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/Imagenes/logo.ico'); ?>">

    <title>Admin</title>
</head>
<body data-bs-theme="dark">
    <div class="fondo min-vh-100" style="background-image: url('<?php echo base_url("assets/imagenes/fondo-shows.jpg"); ?>');">
        <div class="container d-flex flex-column align-items-center mt-5 p-5">
            <h2>Lista de Compras</h2>
            <table class="table mt-5 table-bordered">
            <thead class="text-center align-middle">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Email Usuario</th>
                    <th scope="col">Id Espectaculo</th>
                    <th scope="col">Cantidad entradas</th>
                </tr>
            </thead>
            <tbody class="table-group-divider text-center align-middle">
                <?php foreach($compras as $compra): ?>
                    <tr>
                        <td><?php echo $compra->id_compra ?></td>
                        <td><?php echo $compra->email_usuario ?></td>
                        <td><?php echo $compra->id_espectaculo ?></td>
                        <td><?php echo $compra->cant_entradas_compradas ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>