<?php
include_once(__DIR__ . "/../config/config.php");

$conexion = mysqli_connect($hostname, $username, $password, $databaseName);

if (mysqli_connect_errno()) {
    die;
}
