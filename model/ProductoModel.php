<?php
require_once("../library/conexion.php");
class ProductoModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    // obtener todos los productos
    public function verProductos()
    {
        $arr_productos = array();
        $consulta = "SELECT p.id, p.codigo, p.nombre, p.detalle, p.precio, p.stock, c.nombre AS categoria, p.fecha_vencimiento, p.imagen, pr.razon_social AS proveedor
                 FROM producto p
                 INNER JOIN categoria c ON p.id_categoria = c.id
                 INNER JOIN persona pr ON p.id_proveedor = pr.id
                 WHERE pr.rol = 'proveedor'";
        $sql = $this->conexion->query($consulta);
        while ($objeto = $sql->fetch_object()) {
            array_push($arr_productos, $objeto);
        }
        return $arr_productos;
    }
    public function existeCodigo($codigo)
    {
        $codigo = $this->conexion->real_escape_string($codigo);
        $consulta = "SELECT id FROM producto WHERE codigo='$codigo' LIMIT 1";
        $sql = $this->conexion->query($consulta);
        return $sql->num_rows;
    }
    public function existeCategoria($nombre)
    {
        $consulta = "SELECT * FROM producto WHERE nombre='$nombre'";
        $sql = $this->conexion->query($consulta);
        return $sql->num_rows;
    }
    // Registrar nuevo producto
    public function registrar($codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $fecha_vencimiento, $imagen, $id_proveedor)
    {
        $consulta = "INSERT INTO producto (codigo, nombre, detalle, precio, stock, id_categoria, fecha_vencimiento, imagen, id_proveedor) VALUES ('$codigo', '$nombre', '$detalle', $precio, $stock, $id_categoria, '$fecha_vencimiento', '$imagen', '$id_proveedor')";
        $sql = $this->conexion->query($consulta);
        if ($sql) {
            $sql = $this->conexion->insert_id;
        } else {
            $sql = 0;
        }
        return $sql;
    }
    public function ver($id)
    {
        $consulta = "SELECT * FROM producto WHERE id='$id'";
        $sql = $this->conexion->query($consulta);
        return $sql->fetch_object();
    }
    // editar producto
    public function actualizar($id_producto, $codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $fecha_vencimiento, $imagen, $id_proveedor)
    {   // Escapar datos para evitar errores o inyecciones simples
        $codigo = $this->conexion->real_escape_string($codigo);
        $nombre = $this->conexion->real_escape_string($nombre);
        $detalle = $this->conexion->real_escape_string($detalle);
        $fecha_vencimiento = $this->conexion->real_escape_string($fecha_vencimiento);
        $id_proveedor = (int)$id_proveedor;
        $id_categoria = (int)$id_categoria;
        $precio = (float)$precio;
        $stock = (int)$stock;
        $id_producto = (int)$id_producto;

        // Armar consulta según si hay imagen nueva o no
        if (!empty($imagen)) {
            $consulta = "UPDATE producto 
                     SET codigo='$codigo', nombre='$nombre', detalle='$detalle', 
                         precio=$precio, stock=$stock, id_categoria=$id_categoria, 
                         fecha_vencimiento='$fecha_vencimiento', imagen='$imagen', 
                         id_proveedor='$id_proveedor' 
                     WHERE id='$id_producto'";
        } else {
            $consulta = "UPDATE producto 
                     SET codigo='$codigo', nombre='$nombre', detalle='$detalle', 
                         precio=$precio, stock=$stock, id_categoria=$id_categoria, 
                         fecha_vencimiento='$fecha_vencimiento', 
                         id_proveedor='$id_proveedor' 
                     WHERE id='$id_producto'";
        }

        $sql = $this->conexion->query($consulta);
        return $sql;
    }
    public function eliminar($id)
    {
        $consulta = "DELETE FROM producto WHERE id='$id'";
        $sql = $this->conexion->query($consulta);
        return $sql;
    }
public function buscarProductoByNameOrCodigo($dato){
        $arr_productos = array();
        $consulta = "SELECT * FROM producto WHERE codigo LIKE '$dato%' OR nombre LIKE '%$dato%' OR detalle LIKE '%$dato%'";
        $sql = $this->conexion->query($consulta);
        while ($objeto = $sql->fetch_object()) {
            array_push($arr_productos, $objeto);
        }
        return $arr_productos;
    }
}