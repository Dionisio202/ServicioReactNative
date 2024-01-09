<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class CRUDU{
    public static function Actualizar($data){
        include_once("conexion.php");
        $cedula=$data["cedula"];
        $nombre=$data["nombre"];
        $apellido=$data["apellido"];
        $telefono=$data["telefono"];
        $direccion=$data["direccion"];
    
    $objeto=new Conexion();
    $respuesta=$objeto->Conectar();
    $update= "UPDATE estudiante set nombre='$nombre' , apellido='$apellido' , telefono='$telefono' , direccion='$direccion' WHERE cedula='$cedula' ";
    $resultado=$respuesta->prepare($update);
    $resultado->execute();
    echo json_encode($resultado);
    }
}

?>