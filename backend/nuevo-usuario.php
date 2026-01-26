<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];
$tipoUsuario = 3;

include_once("conexion-bd.php");
if (SonDatosIngresadosValidos() && !EstaRegistrado()) {
    $avatarDefault = 'https://cdn.nicolascalcagno.dev/nicolascalcagno/shared/conferencia-buenos-aires/images/profile/default.webp';
    $consultaNuevoUsuario = "INSERT INTO usuarios (Id, Nombre, Apellido, Correo, Clave, Estado, IdTipoUsuario, Avatar) VALUES (null, '{$nombre}', '{$apellido}', '{$correo}', '{$clave}', 'Inactivo', 3, '{$avatarDefault}')";
    $resultadoNuevoUsuario = mysqli_query($conexion, $consultaNuevoUsuario);
    header("Location: ../login.php", true, 301);
} else {
    header("Location: ../registro.php", true, 301);
}

function SonDatosIngresadosValidos()
{
    global $nombre, $apellido, $correo, $clave, $tipoUsuario;

    $resultado = isset($nombre) && isset($apellido) && isset($correo) && isset($clave) && isset($tipoUsuario);

    return $resultado;
}
function EstaRegistrado()
{
    global $conexion, $correo;
    $estaRegistrado = false;

    $consultaUsuario = "SELECT * FROM usuarios WHERE Correo='{$correo}'";
    $resultadoUsuario = mysqli_query($conexion, $consultaUsuario);

    if ($resultadoUsuario->num_rows != 0) {
        $estaRegistrado = true;
    }
    return $estaRegistrado;
}
