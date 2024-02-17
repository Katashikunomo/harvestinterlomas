<?php

$resultado = eventos_fecha();

?>
<style>
	.img-cards-info{
		width:400px;
		height:270px;
	}
</style>
<section class="page-heading hidden">
			<div class="container ">
				<h2 style="border-bottom: 6px solid #113897; width: 100%; color: #113897;">Proximas
				<br>
				<b style="color: #dba30b;">Actividades</b></h2>
				<p style="font-size:16px;">
					En esta sección se muestran las 2 fechas más proximas, si gustas consultar todas las actividades ingresa a 
					<a href="eventos.php" type="submit" style="border-radius:12px; box-shadow: 1px 2px 10px #ccc; padding:10px; background:#113897; color: #fff; margin-top: 10px !important; cursor:pointer; ">
						Eventos	
					</a>
				</p>
			</div>
		</section>
		<section class="events-section hidden" itemprop="event" itemscope itemtype=" http://schema.org/Event">
			<div class="container" style="margin-bottom: 100px;">
				<?php
						  foreach ($resultado as $value) {
				?>
				<div class="event-wrap">
					<div class="img-wrap" itemprop="image">
						<!-- <img src="images/educacion/evento-1.webp" alt="event images">
						<?php 
							
							?>
						<img src="https://avivamientointernacional.website/admin/img/avivamiento/<?php echo $value['nom_imagen']; ?>" alt="event images">
						 -->
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
					<div class="details">
						<!-- <h3 itemprop="name">Un Encuentro Navideño Inspirado en la Fe y la Alegría</h3> -->
						<h3 itemprop="">
							<form action="actividad.php" method="POST">
								<input type="text" id="ideve" name="ideve" value="<?php echo $value['id_ev']; ?>" placeholder="<?php echo $value['id_ev']; ?>" hidden>
								<button type="submit" style="border:none; background:transparent; cursor:pointer;">
									<?= $value['dt_titulo']; ?>
								</button>	
							</form>
						</h3>

						<!-- <p itemprop="description">Únete a nosotros en esta festividad centrada en la fe cristiana, donde los alumnos de <b>Harvest Christian School Interlomas</b> compartirán momentos de esperanza, alegría y enseñanzas navideñas. </p> -->
						
						<h5 itemprop="startDate"><i class="far fa-clock"></i> <?php echo  funcioFecha7($value['td_fecha']) ; ?> | <?php echo  $value['dt_hora']; ?></h5>
						<a href="<?= isset( $value['dt_lugar']) ?  $value['dt_lugar'] : 'Sin sede'; ?>" target="_blank">
							<?php
                                if ($value['dt_lugar'] == 'https://maps.app.goo.gl/ntY5LoFCE8MKQM9T6') {
                                        echo "Sede Interlomas";
										?>
											<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Av. Jesús del Monte 269, Interlomas, Jesus del Monte, 52764 Jesús del Monte, Méx.</h5>			
										<?php

                                    }elseif ( $value['dt_lugar'] == 'https://maps.app.goo.gl/MArg7V4LZsCbwsDD9') {
                                        echo "Sede Anáhuac";
										?>
										<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Lago Zirahuen 189, Anáhuac I Secc., Anáhuac I Secc, Miguel Hidalgo, 11320 Ciudad de México, CDMX</h5>
										<?php
                                    }else{
                                        echo "Sin registro";
                                }
                                                                        
                            ?>
							
						</a>
						
						<br>
						<!-- <a style="border-radius:12px; box-shadow: 1px 2px 10px #ccc; padding:10px; background:#113897; color: #fff; margin-top: 10px !important; " href="">Leer más ...</a> -->
						<form action="actividad.php" method="POST">
								<input type="text" id="ideve" name="ideve" value="<?php echo $value['id_ev']; ?>" placeholder="<?php echo $value['id_ev']; ?>" hidden>
								<button type="submit" style="border-radius:12px; box-shadow: 1px 2px 10px #ccc; padding:10px; background:#113897; color: #fff; margin-top: 10px !important; cursor:pointer; ">
									Seguir leyendo...
								</button>	
						</form>
				
					</div>
				</div>
				<?php
						  }
				?>

				<!-- <div class="event-wrap">
					<div class="img-wrap" itemprop="image">
						<img src="images/events.jpg" alt="event images">
					</div>
					<div class="details">
						<a href=""><h3 itemprop="name">Orientation Programme for new Students.</h3></a>
						<p itemprop="description">Orientation Programme for new sffs Students. Orientation Programme for new sffs Students. Orientation Programme for new sffs Students.</p>

						<h5 itemprop="startDate"><i class="far fa-clock"></i> Dec 30,2018 | 11am</h5>
						<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Hotel Malla, Lainchaur</h5>
					</div>
				</div> -->
			</div>
		</section>