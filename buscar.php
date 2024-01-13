<?php
header("Access-Control-Allow-Origin: http://localhost:19006");
include_once("conexion.php");

    $bd = new Conexion();
    $bd = $bd->Conectar();

    $id = $_GET["cedula"];
    $array = array();
    $resultado = $bd->query("SELECT * FROM estudiante WHERE cedula like '%$id%'");
    while ($row = $resultado->fetch()) {
        $e = array();
        $e["cedula"] = $row[0];
        $e["nombre"] = $row[1];
        $e["apellido"] = $row[2];
        $e["direccion"] = $row[3];
        $e["telefono"] = $row[4];
        array_push($array, $e);
    }
    echo json_encode($array);
