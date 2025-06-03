<?php
session_start();
include 'conexion.php'; // Archivo que contiene la conexión a la base de datos


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST["nombre"]);
    $correo = trim($_POST["correo"]);
    $telefono = trim($_POST["telefono"]);
    $mensaje = trim($_POST["mensaje"]);
    $id_usuario = $_SESSION['id_usuario'] ?? null;

    // Validar que los campos no estén vacíos
    if (empty($nombre) || empty($correo) || empty($telefono) || empty($mensaje)) {
        header("Location: msjError.php?error=Todos los campos son obligatorios");
        exit();
    }

    // Validar formato de correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        header("Location: msjError.php?error=Correo electrónico no válido");
        exit();
    }

    // Conectar a la base de datos
    $conn = conectarBD();

    // Insertar datos en la tabla de contactos incluyendo el ID de usuario
    $stmt = mysqli_prepare($conn, "INSERT INTO contacto (nombre, email, cel, mensaje, fk_user) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssssi", $nombre, $correo, $telefono, $mensaje, $id_usuario);
    $resultado = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    // Redirigir según el resultado
    if ($resultado) {
        header("Location: msjExito.php?success=Mensaje guardado correctamente");
    } else {
        header("Location: msjError.php?error=Error al guardar el mensaje");
    }
    exit();
}
