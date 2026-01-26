<?php
session_start();
if ($_SESSION['tipoUsuario'] != 'Orador') {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="shortcut icon" href="assets/icons/codoacodo.ico" />

    <title>Area Orador</title>
</head>

<body>
    <!-- Header -->
    <?php include_once("templates/header.php") ?>

    <!-- Area Orador-->
    <main class="mt-5">
        <div class="container text-center">
            <h1>Orador</h1>
            <img src="https://cdn.nicolascalcagno.dev/shared/conferencia-buenos-aires/images/general/pagina-en-construccion.webp" alt="" height="600px">
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>