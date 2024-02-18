<?php
require_once('view/head-foot/header.php');
include 'include/functions.php';
$resultadoev = eventos_fecha_totaltes();
?>
<style>
	.parallax{
		background-image: url(images/educacion/eventos.png);
	}

    .page-content .container .grid-container {
    margin: auto;
    }
    .grid-box-wrap{
        transition:all linear .3s;
        box-shadow:0px 0px 4px #000;
        border-radius:22px !important;
    }
    .grid-box-wrap:hover{
        border-radius:22px !important;
        box-shadow:1px 4px 10px #000;
    }

    .grid-box-wrap .grid-img img{
        box-shadow:0px 0px 4px #ccc;
        border-radius:22px;
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
		

<div class="page-content " style="margin-bottom:100px;" >
			<div class="container">
				<div class="grid-container" itemscope itemtype=" http://schema.org/Event">
				
                    <?php  foreach($resultadoev as $values){ ?>
                
                    <div class="grid-box-wrap">
						<div class="grid-img" itemprop="image">
							<!-- <img src="images/travel-img.jpg" alt="travel images"> -->
                            <?php
						// Ruta del directorio externo
						$directorio_externo = 'https://avivamientointernacional.website/admin/img/harvest/calendario/';

						// Nombre de la imagen por defecto
						$imagen_por_defecto = 'images/educacion/evento-1.jpg';

						// Nombre de la imagen obtenido de alguna fuente, supongamos $value['nom_imagen']
						$imagen_obtenida = $values['nom_imagen'];

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
						<div class="grid-body" style="border:none">
                            <h4 itemprop="startDate"><i class="far fa-clock"></i> <?php echo  funcioFecha7($values['fecha']) ; ?> | <?php echo  $values['dt_hora']; ?></h4>
							<h1 itemprop="name"><?php echo $values['dt_titulo'];  ?></h1>
                            
                            <form action="actividad.php" method="POST">
								<input type="text" id="ideve" name="ideve" value="<?php echo $values['id_ev']; ?>" placeholder="<?php echo $value['id_ev']; ?>" hidden>
								<button type="submit" style="border-radius:12px; box-shadow: 1px 2px 10px #ccc; padding:10px; background:#113897; color: #fff; margin-top: 10px !important; cursor:pointer; font-size:19px;">
									Seguir leyendo... <i class="fas fa-long-arrow-alt-right"></i>
								</button>	
						    </form>
							<!-- <a href="#">read more <i class="fas fa-long-arrow-alt-right"></i></a> -->
						</div>
					</div>

                    <?php } ?>
				</div>

			</div>
		</div>

<?php
// Aqui el footer
require_once('view/head-foot/footer.php');
?>