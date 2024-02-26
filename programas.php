<?php require_once('view/head-foot/header.php'); ?> 
<style>
    body{
        transition:all  .4s !important;
    }
    /* Estilos generales */
    .container-programs {
        max-width: 1200px;
        margin: auto !important;
        padding: 0 20px;
    }
    .container-programs  .grid-container{
        margin:auto;
    }
    /* Estilos del encabezado */

    /* Estilos del contenido principal */
    .parallax {
        background-image: url(images/educacion/eventos.png);
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .parallax h1 {
        font-size: 3em;
        color: #fff;
    }
    /* Estilos de las tarjetas de programas */
    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        grid-gap: 100px;
        margin-top: 120px !important;
        margin-bottom: 120px !important;
    }
    .grid-box-wrap {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin:auto;
        transition:all ease .5s;
    }
    .grid-box-wrap:hover {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }
    .grid-img img {
        width: 100%;
        height: auto;
        border-bottom: 1px solid #ccc;
    }
    .grid-content {
        padding: 20px;
    }
    /* Estilos del cuadro de promoción */
    .promocionDiv{
        width:90%;
        max-width:1200px;
        margin:auto;
        background-color: #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        padding: 20px;
        margin-top: 100px;
        /* position:absolute; */
    }
    h2 {
    font-size: 18px;
    border-bottom: 2px solid;
    border-radius:2px;
    /* background-image: linear-gradient(to bottom right, #f9c922, #3498db); */
    }

    .promocionDiv h2 {
        margin-bottom: 10px;
        color: #333;
    }
    p {
        color: #666;
        margin-bottom: 20px;
        font-size:16px !important;
    }
     .boton {
        background-color: #003152;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size:15.6px;
        text-decoration: none;
        transition:all ease .6s;
        border:2px solid transparent;
    }
    .boton:hover {
        background-color: #fff;
        color:#003152;
        border:2px solid #003152;
    }

    th{
        font-size: 13px;
    }
</style>


<!-- Parallax -->
<div class="parallax">
</div>

<!-- Contenido principal -->
<div class="container-programs">





    <!-- Tarjetas de programas -->
    <div class="grid-container">
        <div class="grid-box-wrap">
            <div class="grid-img">
                <img src="images/educacion/primaria.avif" alt="Programa 1">
            </div>
            <div class="grid-content">
                <h2>Educación Preescolar</h2>
                <p> <b>Educación Preescolar en Harvest Christian School Interlomas:</b> <br>
                En nuestro preescolar, nos enfocamos en el desarrollo integral de los niños, abarcando aspectos físicos, emocionales, sociales y espirituales. Nuestro programa fomenta valores cristianos desde temprana edad, a través de actividades lúdicas y educativas que preparan a los pequeños para su futuro académico y personal</p>
                <br>
                <a href="contacto.php?contacto=2" class="boton boton--secundario">Contactar</a>
                <!-- <a id="btn1" href="#cuadrado" class="boton" >Más Información</a> -->
                <div id="cuadrado">
                        <div class="promocionDiv">
                        <h2>Preescolar en Harvest Christian School Interlomas</h2>
                            <p>En nuestro preescolar, nos enfocamos en brindar una educación de calidad que prepare a los niños para su futuro académico y personal. Nuestro programa se destaca por:</p>
                            <ul>
                                <li>Enfoque en el aprendizaje del idioma Inglés desde temprana edad.</li>
                                <li>Desarrollo integral de los niños, incluyendo aspectos físicos, emocionales, sociales y espirituales.</li>
                                <li>Actividades lúdicas y educativas que fomentan valores cristianos.</li>
                                <li>Maestros capacitados y comprometidos con la educación de los niños.</li>
                            </ul>
                            <p>Estas son las materias que se imparten en este nivel, procurando mantener una calidad de aprendizaje de Inglés constante:</p>
                            <table>
                                <tr>
                                    <th>Materia</th>
                                    <th>Horas a la semana</th>
                                </tr>
                                <tr>
                                    <td>Música</td>
                                    <td>1 hora</td>
                                </tr>
                                <tr>
                                    <td>Matemáticas</td>
                                    <td>2 horas</td>
                                </tr>
                                <tr>
                                    <td>Expresión artística</td>
                                    <td>1 hora</td>
                                </tr>
                                <tr>
                                    <td>Educación Física</td>
                                    <td>1 hora</td>
                                </tr>
                                <tr>
                                    <td>Inglés</td>
                                    <td>4 horas</td>
                                </tr>
                            </table>

                        </div>
                </div>
            </div>
        </div>
        <div class="grid-box-wrap">
            <div class="grid-img">
                <img src="images/educacion/primaria.avif" alt="Programa 1">
            </div>
            <div class="grid-content">
                <h2>Educación Primaria</h2>
                <p> <b>Educación Primaria en Harvest Christian School Interlomas:</b> <br>
                En la primaria de Harvest Christian School Interlomas, fortalecemos los valores cristianos y desarrollamos habilidades académicas sólidas. Promovemos el amor por el estudio y fomentamos el respeto, la tolerancia y la solidaridad entre nuestros estudiantes, preparándolos para enfrentar los desafíos con una base sólida en valores y conocimientos.</p>
                <br>
                <a href="contacto.php?contacto=2" class="boton boton--secundario">Contactar</a>
                <!-- <a id="btn2" href="#cuadrado2" class="boton boton--secundario">Más información</a> -->
                <div id="cuadrado2">
                        <div class="promocionDiv">
                            <div id="iconos">
                                ☕ 🍰
                            </div>
                            <div id="titulo">
                                ¡Descubre Nuestro Curso para <br> <b> <i> Técnicas de Extracción de Café !</i></b>
                            </div>
                            <div id="descripcion">
                                Sumérgete en el conocimiento con nuestros cursos de alta calidad mientras disfrutas de un delicioso café y bizcocho.
                            <!-- Modal para el registro  es el plugin para poder mostrar el modal es esta la direccion -->
                                <a class="boton boton--secundario" href="#ex2" rel="modal:open">Registrarme</a>

                                <!-- Modal HTML embedded directly into document -->
                                <form action="" class=" login_form modal " id="ex2" style="display:none;">
                                <h3>Por favor ingresa tu correo</h3>
                                <p>Nos pondremos en contacto contigo</p>
                                <p><label>Correo:</label><input type="email" placeholder="Ingresa tu correo" /></p>
                                <p><input class="boton boton--secundario" type="submit" value="Enviar registro" /></p>
                                </form>

                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="grid-box-wrap">
            <div class="grid-img">
                <img src="images/educacion/secundaria.avif" alt="Programa 2">
            </div>
            <div class="grid-content">
                <h2>Secundaria</h2>
                <p><b>Educación Secundaria en Harvest Christian School Interlomas:</b> <br>
                    En nuestra secundaria, profundizamos en los conocimientos académicos y fortalecemos la formación integral de nuestros estudiantes. Fomentamos habilidades de análisis, reflexión y toma de decisiones desde una perspectiva cristiana, preparando a los jóvenes para ser ciudadanos responsables y comprometidos con su entorno.</p>
                <br>
                <a href="contacto.php?contacto=2" class="boton boton--secundario">Contactar</a>
                <!-- <a id="btn3" href="#cuadrado3" class="boton boton--secundario">Más información</a> -->
                <div id="cuadrado3">
                        <div class="promocionDiv">
                            <p>Estas son las Materias que se imparten en este nivel, procurando mantener una calidad de aprendizaje de Ingles constante </p>
                            <table>
                                <tr>
                                    <th>Materia</th>
                                    <th>Horas a la semana</th>
                                </tr>
                                <tr>
                                    <td>Música</td>
                                    <td>1 hora</td>
                                </tr>
                                <tr>
                                    <td>Matemáticas</td>
                                    <td>3 horas</td>
                                </tr>
                                <tr>
                                    <td>Español</td>
                                    <td>3 horas</td>
                                </tr>
                                <tr>
                                    <td>Educación Física</td>
                                    <td>1 hora</td>
                                </tr>
                                <tr>
                                    <td>Inglés</td>
                                    <td>20 horas</td>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>
        </div>
        <div class="grid-box-wrap">
            <div class="grid-img">
                <img src="images/educacion/preparatoria.avif" alt="Programa 3">
            </div>
            <div class="grid-content">
                <h2>Nivel Medio Superior (preparatoria)</h2>
                <p> <b>Preparatoria en Harvest Christian School Interlomas:</b> <br>
                En la preparatoria de Harvest Christian School Interlomas, preparamos a nuestros estudiantes para la educación superior, reforzando los valores cristianos y fomentando la responsabilidad individual y social. Formamos jóvenes íntegros, capaces de enfrentar los retos del mundo actual con una sólida base académica y valores cristianos arraigados.</p>
                <br>
                <a href="contacto.php?contacto=2" class="boton boton--secundario">Contactar</a>
                <!-- <a id="btn4" href="#cuadrado4" class="boton boton--secundario">Más información</a> -->
                <div id="cuadrado4">
                        <div class="promocionDiv">
                            <div id="iconos">
                                ☕ 🍰
                            </div>
                            <div id="titulo">
                                ¡Descubre Nuestro Curso para <br> <b> <i> Técnicas de Extracción de Café !</i></b>
                            </div>
                            <div id="descripcion">
                                Sumérgete en el conocimiento con nuestros cursos de alta calidad mientras disfrutas de un delicioso café y bizcocho.
                            <!-- Modal para el registro  es el plugin para poder mostrar el modal es esta la direccion -->
                                <a class="boton boton--secundario" href="#ex2" rel="modal:open">Registrarme</a>

                                <!-- Modal HTML embedded directly into document -->
                                <form action="" class=" login_form modal " id="ex2" style="display:none;">
                                <h3>Por favor ingresa tu correo</h3>
                                <p>Nos pondremos en contacto contigo</p>
                                <p><label>Correo:</label><input type="email" placeholder="Ingresa tu correo" /></p>
                                <p><input class="boton boton--secundario" type="submit" value="Enviar registro" /></p>
                                </form>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
// Aqui el footer
require_once('view/head-foot/footer.php');
?>