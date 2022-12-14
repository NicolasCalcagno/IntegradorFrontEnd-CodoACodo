<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/tickets.css">
    <link rel="shortcut icon" href="assets/icons/codoacodo.ico" />

    <title>Tickets</title>
</head>

<body>
    <!--Header-->
    <?php include_once("templates/header.php") ?>

    <!--Formulario-->
    <div class="container mt-5">
        <form id="formulario">
            <!--Cards de categoria-->
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4 mb-md-0" onclick="SeleccionarCategoria('estudiante');">
                    <div class="card card-category h-100 ms-5 me-5 ms-sm-0 me-sm-0 " id="cardEstudiante">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <h5 class="card-title">Estudiante</h5>
                            <p class="card-text">Tienen un descuento</p>
                            <p class="card-text fw-bold">80%</p>
                            <p class="card-text mb-2 text-muted text-start-sm text-center">*presentar documentación</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 mb-md-0" onclick="SeleccionarCategoria('trainee');">
                    <div class="card card-category h-100 ms-5 me-5 ms-sm-0 me-sm-0" id="cardTrainee">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <h5 class="card-title">Trainee</h5>
                            <p class="card-text">Tienen un descuento</p>
                            <p class="card-text fw-bold">50%</p>
                            <p class="card-text mb-2 text-muted text-start-sm text-center">*presentar documentación</p>
                        </div>
                    </div>
                </div>
                <div class="col" onclick="SeleccionarCategoria('junior');">
                    <div class="card card-category h-100 ms-5 me-5 ms-sm-0 me-sm-0" id="cardJunior">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <h5 class="card-title">Junior</h5>
                            <p class="card-text">Tienen un descuento</p>
                            <p class="card-text fw-bold">15%</p>
                            <p class="card-text mb-2 text-muted text-start-sm text-center">*presentar documentación</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--FIN Cards de categoria-->

            <p class="text-muted text-center mt-4 mb-0">VENTA</p>
            <h1 class="text-center">VALOR DE TICKET $200</h1>


            <div class="row">
                <div class="col-12 col-md-6 mt-3">
                    <input type="text" class="form-control" placeholder="Nombre" required>
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <input type="text" class="form-control" placeholder="Apellido" required>
                </div>
                <div class="col-12 mt-3">
                    <input type="email" class="form-control" placeholder="Correo" required>
                </div>
                <div class="col-12 col-sm-6 mt-3">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" min="1" id="cantidad" class="form-control" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" required>
                </div>
                <div class="col-12 col-sm-6 mt-3">
                    <label for="categoria">Categoría</label>
                    <select class="form-select" name="categoria" aria-label="Elige tu categoría" id="categoria" required>
                        <option selected disabled hidden>Elige tu categoría</option>
                        <option value="estudiante">Estudiante</option>
                        <option value="trainee">Trainee</option>
                        <option value="junior">Junior</option>
                    </select>
                </div>

                <div class="col-12 mt-3">
                    <input type="text" id="total" class="form-control mt-3" placeholder="Total a pagar: $" disabled>
                </div>


                <div class="col-6 mt-5">
                    <input type="button" class="btn btn-success btn-submit w-100 pt-2 pb-2" onclick="Borrar()" value="Borrar">
                </div>
                <div class="col-6 mt-5">
                    <input type="button" class="btn btn-success btn-submit w-100 pt-2 pb-2" onclick="MostrarResumen()" value="Resumen">
                </div>
            </div>
    </div>

    </form>

    <!--Footer-->
    <div id="footer-poco-contenido">
        <?php include_once("templates/footer.php"); ?>
    </div>

    <script src="js/tickets.js"></script>
</body>

</html>