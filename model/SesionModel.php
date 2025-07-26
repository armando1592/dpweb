<?php
require_once("../library/conexion.php");
class SesionModel{
    private $conexion;
    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrar($id_persona, $fecha_hora_inicio, $fecha_hora_fin, $token, $ip){
        $consulta = "INSERT INTO sesiones (id_persona, fecha_hora_inicio, fecha_hora_fin, token, ip) VALUES ('$id_persona', '$fecha_hora_inicio', '$fecha_hora_fin', '$token', '$ip')";
        $sql = $this->conexion->query($consulta);
        if ($sql) {
            $sql = $this->conexion->insert_id;
        }else{
            $sql = 0;
        }
        return $sql;
    }

    public function existeSesion($id_persona){
        $consulta = "SELECT* FROM sesiones where id_persona = '$id_persona'";
        $sql = $this->conexion->query($consulta);
        return $sql->num_rows;
    }
}
