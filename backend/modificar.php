<?php
$id = $_POST['id'];
$nuevoNombre = $_POST['nombre'];
$nuevoApellido = $_POST['apellido'];
$nuevoCorreo = $_POST['correo'];
$nuevaClave = $_POST['clave'];


include_once("conexion-bd.php");
session_start();

if (isset($_SESSION['tipoUsuario']) == 'Administrador') {
    $consultaModificar = "UPDATE usuarios SET Nombre='{$nuevoNombre}', Apellido='{$nuevoApellido}', Correo='{$nuevoCorreo}', Clave='{$nuevaClave}' WHERE Id='{$id}' AND (IdTipoUsuario=2 OR IdTipoUsuario=3)";
    $resultadoModificar = mysqli_query($conexion, $consultaModificar);
}
