<?php
require_once('view/head-foot/header.php');
include 'include/functions.php';

if(!empty($_POST['ideve'])) {
    $id_evento = $_POST['ideve']; // Asignación directa sin utilizar isset()
    $resultadoev = eventos_fecha_id($id_evento);
	$titulo = $resultadoev['dt_titulo'];
	$mensaje = $resultadoev['dt_mensaje'];
	$fehca = $resultadoev['td_fecha'];
	$hora = $resultadoev['dt_hora'];
	$resultado_lista_ev = eventos_fecha_listados($id_evento);
}
?>
<style>
	.parallax{
		background-image: url(images/educacion/actividades.png);
	}
	.container-display-grid{
		display:grid;
		grid-template-columns:repeat 1fr 1fr !important;
		margin:auto;
		grid-row: inherit;
		justify-content:center;
		
	}
</style>
		<!-- Header Close -->
		<div class="parallax" style=" height: 100vh;" >
			<div class="container" style="font-size: 30px; margin: auto; color: #fff; " >
				<div >
					<div style="padding-top: 220px;">
						
					
						
					</div>
				</div>
			</div>
		</div>
		
			
			 <!-- <div id="owl-four-nav" class="owl-nav"></div> -->
	</div>

	<div class="page-content" style="margin-top:100px; margin-bottom:100px; " >
			<div class="container">
				<div class="grid-container" style="width:auto;" itemscope itemtype=" http://schema.org/Event">
					
					<div class="grid-box-wrap" style="width:90%;  ">
						<div class="grid-img" itemprop="image">
							<!-- <img src="images/travel-img.jpg" alt="travel images"> -->
							<?php
						// Ruta del directorio externo
						$directorio_externo = 'https://avivamientointernacional.website/admin/img/harvest/calendario/';

						// Nombre de la imagen por defecto
						$imagen_por_defecto = 'images/educacion/evento-1.webp';

						// Nombre de la imagen obtenido de alguna fuente, supongamos $value['nom_imagen']
						$imagen_obtenida = $resultadoev['nom_imagen'];

						// Verificar si la imagen obtenida existe en el directorio externo
						if (isset($imagen_obtenida) && !empty($imagen_obtenida)) {
							$url_imagen_obtenida = $directorio_externo . $imagen_obtenida;
							// Verificar si la imagen obtenida existe en el directorio externo
							if (@getimagesize($url_imagen_obtenida)) {
								// Si la imagen existe, mostrarla
								echo '<img class="img-cards-info"  src="' . $url_imagen_obtenida . '" alt="event images">';
							} else {
								// Si la imagen no existe, mostrar la imagen por defecto
								echo '<img class="img-cards-info" src="' . $imagen_por_defecto . '" alt="event images">';
							}
						} else {
							// Si no se proporciona un nombre de imagen, mostrar la imagen por defecto
							echo '<img class="img-cards-info" src="' . $imagen_por_defecto . '" alt="event images">';
						}
						?>
						</div>
						<div class="grid-body">
						<h4 itemprop="startDate"><i class="far fa-clock"></i> <?php echo  funcioFecha7($fehca) ; ?> | <?php echo  $hora; ?></h4>
							<!-- <h4 itemprop="date">December 10, 2018 | Author | 0 Comments</h4> -->
							<h1 itemprop="name"><?php echo $titulo;  ?></h1>
							<p itemprop="description"><?php echo $mensaje;  ?></p>
							<a href="<?= isset( $resultadoev['dt_lugar']) ?  $resultadoev['dt_lugar'] : 'Sin sede'; ?>" target="_blank">
							<?php
                                if ($resultadoev['dt_lugar'] == 'https://maps.app.goo.gl/ntY5LoFCE8MKQM9T6') {
                                        echo "Sede Interlomas";
										?>
											<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Av. Jesús del Monte 269, Interlomas, Jesus del Monte, 52764 Jesús del Monte, Méx.</h5>			
										<?php

                                    }elseif ( $resultadoev['dt_lugar'] == 'https://maps.app.goo.gl/MArg7V4LZsCbwsDD9') {
                                        echo "Sede Anáhuac";
										?>
										<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Lago Zirahuen 189, Anáhuac I Secc., Anáhuac I Secc, Miguel Hidalgo, 11320 Ciudad de México, CDMX</h5>
										<?php
                                    }else{
                                        echo "Sin registro";
                                }
                                                                        
                            ?>
							
						</a>
							
						</div>
					</div>
					
				<!-- Aside con informacion de mas actividades  -->
				<aside style="width:auto; max-width:340px; margin: 10px auto !important;  margin-top:-50px !important;">

					<!-- New Letter Ends -->
					<div class="recent-post">
						<h2>Actividades y eventos recientes</h2>
						<div class="post">
							<?php foreach ($resultado_lista_ev as $value) { ?>
							<div class="post-wrap">
								<div class="img-wrap">
									<!-- <img src="images/recent-post-img.jpg" alt="Post Images"> -->
									<?php
										// Ruta del directorio externo
										$directorio_externo = 'https://avivamientointernacional.website/admin/img/harvest/calendario/';

										// Nombre de la imagen por defecto
										$imagen_por_defecto = 'images/educacion/evento-1.webp';

										// Nombre de la imagen obtenido de alguna fuente, supongamos $value['nom_imagen']
										$imagen_obtenida = $value['nom_imagen'];

										// Verificar si la imagen obtenida existe en el directorio externo
										if (isset($imagen_obtenida) && !empty($imagen_obtenida)) {
											$url_imagen_obtenida = $directorio_externo . $imagen_obtenida;
											// Verificar si la imagen obtenida existe en el directorio externo
											if (@getimagesize($url_imagen_obtenida)) {
												// Si la imagen existe, mostrarla
												echo '<img class="img-cards-info"  src="' . $url_imagen_obtenida . '" alt="event images">';
											} else {
												// Si la imagen no existe, mostrar la imagen por defecto
												echo '<img class="img-cards-info" src="' . $imagen_por_defecto . '" alt="event images">';
											}
										} else {
											// Si no se proporciona un nombre de imagen, mostrar la imagen por defecto
											echo '<img class="img-cards-info" src="' . $imagen_por_defecto . '" alt="event images">';
										}
									?>
								</div>
								<form action="actividad.php" method ="POST" >
								<input type="text" id="ideve" name="ideve" value="<?php echo $value['id_ev']; ?>" placeholder="<?php echo $value['id_ev']; ?>" hidden>
									<button type="submit" style="cursor:pointer;">
										<div class="post-content">
											<h3><?php echo $value['dt_titulo']; ?></h3>
											<p><?php echo  funcioFecha7($value['fecha']) ; ?> | hora : <?php echo $value['dt_hora']; ?></p>
										</div>
									</button>
								</form>
							</div>
							<?php } ?>
						</div>
					</div>
					<!-- Recent Post Close -->
					<!-- <div class="follow-us">
						<h2>Siguenos en</h2>
						<hr>
						<div class="socialmedia">
							<a href=""><i class="fab fa-facebook-square"></i></a>
							<a href=""><i class="fab fa-facebook-messenger"></i></a>
							<a href=""><i class="fab fa-twitter"></i></a>
							<a href=""><i class="fab fa-skype"></i></a>
							<a href=""><i class="fab fa-youtube"></i></a>
						</div>
					</div> -->
					<!-- Follow Us close -->
					<!-- <div class="latest-course">
						<h2>Latest Courses</h2>
						<hr>
						<div class="courses-wrap">
								<a href="#"><img src="images/course1-img.jpg" alt="Course Image">
								<span>$100</span>
								<p>Learn web designing</p></a>
						</div>

						<div class="courses-wrap">
								<a href="#"><img src="images/course2-img.jpg" alt="Course Image">
								<span>$100</span>
								<p>Learn web designing</p></a>
						</div>

						<div class="courses-wrap">
								<a href="#"><img src="images/course3-img.jpg" alt="Course Image">
								<span>$100</span>
								<p>Learn web designing</p></a>
						</div>

						<div class="courses-wrap">
								<a href="#"><img src="images/course3-img.jpg" alt="Course Image">
								<span>$100</span>
								<p>Learn web designing</p></a>
						</div>
					</div> -->
				</aside>
				</div>
			</div>
		</div>

<?php
// Aqui el footer
require_once('view/head-foot/footer.php');
?>