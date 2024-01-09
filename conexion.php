<?php
header("Access-Control-Allow-Origin: http://localhost:19006");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
class Conexion{
    public function Conectar(){
        define("host","localhost");
        define("dbname","quinto");
        define("username","root");
        define("password","");
       try{
    $con = new PDO("mysql:host=".host.";dbname=".dbname,username,password);
    return $con;
       }catch(PDOException $e){
        die("error :".$e->getMessage());
       }
    }
}

?>