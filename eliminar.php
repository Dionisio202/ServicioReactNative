<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
class CRUDE{
    public static function eliminar($var){
        include_once("conexion.php");
        $objeto= new Conexion();
        $respuesta=$objeto->Conectar();
        $delete="DELETE  FROM estudiante where cedula='$var'";
        $resultado=$respuesta->prepare($delete);
        $resultado->execute();
        echo json_encode($resultado);
    }
}
?>