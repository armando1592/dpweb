<?php
/*require_once("../library/conexion.php");
class productsModel{
    private $conexion;
    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrar($codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $imagen, $id_proveedor){
        $consulta = "INSERT INTO producto (codigo, nombre, detalle, precio, stock, id_categoria, imagen, id_proveedor) VALUES ('$codigo', '$nombre', '$detalle', '$precio', '$stock', '$id_categoria', '$imagen', '$id_proveedor')";
        $sql = $this->conexion->query($consulta);
        if ($sql) {
            $sql = $this->conexion->insert_id;
        }else{
            $sql = 0;
        }
        return $sql;
    }

    public function existeProducto($codigo){
        $consulta = "SELECT* FROM producto where codigo = '$codigo'";
        $sql = $this->conexion->query($consulta);
        return $sql->num_rows;
    }
}*/require_once("../library/conexion.php");
class ProductsModel{
    private $conexion;
    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrar($codigo, $nombre, $detalle, $precio, $stock, $fecha_vencimiento) {
        $consulta = "INSERT INTO producto (codigo, nombre, detalle, precio, stock, fecha_vencimiento) VALUE('$codigo', '$nombre', '$detalle', '$precio', '$stock', '$fecha_vencimiento')";
        $sql = $this->conexion->query($consulta);
        if ($sql) {
            $sql = $this->conexion->insert_id;
        }else{
            $sql = 0;
        }
        return $sql;
    }

    public function existeProducto($codigo){
        $consulta = "SELECT * FROM producto WHERE codigo ='$codigo'";
        $sql = $this->conexion->query($consulta);
        return $sql->num_rows;

    }
}