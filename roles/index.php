<?php
    require_once('../class/Roles.php');
    $rol =  new Rol();
    $lista = $rol->listar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM Roles</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <header class="d-flex justify-content-center align-items-center bg-primary text-light">
        <h1> <i class="bi bi-person"></i> ABM de Roles </h1>
    </header>
    <main class="container">
        <div class="row mt-4">
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Descripción</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($lista as $item) {
                                $id_rol = $item['id_rol'];
                                $descripcion = $item['descripcion'];

                                echo "
                                        <tr>
                                        <td>$id_rol</td>
                                        <td>$descripcion</td>
                                        <td>
                                            <a href='rolEditar.php?id=$id_rol&descripcion=$descripcion' class='btn btn-outline-dark'><i class='bi bi-pencil-square'></i></a>
                                            <a href='rolEliminar.php?id=$id_rol&descripcion=$descripcion' class='btn btn-outline-danger'><i class='bi bi-trash'></i></a>
                                        </td>
                                    </tr>";
                   

                            }

                        ?>

                    </tbody>
                </table>
            </div>
            <div class="col-md-2">
                <a class="btn btn-outline-success" href="rolEditar.php">Nuevo</a>
            </div>
        </div>


    </main>
    <footer class="d-flex justify-content-center align-items-center bg-dark text-light">
        <p> DV | Producción Web | 2022</p>
    </footer>
</body>
</html>