<?php
$id = $_POST['id'];
$nuevoNombre = $_POST['nombre'];
$nuevoApellido = $_POST['apellido'];
$nuevoCorreo = $_POST['correo'];
$nuevaClave = $_POST['clave'];


include_once("conexion-bd.php");
session_start();

if (EsSesionAdministrador() && SonDatosIngresadosValidos() && !EstaRegistrado()) {
    $consultaModificar = "UPDATE usuarios SET Nombre='{$nuevoNombre}', Apellido='{$nuevoApellido}', Correo='{$nuevoCorreo}', Clave='{$nuevaClave}' WHERE Id='{$id}' AND (IdTipoUsuario=2 OR IdTipoUsuario=3)";
    $resultadoModificar = mysqli_query($conexion, $consultaModificar);
}

function EsSesionAdministrador()
{
    return isset($_SESSION['tipoUsuario']) == 'Administrador';
}
function SonDatosIngresadosValidos()
{
    global $nuevoNombre, $nuevoApellido, $nuevoCorreo, $nuevaClave;

    $resultado = isset($nuevoNombre) && isset($nuevoApellido) && isset($nuevoCorreo) && isset($nuevaClave);

    return $resultado;
}

function EstaRegistrado()
{
    global $conexion, $nuevoCorreo;
    $estaRegistrado = false;

    $consultaUsuario = "SELECT * FROM usuarios WHERE Correo='{$nuevoCorreo}'";
    $resultadoUsuario = mysqli_query($conexion, $consultaUsuario);

    if ($resultadoUsuario->num_rows != 0) {
        $estaRegistrado = true;
    }
    return $estaRegistrado;
}
