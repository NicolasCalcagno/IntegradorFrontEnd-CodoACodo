<?php
session_start();

include_once("conexion-bd.php");

$correo = $_POST['correo'];
$clave = $_POST['clave'];
$consultaUsuario="SELECT * FROM usuarios WHERE Correo='{$correo}' AND Clave='{$clave}'";
$resultadoUsuario = mysqli_query($conexion, $consultaUsuario);

if ($resultadoUsuario->num_rows == 1) {
    GuardarDatosSesion($resultadoUsuario);
    header("Location: ../area-" . strtolower($_SESSION['tipoUsuario']) . ".php", true, 301);
    exit();
} else {
    header("Location: ../login.php", false, 301);
}


function GuardarDatosSesion($resultadoUsuario)
{
    global $conexion;

    $usuario = $resultadoUsuario->fetch_assoc();
    $consultaTipoUsuario="SELECT Nombre FROM tipo_usuario WHERE Id='{$usuario['IdTipoUsuario']}'";
    $resultadoTipoUsuario = mysqli_query($conexion, $consultaTipoUsuario);
    $tipoUsuario = $resultadoTipoUsuario->fetch_assoc();

    $_SESSION['nombre'] = $usuario['Nombre'];
    $_SESSION['apellido'] = $usuario['Apellido'];
    $_SESSION['avatar'] = $usuario['Avatar'];
    $_SESSION['tipoUsuario'] = $tipoUsuario['Nombre'];
}
