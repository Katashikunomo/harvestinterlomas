<?php
	//
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	date_default_timezone_set('America/Mexico_City');
	setlocale(LC_TIME, 'es_MX.utf8');
	// Inclusión del archivo de bases de datos y funciones
	require_once(__DIR__ . '/model/database.php');
	require_once(__DIR__ . '/include/functions.php');
	
	// Aqui el header
	require_once('view/head-foot/header.php');
	// Aqui el baner
	require_once('view/info/banner.php');
	// <!-- Banner Close -->
	// <!-- Aqui la primera seccion (mision vision proposito) -->
	require_once('view/info/first_section.php');
	// <!-- Aqui los programas y cursos -->
	require_once('view/info/programs.php');
	// <!-- Learn courses End -->
	// <!-- Aqui include de galery -->
	require_once('view/galery/galery.php');
	// <!-- End of gallery Images -->
	// <!-- Aqui eventos actividades -->
	require_once('view/events-notice/events.php');
	// <!-- End of Others talk -->
	// <!-- Aqui Ultimas noticias -->
	// require_once('view/events-notice/notice.php');
	// <!-- Latest News CLosed -->
	// <!-- End of Query Section -->
	// Auqui el footer
	require_once('view/head-foot/footer.php');


	