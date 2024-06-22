<?php
// Aqui el header
require_once('view/head-foot/header.php');

?>
<!-- SweetAlert2 CSS y JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
	input[type="number"],
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
	.btn-custom-color {
    background-color: #113897 !important;
    border-color: #113897 !important;
    color: white !important; /* Color del texto */	
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

		<?php if(isset($_REQUEST['registrado'])){ ?>
			<script>
			// Suponiendo que recibes la confirmación de registro en una variable llamada 'registroCorrecto'
			let registroCorrecto = true; // Cambia a false si no se ha registrado correctamente

			if (registroCorrecto) {
				setTimeout(function() {
					Swal.fire({
						icon: 'success',
						title: '¡Registro exitoso!',
						text: 'Tu registro se realizo correctamente...',
						confirmButtonText: 'Cerrar',
						customClass: {
										confirmButton: 'btn btn-primary btn-custom-color'
									}
					});
				}, 2500); // Retraso de 2 segundos (2000 milisegundos)
			}
			</script>
		<?php } ?>

		<?php if(isset($_REQUEST['datosvacios'])){ ?>
			<script>
			// Suponiendo que recibes la confirmación de registro en una variable llamada 'registroCorrecto'
			let registroCorrecto = true; // Cambia a false si no se ha registrado correctamente

			if (registroCorrecto) {
				setTimeout(function() {
					Swal.fire({
						icon: 'error',
						title: 'Valida tus datos!',
						text: 'Llena todos los datos correctamente...',
						confirmButtonText: 'Cerrar',
						customClass: {
										confirmButton: 'btn btn-primary btn-custom-color'
									}
					});
				}, 2500); // Retraso de 2 segundos (2000 milisegundos)
			}
			</script>
		<?php } ?>



        <section class="contact-page-section">
			<div class="container hidden " >
				<div class="people-info-wrap">
					<h2> <b style="color: #f5951f; font-size: 30px;"> Solicitar</b>  <b style="color: #113897; font-size: 30px;">información</b> </h2>
					<p>
						<b>
							Harvest Christian School Interloas agradece tu interes, comunicate con nosotros y nos pondremos en contacto contigo a la brevedad ! <b style="color: #B00000; font-size: 30px;"> ♥ </b>
						</b>
					</p>
					<form id="formulario" name="formulario" action="include/validacion-contacto.php" method="POST">
						<span>
							<input type="text" id="nombre" name="nombre" placeholder="Nombre *" class="input-name" required>
							<input type="email" id="email" name="email" placeholder="Email *" class="input-email" required>
							<input type="text" id="numero" name="numero" placeholder="Teléfono de contacto(a 10 digitos) *" pattern="\d{10}" maxlength="10" class="input-email" required>
						</span>
						<select name="asunto" id="asunto" class="input-subject" style="cursor: pointer;" required>
							<option value="" selected disabled>Selecciona el Asunto*: </option>
							<!-- <option value="info">Solicitar información</option> -->
							<option value="inscripcion">Inscripción</option>
							<!-- <option value="otro">Otro</option> -->
						</select>
						<div id="campos-adicionales" class="hidden-form">
							<input type="text" id="nombre-tutor" name="nombre-tutor" placeholder="Nombre del Tutor" class="input-nombre-tutor">
							<select id="relacion" name="relacion" class="input-relacion">
								<option value="" selected disabled>Relación con el Estudiante*: </option>
								<option value="mama">Mamá</option>
								<option value="papa">Papá</option>
								<option value="tutor">Tutor</option>
							</select>
							<h3><b>Datos Academicos</b></h3>
							<select id="nivel-academico" name="nivel-academico" class="input-nivel-academico">
								<option value="" selected disabled>Nivel Académico*: </option>
								<option value="preescolar">Preescolar</option>
								<option value="primaria">Primaria</option>
								<option value="secundaria">Secundaria</option>
								<option value="bachillerato">Bachillerato</option>
							</select>
							<select id="genero" name="genero" class="input-genero">
								<option value="" selected disabled>Género*: </option>
								<option value="masculino">Masculino</option>
								<option value="femenino">Femenino</option>
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
						<textarea id="mensaje" name="mensaje" placeholder="Mensaje*" class="input-mensaje"></textarea>
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
								<p>Telefono de contacto: <a  href="tel:+525550425171">5550425171</a></p>
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