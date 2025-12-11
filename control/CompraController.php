<?php
//incluir model compras
require_once('../models/CompraModel.php');
//incluir model producto
require_once('../models/ProductoModel.php');
//incluir model personas
require_once('../models/Model_persona.php');

$tipo  = $_REQUEST['tipo'];

//instancio la clase modelo compra
$objCompra = new CompraModel();
//instancio la clase modelo producto
$objProducto = new ProductoModel();
//instancio la clase modelo persona
$objPersona = new UsuarioModel();


if ($tipo == "obtener_precio") {
    $productoId = $_GET['producto_id'] ?? null;
    if ($productoId) {
        $arrPrecio = $objCompra->ObtenerPrecioProducto($productoId);
        if ($arrPrecio !== null) {
            $arr_Respuesta = array('status' => true, 'precio' => $arrPrecio);
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: Producto no encontrado');
        }
    } else {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: Falta el producto_id');
    }
    echo json_encode($arr_Respuesta);
}

if ($tipo == "registrar") {
    if ($_POST) {
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $trabajador = $_POST['trabajador'];

        if ($producto == "" || $cantidad == "" || $precio == "" || $trabajador == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: Campos vacíos');
        } else {
            $arrCompra = $objCompra->registrarCompra($producto, $cantidad, $precio, $trabajador);

            if ($arrCompra->status) {
                $arr_Respuesta = array('status' => true, 'mensaje' => $arrCompra->mensaje);
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => $arrCompra->mensaje);
            }
        }
        echo json_encode($arr_Respuesta);
    }
}
if($tipo == "listar"){
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrCompras = $objCompra->obtenerCompras();
    if(!empty($arrCompras)){
        for($i=0; $i<count($arrCompras); $i++){
            $id_compra = $arrCompras[$i]->id;
            $id_producto = $arrCompras[$i]->id_producto;
            $cantidad = $arrCompras[$i]->cantidad;
            $precio = $arrCompras[$i]->precio;
            $fecha_compra = $arrCompras[$i]->fecha_compra;
            $id_trabajador = $arrCompras[$i]->id_trabajador;

            //llamar a el metodo ObtenerProductoPorId para identificar mejor el nombre del producto
            $id_producto = $arrCompras[$i]->id_producto;
            $r_producto = $objProducto->ObtenerProductoPorId($id_producto);
            $arrCompras[$i]->producto = $r_producto;

            //llamar a el metodo ObtenerTrabajadorPorId para identificar mejor el nombre del trabajador
            $id_trabajador = $arrCompras[$i]->id_trabajador;
            $r_trabajador = $objPersona->ObtenerPersonaPorId($id_trabajador);
            $arrCompras[$i]->trabajador = $r_trabajador;

            $opciones = '<a class="btn btn-warning btn-sm m-2" href="' . BD_URL . '?admin=compras-editar&id_compra=' . $id_compra . '"">
                        <i class="fas fa-edit"></i> Editar
                        </a>
                        <button class="btn btn-danger btn-sm m-2" onclick="eliminar_compra('.$id_compra.')">
                        <i class="fas fa-trash-alt"></i> Eliminar
                        </button>';
            $arrCompras [$i] -> options = $opciones;
}
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arrCompras;
    }
    echo json_encode($arr_Respuesta);
}
if ($tipo == "ver_compra") {
    $id_compra = $_POST['idCompra'];
    $arr_Respuesta = $objCompra->verCompra($id_compra);
    if (empty($arr_Respuesta)){
        $response = array('status' => false, 'mensaje' => 'Compra no encontrada');
    } else {
        $response = array('status' => true, 'mensaje' => 'Compra encontrada', 'datos' => $arr_Respuesta);
    }
    echo json_encode($response);
}

if ($tipo == "editar") {
    if ($_POST) {
        $id = $_POST['id_compra'];
        $producto_id = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio_unitario = $_POST['precio'];
        $trabajador_id = $_POST['trabajador'];

        if ($id == "" || $producto_id == "" || $cantidad == "" || $precio_unitario == "" || $trabajador_id == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: campos vacíos');
        } else {
            $arrCompra = $objCompra->editarCompra($id, $producto_id, $cantidad, $precio_unitario, $trabajador_id);
            if ($arrCompra->status) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Compra actualizada exitosamente y stock actualizado');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar la compra');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

if ($tipo == "eliminar") {
    $id_compra = $_POST['id'];
    $resultado = $objCompra->eliminarCompra($id_compra);
    if ($resultado) {
        $arr_Respuesta = array('status' => true, 'mensaje' => 'Compra eliminada exitosamente');
    } else {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al eliminar la compra');
    }
    echo json_encode($arr_Respuesta);
}