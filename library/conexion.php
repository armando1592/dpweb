<?php
require_once "../config/config.php";

class comexion{
    public static function connect(){
        $mysql = new mysqli(BD_HOST,BD_USER ,BD_PASSWORD,BD_NAME);
        $mysql ->set_charset(BD_CHARSET);
        date_default_timezone_set("America/Lima");
        if(mysqli_connect_errno()){
            echo "Error de coenxion:" .mysqli_connect_errno();
        }else {
            echo"conexion exitosa";
        }
    }
}

 $mysql = new mysqli(BD_HOST,BD_USER ,BD_PASSWORD,BD_NAME);
        $mysql ->set_charset(BD_CHARSET);
        date_default_timezone_set("America/Lima");
        if(mysqli_connect_errno()){
            echo "Error de coenxion:" .mysqli_connect_errno();
        }else {
            echo"conexion exitosa";
        }