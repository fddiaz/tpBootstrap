<?php

/* Script para conectarse a la base de datos */
function db_connect() {

        // Defina la conexión como una variable estática, para evitar conectarse más de una vez .
    static $connection;

        // Intente conectarse a la base de datos, si aún no se ha establecido una conexión.
    if(!isset($connection)) {
             // Cargua la configuración como una matriz.
             // Use la ubicación real de su archivo de configuración.
        $config = parse_ini_file(__DIR__.'/../.env/config.ini');
        $connection = mysqli_connect(
                            $config['servername'],
                            $config['username'],
                            $config['password'],
                            $config['dbname']);
    }

        // Si la conexión no tuvo éxito, maneje el error.
    if($connection === false) {
            // Manejo del error.
        return mysqli_connect_error();
    }
    return $connection;
}

// Conectar a la base de datos.
$connection = db_connect();

// Chequear conección.
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}
?>