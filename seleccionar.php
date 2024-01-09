<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
class Seleccionar{
public static function select(){
    include_once("conexion.php");
    $objeto=new Conexion();
    $respuesta=$objeto->Conectar();
    $select="SELECT * FROM estudiante";
    $resultado=$respuesta->prepare($select);
    $resultado->execute();
    $datos=$resultado->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($datos);
}
}
?>