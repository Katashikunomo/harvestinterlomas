<?php
include '../controller/conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
    $asunto = mysqli_real_escape_string($mysqli, $_POST['asunto']);
    $mensaje = $_POST['mensaje'];
    $nombreTutor = 'sin registro';
    $relacion = 'sin registro';
    $nivelAcademico = 'sin registro';
    $genero = 'sin registro';
    $edad = 'sin registro';
    // Si el asunto es "Inscripción", obtener los valores adicionales
    if ($asunto == "inscripcion") {
        $nombreTutor = $_POST['nombre-tutor'];
        $relacion = $_POST['relacion'];
        $nivelAcademico = $_POST['nivel-academico'];
        $genero = $_POST['genero'];
        $edad = $_POST['edad'];
        $mensaje .= "\n\nDatos de inscripción:\nNombre del tutor: $nombreTutor\nRelación: $relacion\nNivel Académico: $nivelAcademico\nGénero: $genero\nEdad: $edad años";
    }

    $sql = "INSERT INTO registro_correos_h (dt_nombre,dt_numero,dt_email,dt_nombre_t,dt_relacion,dt_nivel,dt_genero,dt_edad,dt_mensaje,dt_asunto) values(UPPER('{$nombre}'),'{$numero}',UPPER('{$email}'), UPPER('{$nombreTutor}'),'{$relacion}','{$nivelAcademico}','{$genero}','{$edad}','{$mensaje}','{$asunto}')";
    $mysqli->query($sql);
    // Configurar el destinatario y el asunto del correo
    $destinatario = "info@harvestinterlomas.com, malfatapia1@gmail.com";
    $asuntoCorreo = "Formulario de contacto - $asunto";

    // Construir el cuerpo del correo
    $cuerpoCorreo = "Nombre: $nombre\n";
    $cuerpoCorreo .= "Email: $email\n";
    $cuerpoCorreo .= "Numero de contácto: $numero\n";
    $cuerpoCorreo .= "Mensaje: $mensaje\n";

    // Enviar el correo a los destinatarios
    mail($destinatario, $asuntoCorreo, $cuerpoCorreo);

    // Enviar mensaje adicional a malfatapia1@gmail.com
    $mensajeAdicional = "Un usuario solicita información desde la página web. Consulta la plataforma para ver los datos completos registrados. Link de la página: https://avivamientointernacional.website/admin/index.php";
    mail("malfatapia1@gmail.com", "Solicitud de información desde la página web", $mensajeAdicional);

    // Redirigir a una página de éxito
    header("Location: ../contacto.php?registrado");
    exit();
}
?>
