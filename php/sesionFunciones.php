<?php
session_start();

function mostrarMensajeError()
{
    if (isset($_GET['error']) && !empty($_GET['error'])) {
        echo '<div class="alert alert-danger text-center" role="alert">';
        echo '<i class="bi bi-exclamation-circle-fill"></i> ' . htmlspecialchars($_GET['error']);
        echo '<br>';
        echo '<button class="btn btn-secondary mt-3 btn-danger" onclick="window.history.back()">Volver</button>';
        echo '</div>';
    }
}

function mostrarMensajeExito()
{
    if (isset($_GET['success']) && !empty($_GET['success'])) {
        echo '<div class="alert alert-success text-center" role="alert">';
        echo '<i class="bi bi-check-circle-fill"></i> ' . htmlspecialchars($_GET['success']);
        echo '<br>';
        echo '<button class="btn btn-success mt-3" onclick="window.location.href = document.referrer;">Volver</button>';
        echo '</div>';
    }
}



// Iniciar sesión con un usuario
function iniciarSesion($usuario, $id_usuario)
{
    $_SESSION['usuario'] = $usuario;
    $_SESSION['id_usuario'] = $id_usuario;
}


//Verificar si hay una sesión activa
function verificarSesion()
{
    return isset($_SESSION['usuario']) ? $_SESSION['usuario'] : false;
}


//Mostrar datos del usuario 
function mostrarDatosUsuario($usuario)
{

    echo "<h4 class='text-center'>¡Hola, " . htmlspecialchars($usuario) . "!</h4>";
    // echo $_SESSION['id_usuario'] ? "<p class='text-center'>ID de usuario: " . htmlspecialchars($_SESSION['id_usuario']) . "</p>" : "";
    echo "<p class='text-center'>Ya estás conectado.</p>";
    echo "<a href='php/logout.php' class='btn btn-danger w-100'>Cerrar sesión</a>";
}


//Mostrar formulario de inicio de sesión
function mostrarFormularioSesion()
{
?>
    <form action="php/login.php" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="username" name="username" required placeholder="Ingrese su usuario" minlength="3" maxlength="20">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" required placeholder="Ingrese su contraseña" minlength="6" maxlength="20">
                <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">
                    <i class="bi bi-eye"></i>
                </button>
            </div>
            <a href="registro.html">¿No tienes cuenta? Regístrate</a>
        </div>
        <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
    </form>

<?php
}


// Mostrar el formulario de inicio de sesión o el mensaje de bienvenida
function modalUsuario()
{
    $usuario = verificarSesion();
    if ($usuario) {
        mostrarDatosUsuario($usuario);
    } else {
        mostrarFormularioSesion();
    }
}

?>