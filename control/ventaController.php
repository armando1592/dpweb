<?php
require_once("../model/VentaModel.php");
require_once("../model/ProductoModel.php");

$objProducto = new ProductoModel();
$objVenta = new VentaModel();

$tipo = $_GET['tipo'];

if ($tipo == "registrarTemporal") {
    $respuesta = array('status' => false, 'msg' => 'fallo el controlador');
    $id_producto = $_POST['id_producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $b_producto = $objVenta->buscarTemporal($id_producto);
    if ($b_producto) {
        $n_cantidad = $b_producto->cantidad + $cantidad;
        $objVenta->actualizarCantidadTemporal($id_producto, $n_cantidad);
        $respuesta = array('status' => true, 'msg' => 'actualizado');
    }else {
        $registro = $objVenta->registrar_temporal($id_producto, $precio, $cantidad);
        $respuesta = array('status' => true, 'msg' => 'registrado');
    }
    echo json_encode($respuesta);
} elseif ($tipo == "listarTemporales") {
    $respuesta = array('status' => false, 'msg' => 'fallo el controlador');
    $temporales = $objVenta->buscarTemporales();
    if ($temporales) {
        $respuesta = array('status' => true, 'data' => $temporales);
    }
    echo json_encode($respuesta);
} elseif ($tipo == "actualizarCantidadTemporal") {
    $respuesta = array('status' => false, 'msg' => 'fallo el controlador');
    $id = $_POST['id'];
    $cantidad = $_POST['cantidad'];
    $actualizado = $objVenta->actualizarCantidadTemporal($id, $cantidad);
    if ($actualizado) {
        $respuesta = array('status' => true, 'msg' => 'cantidad actualizada');
    }else {
        $respuesta = array('status' => false, 'msg' => 'no se pudo actualizar');
    }
    echo json_encode($respuesta);
} elseif ($tipo == "eliminarTemporal") {
    $respuesta = array('status' => false, 'msg' => 'fallo el controlador');
    $id = $_POST['id'];
    $eliminado = $objVenta->eliminarTemporal($id);
    if ($eliminado) {
        $respuesta = array('status' => true, 'msg' => 'producto eliminado');
    }
    echo json_encode($respuesta);
}
