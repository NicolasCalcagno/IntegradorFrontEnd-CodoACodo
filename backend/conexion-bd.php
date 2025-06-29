<?php
define('BASE_PATH', dirname(__DIR__));
include_once(BASE_PATH . '/config.php');

function LoadEnv($path) {
    if (!file_exists($path)) {
        throw new Exception(".env file not found at $path");
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);

        // Skip comments
        if ($line === '' || str_starts_with($line, '#')) {
            continue;
        }

        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);

        // Remove optional surrounding quotes
        $value = trim($value, '"\'');

        // Set the environment variable
        $_ENV[$name] = $value;
        putenv("$name=$value");
    }
}

LoadEnv(__DIR__ . '/../secrets/.env');

$hostname = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER_PUBLIC'];
$password = $_ENV['DB_PASS_PUBLIC'];
$databaseName = $_ENV['DB_NAME_CONFERENCIA_BUENOS_AIRES'];

$conexion = mysqli_connect($hostname, $username, $password, $databaseName);

if (mysqli_connect_errno()) {
    error_log("Error de conexion a la base de datos: " . mysqli_connect_error());
    exit;
}
