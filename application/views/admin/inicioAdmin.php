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
            <h2>Lista de shows</h2>
            <table class="table mt-5 table-bordered">
            <thead class="text-center align-middle">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Entradas disponibles</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider text-center align-middle">
                <?php foreach($shows as $show): ?>
                    <tr>
                        <th scope="row"><?php echo $show->id ?></th>
                        <td><?php echo $show->nombre ?></td>
                        <td><img src="<?php echo $show->imagen ?>" alt="imagen del show" style="max-height: 5rem;"></td>
                        <td><?php echo $show->fecha ?></td>
                        <td><?php echo$show->cant_entradas_disponibles ?></td>
                        <td><?php echo $show->precio_entradas ?></td>
                        <td><?php echo $show->descripcion ?></td>
                        <td>
                            <div class="d-flex flex-column">
                                <a href="#" class="btn btn-primary my-2">Editar</a>
                                <form action="<?php echo base_url('shows/delete/') . $show->id ?>" method="POST" >
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
            <a href="<?php echo base_url('shows/create') ?>" class="btn btn-success mt-4 fw-bold p-3" style="text-transform: uppercase;">Crear Nuevo Show</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>