<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
class insertar{
    public static function Inserta(){
        $cedula=$_POST['cedula'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $telefono=$_POST['telefono'];
        $direccion=$_POST['direccion'];
        include_once("conexion.php");
        $objeto=new Conexion();
        $respuesta=$objeto->Conectar();
        $insert="INSERT INTO  estudiante(cedula, nombre, apellido, direccion, telefono) values('$cedula','$nombre','$apellido','$telefono','$direccion')";
        $resultado=$respuesta->prepare($insert);
        $resultado->execute();
        echo json_encode($resultado);
    }
}
?>