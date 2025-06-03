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
    <meta name="description" content="Conoce más sobre GRN Inversiones, tu aliado en asesoría inmobiliaria en Mérida, Yucatán y Quintana Roo. Más de 10 años de experiencia en compra, venta y renta de inmuebles.">
    <meta name="keywords" content="GRN Inversiones, asesoría inmobiliaria, compra venta renta inmuebles, Mérida, Yucatán, Quintana Roo">
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
    <!-- Estilos adicionales -->
    <style>
        .section-title {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
            color: #222;
        }

        .info-box {
            padding: 50px;
            border-radius: 12px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease-in-out;
            text-align: center;
            color: #333;
            margin: 20px;
        }

        .info-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }

        .nosotros-box {
            background-color: #eaeaea;
            padding: 60px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }

        .nosotros-box h1 {
            font-size: 2.5rem;
            color: #222;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .nosotros-box p {
            font-size: 1.2rem;
            color: #444;
            line-height: 1.6;
        }

        .row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
    </style>
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
            <div class="collapse navbar-collapse justify-content-lg-end justify-content-center text-center"
                id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="nosotros.php">Sobre Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                </ul>

                <!-- Botón muñequito para abrir modal -->
                <button type="button" class="btn btn-outline-primary ms-3" data-bs-toggle="modal"
                    data-bs-target="#loginModal" style="font-size: 1.5rem;">
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
        <a href="https://www.instagram.com/grn_inversion_inmobiliaria?igsh=bHFmeWhsbG5yeDJo&utm_source=qr"
            target="_blank">
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


    <div class="container py-5">
        <div class="nosotros-box">
            <h1>Nosotros</h1>
            <p><strong>GRN Inversiones:</strong> Donde tus sueños y tu patrimonio se encuentran.</p>
            <p>En GRN Inversiones no solo vendemos propiedades: abrimos puertas a nuevas oportunidades de vida y
                crecimiento. Con más de 10 años de experiencia en el corazón del mercado inmobiliario, nos
                especializamos en la compra, venta y renta de inmuebles en zonas de alto valor como Mérida, Yucatán y
                Quintana Roo.</p>
            <p>💼 <strong>¿Por qué elegirnos?</strong><br>Porque en cada negociación ponemos lo más importante: tu
                confianza. Brindamos una asesoría totalmente personalizada, con atención profesional, clara y honesta,
                cuidando cada detalle para que tu inversión sea segura y rentable.</p>
            <p>✅ <strong>Invierte con seguridad. Vive con propósito. Crece con GRN Inversiones.</strong></p>
            <div class="nosotros-img py-5">
                <img src="public/images/sobre-nosotros.jpg" alt="Nosotros" class="img-fluid rounded">
            </div>

        </div>

        <h1 class="section-title">Sobre Nosotros</h1>

        <div class="row">
            <div class="col-md-5 info-box">
                <h2>Misión</h2>
                <p>Brindar soluciones inmobiliarias transparentes, accesibles y altamente rentables para nuestros
                    clientes.</p>
            </div>
            <div class="col-md-5 info-box">
                <h2>Visión</h2>
                <p>Ser la referencia en inversiones inmobiliarias con innovación y excelencia en cada operación.</p>
            </div>
        </div>

        <h2 class="section-title">Nuestros Valores</h2>
        <div class="row">
            <div class="col-md-3 info-box">
                <h3>Transparencia</h3>
                <p>Actuamos con honestidad y claridad en cada transacción.</p>
            </div>
            <div class="col-md-3 info-box">
                <h3>Compromiso</h3>
                <p>Nos enfocamos en ofrecer el mejor servicio inmobiliario.</p>
            </div>
            <div class="col-md-3 info-box">
                <h3>Excelencia</h3>
                <p>Priorizamos la calidad en cada propiedad y servicio.</p>
            </div>
        </div>

        <h2 class="section-title">Nuestros Servicios</h2>
        <div class="row">
            <div class="col-md-4 info-box">
                <h3>🏡 Venta de Propiedades</h3>
                <p>Encuentra inmuebles exclusivos en las mejores ubicaciones.</p>
            </div>
            <div class="col-md-4 info-box">
                <h3>📌 Renta de Propiedades</h3>
                <p>Opciones residenciales y comerciales con condiciones flexibles.</p>
            </div>
            <div class="col-md-4 info-box">
                <h3>📋 Asesoría Inmobiliaria</h3>
                <p>Expertos listos para orientarte en inversiones estratégicas.</p>
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
                        <a href="https://www.instagram.com/grn_inversion_inmobiliaria" class="text-white me-4"
                            target="_blank">
                            <i class="bi bi-instagram fs-3"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/grn-inversiones" class="text-white me-4"
                            target="_blank">
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

    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>