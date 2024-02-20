<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Si el asunto es "Inscripción", obtener los valores adicionales
    if ($asunto == "inscripcion") {
        $nombreTutor = $_POST['nombre_tutor'];
        $relacion = $_POST['relacion'];
        $nivelAcademico = $_POST['nivel_academico'];
        $genero = $_POST['genero'];
        $edad = $_POST['edad'];
        $mensaje .= "\n\nDatos de inscripción:\nNombre del tutor: $nombreTutor\nRelación: $relacion\nNivel Académico: $nivelAcademico\nGénero: $genero\nEdad: $edad años";
    }

    // Configurar el destinatario y el asunto del correo
    $destinatario = "info@harvestinterlomas.com";
    $asuntoCorreo = "Formulario de contacto - $asunto";

    // Construir el cuerpo del correo
    $cuerpoCorreo = "Nombre: $nombre\n";
    $cuerpoCorreo .= "Email: $email\n";
    $cuerpoCorreo .= "Mensaje: $mensaje\n";

    // Enviar el correo
    mail($destinatario, $asuntoCorreo, $cuerpoCorreo);

    // Redirigir a una página de éxito
    header("Location: ../contacto.php");
    exit();
}
?>
