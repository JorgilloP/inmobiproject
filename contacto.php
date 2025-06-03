<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contacto | GRN Inversiones</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <meta name="description"
    content="Conoce más sobre GRN Inversiones, tu aliado en asesoría inmobiliaria en Mérida, Yucatán y Quintana Roo. Más de 10 años de experiencia en compra, venta y renta de inmuebles.">
  <meta name="keywords"
    content="GRN Inversiones, asesoría inmobiliaria, compra venta renta inmuebles, Mérida, Yucatán, Quintana Roo">
  <meta name="author" content="GRN Inversiones">
  <!-- fav icon -->
  <link rel="icon" href="public/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="public/css/style.css">
  <!-- Bootstrap Icons para el muñequito -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <!-- Script Botón Usuario -->
  <script src="public/js/btnUser.js"></script>
</head>

<?php
include 'php/sesionFunciones.php';

if (!verificarSesion()) {
  echo '<div class="d-flex align-items-center justify-content-center min-vh-100">';
  echo '<div class="alert alert-warning text-center p-4 shadow-lg rounded-3 w-50 animate__animated animate__fadeIn">';
  echo '<i class="bi bi-exclamation-circle-fill fs-1 text-warning"></i>';
  echo '<h4 class="mt-3 fw-bold">Sesión no válida</h4>';
  echo '<p class="mb-3">Redirigiendo a la página de login en <span id="contador">5</span> segundos...</p>';
  echo '<button class="btn btn-warning px-4 py-2 fw-bold" onclick="window.location.href = \'login.html\';">Ir ahora</button>';
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
                    window.location.href = "login.html";
                }
            }, 1000);
          </script>';
  exit();
}
?>


<body>

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img class="logo" src="public/images/GRN_NEGRO.png" alt="Logo" width="50" />
      </a>

      <!-- Botón Menú (Solo se muestra en móviles o pantallas pequeñas.) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menú -->
      <div class="collapse navbar-collapse justify-content-lg-end justify-content-center text-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="nosotros.php">Sobre Nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
        </ul>

        <!-- Botón muñequito para abrir modal -->
        <button type="button" class="btn btn-outline-primary ms-3" data-bs-toggle="modal" data-bs-target="#loginModal"
          style="font-size: 1.5rem;">
          <i class="bi bi-person-circle"></i>
        </button>
      </div>
    </div>
  </nav>

  <!-- Social Icons -->
  <div class="container-fluid d-flex w-100 justify-content-center gap-3 mt-0 pb-2 social-icons">
    <a href="https://wa.me/529981477653" target="_blank">
      <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/whatsapp.svg" width="30" alt="WhatsApp" />
    </a>
    <a href="https://www.facebook.com/profile.php?id=100094634732652&mibextid=opq0tG" target="_blank">
      <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/facebook.svg" width="30" alt="Facebook" />
    </a>
    <a href="https://www.linkedin.com/feed/update/urn:li:activity:7185799101056221184" target="_blank">
      <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/linkedin.svg" width="30" alt="LinkedIn" />
    </a>
    <a href="https://www.youtube.com/@GRNInversionInmobiliaria/null" target="_blank">
      <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/youtube.svg" width="30" alt="YouTube" />
    </a>
    <a href="https://www.instagram.com/grn_inversion_inmobiliaria?igsh=bHFmeWhsbG5yeDJo&utm_source=qr" target="_blank">
      <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/instagram.svg" width="30" alt="Instagram" />
    </a>
  </div>

  <!-- Modal de usuario -->
  <div class="modal fade" id="loginModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Sesión</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body text-left">
          <?php
          modalUsuario();
          ?>
        </div>
      </div>
    </div>
  </div>


  <!-- Contacto -->
  <section class="container mt-5 text-center">
    <h1>📞 Contáctanos</h1>
    <p>Déjanos tu información y te asesoraremos en la compra, venta o renta de tu propiedad.</p>
    <form class="p-4 bg-light rounded shadow text-center" method="post" action="php/contact.php">
      <div class="mb-3">
        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required />
      </div>
      <div class="mb-3">
        <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo electrónico" required />
      </div>
      <div class="mb-3">
        <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Número de teléfono" required />
      </div>
      <div class="mb-3">
        <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Mensaje"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </section>

  <div class="container py-5">
    <h2 class="text-center mb-4 fw-bold">Información de Contacto</h2>

    <div class="card shadow p-4 mb-5 text-center">
      <p class="d-flex align-items-center"><i class="fas fa-building me-3 text-primary fs-4"></i> Página · Bienes raíces
      </p>
      <p class="d-flex align-items-center"><i class="fas fa-map-marker-alt me-3 text-primary fs-4"></i> Mérida, México
      </p>
      <p class="d-flex align-items-center"><i class="fas fa-phone-alt me-3 text-primary fs-4"></i> 998 147 7653</p>
      <p class="d-flex align-items-center"><i class="fas fa-envelope me-3 text-primary fs-4"></i> <a
          href="mailto:mnieto@grn.com.mx" class="text-decoration-none text-primary">mnieto@grn.com.mx</a></p>
      <p class="d-flex align-items-center"><i class="fas fa-globe me-3 text-primary fs-4"></i> <a
          href="https://grn.com.mx" target="_blank" class="text-decoration-none text-primary">grn.com.mx</a></p>
      <p class="d-flex align-items-center"><i class="fas fa-clock me-3 text-primary fs-4"></i> Siempre abierto</p>
    </div>
  </div>

  <!-- Pie de página -->
  <footer class="text-center text-lg-start text-white mt-5" style="background-color: #0a4275;">
    <div class="container p-4">
      <div class="row mt-4">
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">GRN INVERSIONES</h5>
          <p>Asesoría inmobiliaria, compra, venta y renta de inmuebles en Mérida, Yucatán, Quintana Roo.</p>
          <div class="mt-4">
            <a href="https://www.facebook.com/GRNInversiones" class="text-white me-4" target="_blank">
              <i class="bi bi-facebook fs-3"></i>
            </a>
            <a href="https://www.instagram.com/grn_inversion_inmobiliaria" class="text-white me-4" target="_blank">
              <i class="bi bi-instagram fs-3"></i>
            </a>
            <a href="https://www.linkedin.com/company/grn-inversiones" class="text-white me-4" target="_blank">
              <i class="bi bi-linkedin fs-3"></i>
            </a>
            <a href="https://wa.me/529981477653" class="text-white me-4" target="_blank">
              <i class="bi bi-whatsapp fs-3"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Contacto</h5>
          <p><i class="bi bi-geo-alt-fill me-2"></i> Calle 42 #107, Centro, Mérida, Yuc.</p>
          <p><i class="bi bi-envelope-fill me-2"></i> contacto@grninversiones.com</p>
          <p><i class="bi bi-phone-fill me-2"></i> +52 998 147 7653</p>
        </div>

        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Horario</h5>
          <p>Lunes a Viernes: 9:00 AM - 6:00 PM</p>
          <p>Sábado: 10:00 AM - 2:00 PM</p>
          <p>Domingo: Cerrado</p>
        </div>
      </div>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 GRN Inversiones. Todos los derechos reservados.
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>