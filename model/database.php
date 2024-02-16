<?php
require_once(__DIR__ . '/../controller/conexion.php');

// Obtiene todos los eventos que tengan tp status = 1

function eventos_fecha()
{
    global $mysqli;
    // $query = "SELECT *,fecha as td_fecha FROM tb_fechas ";
    $query = "SELECT *,fecha as td_fecha, tb_eventos_h.id as id_ev FROM tb_eventos_h 
    LEFT JOIN encargados ON (id_encargado = encargados.id) 
    WHERE tb_eventos_h.tp_status = 1 
    ORDER BY td_fecha ASC
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

