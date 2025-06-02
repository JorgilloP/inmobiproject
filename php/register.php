<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = trim($_POST["usuario"]);
    $password = trim($_POST["password"]);

    // Validar que los campos no estén vacíos
    if (empty($usuario) || empty($password)) {
        header("Location: msjError.php?error=Todos los campos son obligatorios");
        exit();
    }

    // Verificar si el usuario ya existe
    $conn = conectarBD();
    $stmt = mysqli_prepare($conn, "SELECT id_user FROM usuario WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $usuario);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: msjError.php?error=El usuario ya está registrado");
        exit();
    }
    mysqli_stmt_close($stmt);

    // Generar hash seguro de la contraseña
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Insertar nuevo usuario en la base de datos
    $stmt = mysqli_prepare($conn, "INSERT INTO usuario (username, pass) VALUES (?, ?)");
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $passwordHash);
    $resultado = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    // Redirigir según el resultado
    if ($resultado) {
        header("Location: ../index.php?success=Usuario registrado exitosamente");
    } else {
        header("Location: msjError.php?error=Error al registrar usuario");
    }
    exit();
}
?>
