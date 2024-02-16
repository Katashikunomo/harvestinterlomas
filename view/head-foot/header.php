<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css"/>
    <link rel="stylesheet" type="text/css" href="inner-page-style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/stilos.css">
    <link rel="stylesheet" href="./styles/stylews.css">
    <link rel="stylesheet" href="estilosmodal.css">
    <link rel="stylesheet" href="estilos-parallax.css">
    <link rel="stylesheet" href="examples.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- Preloader -->
    <script src="jquery.preloader.min.js" type="text/javascript"></script>
   
    <title>Harvest Christian School Interlomas</title>
</head>
<body>

      <!-- Preloader element -->
			<script>
    $(document).ready(function() {
        $(window).preloader({
            delay: 1500
        });
    });
    </script>
	    <div id="preloader">
    <div id="preloader-inner"></div>
    Harvest Cristian School Interlomas
    </div>
    <input type="checkbox" id="cerrar">
    <label for="cerrar" id="btn-cerrar">x</label>
    <div class="modal-inicio">
        <div class="contenido">
            <div style="border-radius: 22px;">
                <img src="images/educacion/harvest-interlomas.png" alt="" style="border-radius: 22px;">
            </div>
            <h2 class="text-center">¡INSCRIPCIONES ABIERTAS!</h2>
            <br>
            <a href="contacto.php" class="btn-contactanos" style="padding-bottom: 10px !important;">contactanos para obtener información</a>
        </div>
    </div>
    <div class="whatsapp-button" onclick="toggleWhatsAppPopup()">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
        </svg>
    </div>
    <div id="whatsappPopup" class="whatsapp-popup">
        <button class="close-button" onclick="toggleWhatsAppPopup()">X</button>
        <div class="row">
            <div class="border-ws-avatar col-12"><img class="avatar-ws" src="img/logoharvest.jpg" alt=""><div class="online"></div> <h2>Asistente Virtual</h2></div>
            <div class="bg-ws">
                <div class="texto-ws">
                    <h2 class="">¡Hola Bienvenid@ ♥!</h2>
                    <p class="">Si tienes alguna duda o te interesa darle seguimiento a alguna solicitud o trámite, contáctanos y en breve te responderemos.</p>
                </div>
            </div>
        </div>
        <input type="text" class="input-field" id="whatsappMessage" placeholder="Escribe tu mensaje">
        <button class="send-button" onclick="sendWhatsAppMessage()">Enviar</button>
        <button class="send-button" onclick="clearWhatsAppMessage()">Limpiar</button>
    </div>
    
    <div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
        <header class="site-header">
            <div class="top-header" style="margin-top:-10px;">
                <div class="container" id="moreinfo">
                    <div class="top-header-left">
                        <div class="top-header-block">
                            <a href="mailto:info@educationpro.com" itemprop="email"><i class="fas fa-envelope"></i> info@harvestinterlomas.org</a>
                        </div>
                        <div class="top-header-block">
                            <a href="tel:+525587970070" itemprop="telephone"><i class="fas fa-phone"></i> 55 8797 0070</a>
                        </div>
                    </div>
                    <div class="top-header-right">
                        <div class="social-block">
                            <ul class="social-list">
                                <li><a href="your-whatsapp-url"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="your-facebook-url"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="your-twitter-url"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="test" class="main-header subir">
                <div class="container">
                    <div class="logo-wrap" itemprop="logo">
                        <a href="index.php">
                            <img id="logo" src="img/logo.svg" alt="Logo Image" style="height: 70px;"> 
                        </a>
                    </div>
                    <div class="nav-wrap" style="padding-bottom: 10px;">
                        <div id="bar" style="color: #fff !important;">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div id="close" style="color: #fff !important; z-index: 1000;">
                            <i class="fas fa-times"></i>
                        </div>
						<nav id="nav" class="nav-desktop">
							<ul class="menu-list">
								<?php
								$indexClass = (isset($_REQUEST['index']) && $_REQUEST['index'] == '1') ? 'actives' : '';
								$contactClass = (isset($_REQUEST['contacto']) && $_REQUEST['contacto'] == '2') ? 'actives' : '';
								?>
								<li><a class="<?= $indexClass ?>" href="index.php?index=1" style="color: #fff !important; background:none; font-weight:normal; font-size:15px; padding:15px !important;">Inicio</a></li>
								<li><a class="<?= (isset($_REQUEST['element1'])) ? 'actives' : '' ?>" href="#" style="color: #fff !important; background:none; font-weight:normal; font-size:15px; padding:15px !important;">Programas Académicos</a></li>
								<li><a class="<?= (isset($_REQUEST['element2'])) ? 'actives' : '' ?>" href="#" style="color: #fff !important; background:none; font-weight:normal; font-size:15px; padding:15px !important;">Eventos</a></li>
								<li><a class="<?= $contactClass ?>" href="contacto.php?contacto=2" style="color: #fff !important; background:none; font-weight:normal; font-size:15px; padding:15px !important;">Contacto</a></li>
							</ul>
						</nav>



                    </div>
                </div>
            </div>
        </header>