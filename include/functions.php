<?php
include './controller/conexion.php';

function funcioFecha7($fecha) {
    $date = DateTime::createFromFormat('Y-m-d', $fecha);
    
    // Establecer la configuración regional a español para México
    setlocale(LC_TIME, 'es_MX.utf8');

    $dias_semana = [
        'domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'
    ];
    
    $meses = [
        'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'
    ];

    return ucfirst($dias_semana[$date->format('w')]) . ' ' . $date->format('d') . ' de ' . ucfirst($meses[$date->format('n') - 1]) . ' del ' . $date->format('Y');
}

function eventos_fecha_id($id){
    global $mysqli;
    
    $query = "SELECT *, fecha as td_fecha, tb_eventos_h.id as id_ev FROM tb_eventos_h 
    LEFT JOIN encargados ON (id_encargado = encargados.id) 
    WHERE  tb_eventos_h.id = '{$id}'";
    
    $result = $mysqli->query($query);
    return $result->fetch_assoc();
}

function eventos_fecha_totaltes(){
    global $mysqli;
    
    $query = "SELECT *, fecha as td_fecha, tb_eventos_h.id as id_ev FROM tb_eventos_h 
    LEFT JOIN encargados ON (id_encargado = encargados.id) 
    WHERE  tp_status = 1";
    
    $result = $mysqli->query($query);
    return $result;
}

function eventos_fecha_listados($id)
{
    global $mysqli;
    // $query = "SELECT *,fecha as td_fecha FROM tb_fechas ";
    $query = "SELECT *,fecha as td_fecha, tb_eventos_h.id as id_ev FROM tb_eventos_h 
    LEFT JOIN encargados ON (id_encargado = encargados.id) 
    WHERE tb_eventos_h.tp_status = 1 and  tb_eventos_h.id != '{$id}'
    ORDER BY td_fecha ASC LIMIT 4 
    ";
    
    $result = $mysqli->query($query);

    $eventos = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $eventos[] = $row;
        }
    }

    return $eventos;
}




function get_versiculo($numero){
    global $mysqli;
    $query = "SELECT *, REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(text, '{', ''), '}', ''), '\\\', ''),'\\\i',''),'\cf6','') AS texto FROM bible_verses LEFT JOIN bible_books ON (bible_books.idBook = bible_verses.idBook) WHERE idVerse = '$numero'";
    $result = $mysqli->query($query);
    return $result->fetch_assoc();    
}