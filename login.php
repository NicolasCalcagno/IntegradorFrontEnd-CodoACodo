<?php
session_start();
if ($_SESSION) {
    match ($_SESSION['tipoUsuario']) {
        'Administrador' => header("Location: area-administrador.php"),
        'Orador' => header("Location: area-orador.php"),
        'Cliente' => header("Location: area-cliente.php"),
    };
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="shortcut icon" href="assets/icons/codoacodo.ico" />

    <title>Login</title>
</head>

<body>
    <!--Header-->
    <?php include_once("templates/header.php") ?>

    <!-- Formulario -->
    <div class="container mt-5">
        <form id="formulario" action="backend/autenticacion.php" method="POST">
            <h1 class="text-center">LOGIN</h1>

            <div class=" col-12 col-md-4 mt-3 mx-auto">
                <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                    <input type="email" class="form-control" name="correo" placeholder="Correo" required>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-3 mx-auto">
                <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-lock"></i></div>
                    <input type="password" class="form-control" name="clave" placeholder="Contraseña" required>
                </div>
            </div>
            <p class="text-center">¿Aún no tenes cuenta? <a href="registro.php">Regístrate</a></p>

            <div class="col-12 col-md-6 mt-5 mx-auto text-center">
                <input type="submit" class="btn btn-success btn-submit w-50 pt-2 pb-2 text-center" value="Ingresar">
            </div>
        </form>
    </div>

    <!--Footer-->
    <div id="footer-poco-contenido">
        <?php include_once("templates/footer.php"); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="js/footer.js"></script>
    <script src="js/login.js"></script>
</body>

</html>