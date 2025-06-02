<?php

function conectarBD()
{
    // Configuración de la conexión
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "inmobi";

    // Conectar a la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificar conexión
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    return $conn;
}
