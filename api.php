<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
$opc=$_SERVER["REQUEST_METHOD"];
include_once("seleccionar.php");
include_once("insertar.php");
include_once("eliminar.php");
include_once("actualizar.php");
switch($opc){
    case "GET":
        Seleccionar::select();
        break;
    case "POST" :
        insertar::Inserta();
        break;
    case "DELETE" :
        $var=$_GET["cedula"];
        CRUDE::eliminar($var);
        break;
    case "PUT" :
        $datos=json_decode(file_get_contents("php://input"),true);
        CRUDU::Actualizar($datos);
        break;
}

?>