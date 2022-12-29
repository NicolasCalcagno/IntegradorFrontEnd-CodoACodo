<?php
$id = $_GET['id'];

include_once("conexion-bd.php");
session_start();
if ($_SESSION['tipoUsuario'] == 'Administrador') {
    $consultaEliminar = "DELETE FROM usuarios WHERE Id='{$id}' AND (IdTipoUsuario=2 OR IdTipoUsuario=3)";
    $resultadoEliminar = mysqli_query($conexion, $consultaEliminar);
    header("Location: ../area-administrador.php", true, 301);
} else {
    header("Location: ../index.php", true, 301);
}
