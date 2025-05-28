<?php
function conectarBD() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "inmobi";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    } 
    return $conn; // Retorna el objeto de conexión
}

// Uso de la función
$conn = conectarBD();
if ($conn) {
    echo "Conexión exitosa";
}
?>