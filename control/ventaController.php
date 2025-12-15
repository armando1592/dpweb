<?php
require_once("../model/VentaModel.php");
require_once("../model/ProductoModel.php");
require_once("../model/UsuarioModel.php");

header('Content-Type: application/json; charset=utf-8');

$objProducto = new ProductoModel();
$objVenta = new VentaModel();
$objUsuario = new UsuarioModel();

$tipo = $_GET['tipo'];

if ($tipo == "registrarTemporal") {
    $respuesta = array('status' => false, 'msg' => 'fallo el controlador');
    $id_producto = $_POST['id_producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $b_producto = $objVenta->buscarTemporal($id_producto);
    if ($b_producto) {
        $n_cantidad = $b_producto->cantidad+1;
        $objVenta->actualizarCantidadTemporal($id_producto, $n_cantidad);
        $respuesta = array('status' => true, 'msg' => 'actualizado');
    }else {
        $registro = $objVenta->registrar_temporal($id_producto, $precio, $cantidad);
        $respuesta = array('status' => true, 'msg' => 'registrado');
    }
    echo json_encode($respuesta);
}

if ($tipo=="listar_venta_temporal") {
    $respuesta = array('status' => false, 'msg' => 'fallo el controlador');
    $b_producto = $objVenta->buscarTemporales();
    if ($b_producto) {
        $respuesta = array('status' => true, 'data' => $b_producto);
    }else {
       $respuesta = array('status' => false, 'msg' => 'no se encontraron datos');
    }
    echo json_encode($respuesta);
}

if($tipo=="actualizar_cantidad"){
    $id = $_POST['id'];
    $cantidad =  $_POST['cantidad'];
    $respuesta = array('status' => false, 'msg' => 'fallo el controlador');
    $consulta = $objVenta->actualizarCantidadTemporalByid($id, $cantidad);
    if ($consulta) {
        $respuesta = array('status' => true, 'msg' => 'success');
    }else {
        $respuesta = array('status' => false, 'msg' => 'error');
    }
    echo json_encode($respuesta);
}

if($tipo=="eliminar_temporal"){
    $id = $_POST['id'];
    $respuesta = array('status' => false, 'msg' => 'fallo el controlador');
    $consulta = $objVenta->eliminarTemporal($id);
    if ($consulta) {
        $respuesta = array('status' => true, 'msg' => 'eliminado');
    } else {
        $respuesta = array('status' => false, 'msg' => 'error');
    }
    echo json_encode($respuesta);
}

if($tipo=="finalizar_venta"){
    $respuesta = array('status' => false, 'msg' => 'fallo el controlador');
    $consulta = $objVenta->eliminarTemporales();
    if ($consulta) {
        $respuesta = array('status' => true, 'msg' => 'venta finalizada');
    } else {
        $respuesta = array('status' => false, 'msg' => 'error');
    }
    echo json_encode($respuesta);
}

if ($tipo=="registrar_venta") {
    session_start();
    $id_cliente = isset($_POST['id_cliente']) ? $_POST['id_cliente'] : 0;
    $fecha_venta = isset($_POST['fecha_venta']) ? $_POST['fecha_venta'] : date('Y-m-d H:i:s');
    $id_vendedor = isset($_SESSION['ventas_id']) ? $_SESSION['ventas_id'] : 0;
    // Validar existencia de vendedor y cliente en tabla persona
    // Si no existen, usar NULL para evitar fallo FK
    $id_vendedor = ($id_vendedor && $objUsuario->ver($id_vendedor)) ? $id_vendedor : null;
    $id_cliente = ($id_cliente && $objUsuario->ver($id_cliente)) ? $id_cliente : null;
    $ultima_venta = $objVenta->buscar_ultima_venta();
    //logica para registar venta
    $respuesta = array('status' => false, 'msg' => 'fallo el controlador');
    if ($ultima_venta) {
        $correlativo = $ultima_venta->codigo + 1;
    } else {
        $correlativo = 1;
    }
    //registrar la venta oficial (puede tener cliente/vendedor NULL)
    try {
        $venta = $objVenta->registrar_venta($correlativo, $fecha_venta, $id_cliente, $id_vendedor);
    } catch (Exception $e) {
        $respuesta = array('status' => false, 'msg' => 'Error en BD: ' . $e->getMessage());
        echo json_encode($respuesta);
        exit;
    }
    if ($venta) {
        $temporales = $objVenta->buscarTemporales();
        if (count($temporales) > 0) {
            $all_ok = true;
            foreach ($temporales as $temporal) {
                $ok = $objVenta->registrar_detalle_venta($venta, $temporal->id_producto, $temporal->precio, $temporal->cantidad);
                if (!$ok) {
                    $all_ok = false;
                    break;
                }
            }
            if ($all_ok) {
                //eliminar todos los temporales
                $objVenta->eliminarTemporales();
                $respuesta = array('status' => true, 'msg' => 'venta registrada con exito');
            } else {
                // rollback: eliminar venta y detalles creados
                $objVenta->eliminarVenta($venta);
                $respuesta = array('status' => false, 'msg' => 'error al registrar detalle de venta');
            }
        } else {
            //si no hay productos temporales
            // eliminar venta creada sin detalles
            $objVenta->eliminarVenta($venta);
            $respuesta = array('status' => false, 'msg' => 'no hay productos para registrar la venta');
        }
    } else {
        $respuesta = array('status' => false, 'msg' => 'error al registrar venta');
    }
    echo json_encode($respuesta);
}

