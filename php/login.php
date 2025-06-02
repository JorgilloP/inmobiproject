<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GRN Inversión Inmobiliaria</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="public/images/favicon.ico" type="image/x-icon">
</head>


<?php
session_start();
include 'sesionFunciones.php';
include 'conexion.php';

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Conectar a la base de datos
    $conn = conectarBD();

    // Preparar consulta segura para obtener ID y contraseña
    $stmt = mysqli_prepare($conn, "SELECT id_user, pass FROM usuario WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $usuario);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $id_usuario, $hash);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    // Verificar contraseña y almacenar ID en la sesión
    if ($hash && password_verify($password, $hash)) {
        iniciarSesion($usuario, $id_usuario); // Guarda usuario y su ID en la sesión
        header("Location: msjExito.php?success=Bienvenido, $usuario");
        exit();
    } else {
        // Redirigir a la página de inicio de sesión con un mensaje de error
        header("Location: msjError.php?error=Usuario o contraseña incorrectos");
        exit();
    }
}
