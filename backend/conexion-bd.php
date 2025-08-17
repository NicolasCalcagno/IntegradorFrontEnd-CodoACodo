<?php
define('BASE_PATH', dirname(__DIR__));
include_once(BASE_PATH . '/config.php');

$hostname = getenv('DB_HOST');
$username = getenv('DB_USER_PUBLIC_NAME');
$password = getenv('DB_USER_PUBLIC_PASS');
$databaseName = getenv('DB_NAME_CONFERENCIA_BUENOS_AIRES');

$conexion = mysqli_connect($hostname, $username, $password, $databaseName);

if (mysqli_connect_errno()) {
    error_log("Error de conexion a la base de datos: " . mysqli_connect_error());
    exit;
}
