<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
class Conexion{
    public function Conectar(){
        define("host","reactnative-save-money.a.aivencloud.com");
        define("dbname","defaultdb");
        define("username","avnadmin");
        define("password","AVNS_LiaFmepI5cpT0nJA0r4");
       try{
    $con = new PDO("mysql:host=".host.";port=13599;dbname=".dbname, username, password);

    return $con;
       }catch(PDOException $e){
        die("error :".$e->getMessage());
       }
    }
}

?>