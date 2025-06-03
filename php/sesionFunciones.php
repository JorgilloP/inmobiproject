<?php
session_start();

function mostrarMensajeError()
{
    if (isset($_GET['error']) && !empty($_GET['error'])) {
        echo '<div class="d-flex align-items-center justify-content-center min-vh-100">';
        echo '<div class="alert alert-danger text-center p-4 shadow-lg rounded-3 w-50 animate__animated animate__fadeIn">';
        echo '<i class="bi bi-exclamation-circle-fill fs-1 text-danger"></i>';
        echo '<h4 class="mt-3 fw-bold">' . htmlspecialchars($_GET['error']) . '</h4>';
        echo '<p class="mb-3">Hubo un problema. Por favor, intenta nuevamente.</p>';
        echo '<p class="fw-bold">Redirigiendo en <span id="contador">10</span> segundos...</p>';
        echo '<button class="btn btn-danger px-4 py-2 fw-bold" onclick="window.location.href = document.referrer;">Volver</button>';
        echo '</div>';
        echo '</div>';

        // Script para el contador y la redirección automática
        echo '<script>
                let tiempo = 10;
                const contador = document.getElementById("contador");

                const interval = setInterval(() => {
                    tiempo--;
                    contador.textContent = tiempo;
                    if (tiempo === 0) {
                        clearInterval(interval);
                        window.location.href = document.referrer;
                    }
                }, 1000);
              </script>';
    }
}

function mostrarMensajeExito()
{
    if (isset($_GET['success']) && !empty($_GET['success'])) {
        echo '<div class="d-flex align-items-center justify-content-center min-vh-100">';
        echo '<div class="alert alert-success text-center p-4 shadow-lg rounded-3 w-50 animate__animated animate__fadeIn">';
        echo '<i class="bi bi-check-circle-fill fs-1 text-success"></i>';
        echo '<h4 class="mt-3 fw-bold">' . htmlspecialchars($_GET['success']) . '</h4>';
        echo '<p class="mb-3">Tu operación se realizó correctamente.</p>';
        echo '<p class="fw-bold">Redirigiendo en <span id="contador">5</span> segundos...</p>';
        echo '<button class="btn btn-success px-4 py-2 fw-bold" onclick="window.location.href = document.referrer;">Volver</button>';
        echo '</div>';
        echo '</div>';

        // Script para el contador y la redirección automática
        echo '<script>
                let tiempo = 5;
                const contador = document.getElementById("contador");

                const interval = setInterval(() => {
                    tiempo--;
                    contador.textContent = tiempo;
                    if (tiempo === 0) {
                        clearInterval(interval);
                        window.location.href = document.referrer;
                    }
                }, 1000);
              </script>';
    }
}

function mostrarMensajeExito2()
{
    if (isset($_GET['success']) && !empty($_GET['success'])) {
        echo '<div class="d-flex align-items-center justify-content-center min-vh-100">';
        echo '<div class="alert alert-success text-center p-4 shadow-lg rounded-3 w-50 animate__animated animate__fadeIn">';
        echo '<i class="bi bi-check-circle-fill fs-1 text-success"></i>';
        echo '<h4 class="mt-3 fw-bold">' . htmlspecialchars($_GET['success']) . '</h4>';
        echo '<p class="mb-3">Tu operación se realizó correctamente.</p>';
        echo '<p class="fw-bold">Redirigiendo en <span id="contador">5</span> segundos...</p>';
        echo '<button class="btn btn-success px-4 py-2 fw-bold" onclick="window.location.href =\'../contacto.php\'">Volver</button>';
        echo '</div>';
        echo '</div>';

        // Script para el contador y la redirección automática
        echo '<script>
                let tiempo = 5;
                const contador = document.getElementById("contador");

                const interval = setInterval(() => {
                    tiempo--;
                    contador.textContent = tiempo;
                    if (tiempo === 0) {
                        clearInterval(interval);
                        window.location.href = "../contacto.php";
                    }
                }, 1000);
              </script>';
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
    //echo $_SESSION['id_usuario'] ? "<p class='text-center'>ID de usuario: " . htmlspecialchars($_SESSION['id_usuario']) . "</p>" : "";
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