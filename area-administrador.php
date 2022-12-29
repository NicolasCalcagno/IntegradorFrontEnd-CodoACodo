<?php
session_start();
if ($_SESSION['tipoUsuario'] != 'Administrador') {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css" />
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/area-administrador.css">
    <link rel="shortcut icon" href="assets/icons/codoacodo.ico" />

    <title>Area Administrador</title>
</head>

<body>
    <!--Header-->
    <?php include_once("templates/header.php") ?>

    <!-- Area Administrador -->
    <main class="mt-5">
        <div class="container">
            <h1 class="text-center">Usuarios</h1>
        </div>

        <div class="container mb-5">
            <div class="row row-cols-12 row-cols-md-12">
                <div class="col mb-4 mb-md-0">
                    <table class="table table-striped table-hover table-bordered" id="tablaUsuarios">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th class="text-center">Rol</th>
                                <th>Nombre completo</th>
                                <th>Correo electronico</th>
                                <th>Contraseña</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("backend/conexion-bd.php");

                            $query = "SELECT usuarios.Id, usuarios.Nombre, usuarios.Apellido, usuarios.Correo, usuarios.Clave, tipo_usuario.Nombre AS 'Tipo_Usuario' FROM usuarios INNER JOIN tipo_usuario ON IdTipoUsuario=tipo_usuario.Id ORDER BY usuarios.Id ASC;";
                            $consulta = mysqli_query($conexion, $query);

                            if (!$consulta) {
                                echo "Ha ocurrido un error al seleccionar los usuarios: " . mysqli_error($conexion);
                            } else {
                                while ($listado = mysqli_fetch_assoc($consulta)) {
                                    echo "<tr>";
                                    echo "<td class='fw-bold'>" . $listado['Id'] . "</td>";
                                    if ($listado['Tipo_Usuario'] == 'Administrador') echo '<td class="text-center"><span class="badge text-bg-danger">' . $listado['Tipo_Usuario'] . "</span></td>";
                                    else if ($listado['Tipo_Usuario'] == 'Orador') echo '<td class="text-center"><span class="badge text-bg-warning">' . $listado['Tipo_Usuario'] . "</span></td>";
                                    else if ($listado['Tipo_Usuario'] == 'Cliente') echo '<td class="text-center"><span class="badge text-bg-primary">' . $listado['Tipo_Usuario'] . "</span></td>";
                                    echo "<td>" . $listado['Nombre'] . " " . $listado['Apellido'] . "</td>";
                                    echo "<td>" . $listado['Correo'] . "</td>";
                                    echo "<td>" . $listado['Clave'] . "</td>";
                                    echo '<td class="text-center">';
                                    echo '<a href="#" class="p-1 text-bg-warning" onclick="ModificarUsuario(' . $listado['Id'] . ',`' . $listado['Nombre'] . '`,`' . $listado['Apellido'] . '`,`' . $listado['Correo'] . '`,`' . $listado['Clave'] . '`);"><i class="bi bi-pencil-square"></i></a>';
                                    echo '<a class="p-1 text-bg-danger" href="#" onclick="EliminarUsuario(' . $listado['Id'] . ');"><i class="bi bi-trash3"></i></a>';
                                    echo '</td>';
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </main>
    <!-- FIN Area Administrador -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/area-administrador.js"></script>

</body>

</html>