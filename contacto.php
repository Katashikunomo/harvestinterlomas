<?php
// Aqui el header
require_once('view/head-foot/header.php');
?>
<style>
	.parallax{
		background-image: url(images/educacion/contacto.png);
	}
</style>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
        margin: 0;
        padding: 0;
    }

    form {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    input[type="email"],
    textarea,
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    input[type="submit"] {
        background-color: #f5951f;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #e18511;
    }

    .hidden-form {
        display: none;
    }
</style>
		<!-- Header Close -->
		<div class="parallax" style=" height: 100vh;" >
			<div class="container" style="font-size: 30px; margin: auto; color: #fff; " >
				<div >
					<div style="padding-top: 220px;">
						
						<!-- <p style="border-radius: 22px; box-shadow: 0 0 10px #000; padding: 30px; backdrop-filter: blur(18px); text-align: center;">
							<b style="font-size: 34px;">
								Contactanos para obtener más información
							</b>
							<br>
							<small>
								Formando al nuevo remanente...
							</small>
						</p> -->
						
					</div>
				</div>
			</div>
		</div>
		
			
			 <!-- <div id="owl-four-nav" class="owl-nav"></div> -->
	</div>

		

        <section class="contact-page-section">
			<div class="container hidden " >
				<div class="people-info-wrap">
					<h2> <b style="color: #f5951f; font-size: 30px;"> Solicitar</b>  <b style="color: #113897; font-size: 30px;">información</b> </h2>
					<p>
						<b>
							Harvest Christian School Interloas agradece tu interes, comunicate con nosotros y nos pondremos en contacto contigo a la brevedad ! <b style="color: #B00000; font-size: 30px;"> ♥ </b>
						</b>
					</p>
					<form id="formulario" action="include/validacion-contacto.php" method="POST">
						<span>
							<input type="text" placeholder="Nombre *" class="input-name" required>
							<input type="email" placeholder="Email *" class="input-email" required>
						</span>
						<select name="asunto" id="asunto" class="input-subject" style="cursor: pointer;" required>
							<option value="" selected disabled>Selecciona el Asunto*: </option>
							<option value="info">Solicitar información</option>
							<option value="inscripcion">Inscripción</option>
							<option value="otro">Otro</option>
						</select>
						<div id="campos-adicionales" class="hidden-form">
							<input type="text" id="nombre-tutor" placeholder="Nombre del Tutor" class="input-nombre-tutor">
							<select id="relacion" class="input-relacion">
								<option value="" selected disabled>Relación con el Estudiante*: </option>
								<option value="mama">Mamá</option>
								<option value="papa">Papá</option>
								<option value="tutor">Tutor</option>
							</select>
							<h3><b>Datos del Aca</b></h3>
							<select id="nivel-academico" class="input-nivel-academico">
								<option value="" selected disabled>Nivel Académico*: </option>
								<option value="preescolar">Preescolar</option>
								<option value="primaria">Primaria</option>
								<option value="secundaria">Secundaria</option>
								<option value="bachillerato">Bachillerato</option>
							</select>
							<select id="genero" class="input-genero">
								<option value="" selected disabled>Género*: </option>
								<option value="nino">Niño</option>
								<option value="nina">Niña</option>
							</select>
							<select id="edad" name="edad" class="input-edad">
								<option value="" selected disabled>Edad*: </option>
								<?php
								for ($i = 3; $i <= 20; $i++) {
									echo "<option value='$i'>$i años</option>";
								}
								?>
							</select>
						</div>
						<textarea placeholder="Mensaje*" class="input-mensaje"></textarea>
						<input type="submit" style="border-radius: 12px; background: #f5951f;" value="Contactar">
						<p>Al enviar este formulario autorizo el uso de mi dirección de correo electrónico y otorgo mi consentimiento para la utilización de mis datos.</p>
					</form>

					<script>
						document.getElementById('asunto').addEventListener('change', function() {
							var camposAdicionales = document.getElementById('campos-adicionales');
							if (this.value === 'inscripcion') {
								camposAdicionales.classList.remove('hidden-form');
								camposAdicionales.querySelectorAll('[required]').forEach(function(el) {
									el.setAttribute('required', 'required');
								});
							} else {
								camposAdicionales.classList.add('hidden-form');
								camposAdicionales.querySelectorAll('[required]').forEach(function(el) {
									el.removeAttribute('required');
								});
							}
						});
					</script>
				</div>

				<div class="contact-info hidden">
					<h2><b style="color: #113897; font-size: 30px;">linea directa</b></h2>
					<ul class="contact-list">
						<li><i style="color: #113897;" class="fas fa-location-arrow"></i> 
							<span>
								<p><a href="https://maps.app.goo.gl/ubVm7yCWwZxZWPFz9" target="_blank">
									Harvest Christian School Interlomas
									
								</a></p>
							</span>
						</li>
						<li><i style="color: #113897;" class="fas fa-phone"></i>
							<span> 
								<p>Telefono de contacto: <a  href="tel:+525576624750">5576624750</a></p>
							</span>
						</li>
						<li><i style="color: #113897;" class="fas fa-envelope"></i>
							<span>
								<p><a href="mailto:harvestcsinterlomas@gmail.com">harvestcsinterlomas@gmail.com</a></p>
							</span>
						</li>
					</ul>
					<ul class="contact-social">
						<li><a style="cursor: pointer; font-size: 45px; color: #113897;" onclick="toggleWhatsAppPopup()"><i class="fab fa-whatsapp"></i></a></li>
						<li><a style="cursor: pointer; font-size: 45px; color: #113897;" href="https://www.facebook.com/profile.php?id=100086799152343" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
						<!-- <li><a href=""><i class="fab fa-youtube"></i></a></li> -->
					</ul>
				</div>
			</div>
		</section>

		<section class="map-section">
			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.647847956245!2d-99.2942344!3d19.384394999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d207b3d17fd70f%3A0x581462559c4105a0!2sHarvest%20Christian%20School%20Interlomas!5e0!3m2!1ses-419!2smx!4v1701362046007!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.647847956245!2d-99.2942344!3d19.384394999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d207b3d17fd70f%3A0x581462559c4105a0!2sHarvest%20Christian%20School%20Interlomas!5e0!3m2!1ses-419!2smx!4v1701362046007!5m2!1ses-419!2smx" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>

		<section class="query-section">
			<div class="container">
				<!-- <p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a></p> -->
			</div>
		</section>

<?php
// Aqui el header
require_once('view/head-foot/footer.php');
?>