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


  <div class="container text-center my-5">
    <h1 class="section-title">Propiedades en Venta</h1>

    <!-- Filtros -->
    <div class="mb-4 contact-section">
      <h2>Filtrar propiedades</h2>
      <p>Coloca la ciudad de tu preferencia</p>
      <div class="row g-2">
        <div class="col-md-4">
          <input type="text" class="form-control" id="searchCiudad" placeholder="Ciudad (ej. Cancún, Tulum)" />
        </div>
        <div class="col-md-4">
          <select class="form-control" id="searchRecamaras">
            <option value="">Todas las recámaras</option>
            <option value="1">1 recámara</option>
            <option value="2">2 recámaras</option>
            <option value="3">3 recámaras</option>
          </select>
        </div>
        <div class="col-md-4">
          <select class="form-control" id="searchPrecio">
            <option value="">Sin límite de precio</option>
            <option value="2000000">$2,000,000 MXN</option>
            <option value="3000000">$3,000,000 MXN</option>
            <option value="5000000">$5,000,000 MXN</option>
          </select>
        </div>
      </div>
      <button onclick="filtrarPropiedades()" class="btn btn-primary mt-3">Buscar</button>
    </div>

    <!-- Mensaje si no hay resultados -->
    <div id="mensajeNoResultados">No se encontraron propiedades con esos filtros.</div>

    <!-- Propiedades -->
    <div class="row g-4" id="propiedadesContainer">
      <!-- Propiedad 1 -->
      <div class="col-md-4 propiedad" data-ciudad="Mérida" data-recamaras="3" data-precio="2500000">
        <div class="card shadow h-100 text-center">
          <img src="public/images/img1.jpg" class="card-img-top" alt="Residencia en Mérida">
          <div class="card-body">
            <h5 class="card-title">🏡 Residencia en Mérida</h5>
            <p class="card-text">3 recámaras | 2 baños | $2,500,000 MXN</p>
          </div>
        </div>
      </div>

      <!-- Propiedad 2 -->
      <div class="col-md-4 propiedad" data-ciudad="Cancún" data-recamaras="2" data-precio="1800000">
        <div class="card shadow h-100 text-center">
          <img src="public/images/img2.jpg" class="card-img-top" alt="Departamento en Cancún">
          <div class="card-body">
            <h5 class="card-title">🏢 Departamento en Cancún</h5>
            <p class="card-text">2 recámaras | 1 baño | $1,800,000 MXN</p>
          </div>
        </div>
      </div>

      <!-- Propiedad 3 -->
      <div class="col-md-4 propiedad" data-ciudad="Cancún" data-recamaras="1" data-precio="3597660">
        <div class="card shadow h-100 text-center">
          <img src="public/images/cancun.png" class="card-img-top" alt="Ohana Cancún">
          <div class="card-body">
            <h5 class="card-title">🏢 Departamento Ohana en Cancún</h5>
            <p class="card-text">1 recámara | 1.5 baños | $3,597,660 MXN</p>
          </div>
        </div>
      </div>

      <!-- Propiedad 4 -->
      <div class="col-md-4 propiedad" data-ciudad="Cancún" data-recamaras="2" data-precio="5367944">
        <div class="card shadow h-100 text-center">
          <img src="public/images/laguna.png" class="card-img-top" alt="Vista Laguna Cancún">
          <div class="card-body">
            <h5 class="card-title">🌅 Departamento Vista Laguna Cancún</h5>
            <p class="card-text">2 recámaras | 2 baños | $5,367,944 MXN</p>
          </div>
        </div>
      </div>

      <!-- Propiedad 5 -->
      <div class="col-md-4 propiedad" data-ciudad="Tulum" data-recamaras="1" data-precio="3302770">
        <div class="card shadow h-100 text-center">
          <img src="public/images/colosio.png" class="card-img-top" alt="Moderno Colosio">
          <div class="card-body">
            <h5 class="card-title">🏙️ Departamento moderno Colosio</h5>
            <p class="card-text">1 recámara | 1 baño | $3,302,770 MXN</p>
          </div>
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



  <!-- Scripts -->
  <script>
    function normalizarTexto(texto) {
      return texto.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase();
    }

    function filtrarPropiedades() {
      const ciudad = normalizarTexto(document.getElementById("searchCiudad").value.trim());
      const recamaras = document.getElementById("searchRecamaras").value;
      const precio = document.getElementById("searchPrecio").value;

      const propiedades = document.querySelectorAll(".propiedad");
      let hayResultados = false;

      propiedades.forEach(p => {
        const ciudadProp = normalizarTexto(p.dataset.ciudad);
        const recamarasProp = p.dataset.recamaras;
        const precioProp = parseInt(p.dataset.precio);

        const coincideCiudad = !ciudad || ciudadProp.includes(ciudad);
        const coincideRecamaras = !recamaras || recamarasProp === recamaras;
        const coincidePrecio = !precio || precioProp <= parseInt(precio);

        if (coincideCiudad && coincideRecamaras && coincidePrecio) {
          p.classList.remove("d-none");
          hayResultados = true;
        } else {
          p.classList.add("d-none");
        }
      });

      document.getElementById("mensajeNoResultados").style.display = hayResultados ? "none" : "block";
    }
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>