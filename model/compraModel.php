<?php
/*require_once("../library/conexion.php");
class compraModel{
    private $conexion;
    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrar($id_producto, $cantidad, $precio, $id_trabajador){
        $consulta = "INSERT INTO compra (id_producto, cantidad, precio, id_trabajador) VALUES ('$id_producto', '$cantidad', '$precio', '$id_trabajador')";
        $sql = $this->conexion->query($consulta);
        if ($sql) {
            $sql = $this->conexion->insert_id;
        }else{
            $sql = 0;
        }
        return $sql;
    }

    public function existeCompra($id_producto){
        $consulta = "SELECT* FROM compra where id_producto = '$id_producto'";
        $sql = $this->conexion->query($consulta);
        return $sql->num_rows;
    }
}*/