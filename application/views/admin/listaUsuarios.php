<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <title>Admin</title>
</head>
<body data-bs-theme="dark">
    <div class="fondo min-vh-100" style="background-image: url('<?php echo base_url("assets/imagenes/fondo-shows.jpg"); ?>');">
        <div class="container d-flex flex-column align-items-center mt-5 p-5">
            <h2>Lista de Usuarios</h2>
            <table class="table mt-5 table-bordered">
            <thead class="text-center align-middle">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider text-center align-middle">
                <?php foreach($users as $user): ?>
                        <tr>
                            <?php if($user->esAdmin == 0) :?>
                            <td><?php echo $user->id_user ?></td>
                            <td><?php echo $user->email ?></td>
                            <td><?php echo $user->nombre ?></td>
                            <?php else :?>
                            <td style="color: green;"><?php echo $user->id_user ?></td>
                            <td style="color: green;"><?php echo $user->email ?></td>
                            <td style="color: green;"><?php echo $user->nombre ?></td>
                            <?php endif; ?>
                            <td>
                                <?php if($user->esAdmin == 0) :?>
                                <div class="d-flex flex-column justify-content-center align-items-center" style="gap: 5px;">
                                    <a href="<?=base_url('MisComprasC/obtener_compras_usuario/') . $user->id_user ?>" class="btn btn-primary mt-2">Ver Compras</a>
                                    <a href="<?php echo base_url('Usuario/edit/') . $user->id_user ?>" class="btn btn-warning">Editar</a>
                                    <form action="<?php echo base_url('usuario/delete/') . $user->id_user ?>" method="POST" >
                                        <button class="btn btn-danger" type="submit">Eliminar</button>
                                    </form>
                                </div>
                                <?php endif; ?>
                            </td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
            <a href="<?php echo base_url('usuario/create') ?>" class="btn btn-success mt-4 fw-bold p-3" style="text-transform: uppercase;">Crear Nuevo Usuario</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>