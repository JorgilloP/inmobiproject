<?php
include 'php/sesionFunciones.php';
?>

<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Título y meta datos -->
  <title>Sobre Nosotros | GRN Inversiones</title>
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
  <script src="public/js/togglePassword.js"></script>
</head>

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

  <!-- Carrusel -->
  <div id="carouselExample" class="carousel slide w-100 mx-auto mt-0" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="public/images/img1.jpg" class="d-block w-100" alt="Propiedad 1" />
        <h1>Compra de Inmuebles</h1>
        <a href="#" class="btn btn-primary">Compra</a>
      </div>
      <div class="carousel-item">
        <img src="public/images/img2.jpg" class="d-block w-100" alt="Propiedad 2" />
        <h1>Venta de Inmuebles</h1>
        <a href="#" class="btn btn-primary">Venta</a>
      </div>
      <div class="carousel-item">
        <img src="public/images/img3.jpg" class="d-block w-100" alt="Propiedad 2" />
        <h1>Renta de Inmuebles</h1>
        <a href="#" class="btn btn-primary">Renta</a>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- Sección Sobre Nosotros -->
  <div class="container mt-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h2>🏡 Sobre Nosotros</h2>
        <p>En <strong>GRN Inversiones</strong>, nos especializamos en la compra, venta y renta de propiedades en
          ubicaciones estratégicas como Mérida, Yucatán y Quintana Roo.</p>
        <p>Con más de 10 años de experiencia en el sector inmobiliario, ofrecemos asesoría personalizada, garantizando
          transparencia y confianza en cada negociación.</p>
        <p>Nos dedicamos a conectar a nuestros clientes con oportunidades únicas de inversión, asegurando un servicio
          profesional y eficiente.</p>
      </div>
      <div class="col-md-6">
        <img src="public/images/sobre-nosotros.jpg" class="img-fluid rounded shadow" alt="Sobre GRN Inversiones" />
      </div>
    </div>
  </div>

  <!-- Información del servicio -->
  <section class="container text-center mt-5">
    <div class="row mt-4">
      <div class="col-md-4">
        <h3>🏠 Compra</h3>
        <p>Encuentra la casa de tus sueños con nuestra selección de propiedades. Te ayudamos en todo el proceso para que
          tu compra sea fácil y segura.</p>
      </div>
      <div class="col-md-4">
        <h3>📈 Venta</h3>
        <p>¿Quieres vender tu propiedad? Nosotros te conectamos con compradores potenciales y optimizamos el proceso
          para obtener el mejor trato.</p>
      </div>
      <div class="col-md-4">
        <h3>🔑 Renta</h3>
        <p>Si buscas una propiedad para rentar, tenemos opciones ideales para ti. Encuentra la mejor ubicación y
          condiciones para tu estilo de vida.</p>
      </div>
    </div>
    <a href="servicios.php" class="btn btn-primary btn-lg mt-3">Explorar Propiedades</a>
  </section>

  <!-- Algunas propiedades -->
  <section class="container mt-5">
    <h2>🌟 Propiedades Destacadas</h2>
    <div class="row">
      <div class="col-md-4 text-center mb-5">
        <img src="public/images/img1.jpg" class="img-fluid rounded shadow" alt="Propiedad 1" />
        <h3>🏡 Residencia en Mérida</h3>
        <p>3 recámaras | 2 baños | $2,500,000 MXN</p>
        <a href="#" class="btn btn-primary">Ver más</a>
      </div>
      <div class="col-md-4 text-center mb-5">
        <img src="public/images/img2.jpg" class="img-fluid rounded shadow" alt="Propiedad 2" />
        <h3>🏢 Departamento en Cancún</h3>
        <p>2 recámaras | 1 baño | $1,800,000 MXN</p>
        <a href="#" class="btn btn-primary">Ver más</a>
      </div>
      <div class="col-md-4 text-center mb-5">
        <img src="public/images/img3.jpg" class="img-fluid rounded shadow" alt="Propiedad 3" />
        <h3>🌴 Casa en Playa del Carmen</h3>
        <p>4 recámaras | 3 baños | $3,200,000 MXN</p>
        <a href="#" class="btn btn-primary">Ver más</a>
      </div>
    </div>
  </section>


  <!-- Sección con información detallada -->
  <div class="container mt-5">
    <div class="row">
      <!-- Asesoría Personalizada -->
      <div class="col-md-6">
        <div class="p-4 bg-light rounded shadow">
          <h3>📞 Asesoría Personalizada</h3>
          <p>Te acompañamos en cada paso del proceso de compra o renta para que tomes la mejor decisión.</p>
          <ul>
            <li>Asesoría legal y financiera</li>
            <li>Visitas guiadas</li>
            <li>Soporte postventa</li>
          </ul>
        </div>
      </div>

      <!-- Amplia Red de Contactos -->
      <div class="col-md-6">
        <div class="p-4 bg-light rounded shadow">
          <h3>🌐 Amplia Red de Contactos</h3>
          <p>Contamos con alianzas estratégicas con desarrolladores, bancos e instituciones para ofrecerte las mejores
            opciones.</p>
          <ul>
            <li>Proyectos exclusivos</li>
            <li>Financiamiento preferencial</li>
            <li>Oportunidades únicas</li>
          </ul>
        </div>
      </div>
    </div>
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


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>