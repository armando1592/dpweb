<?php
require_once("../model/ProductsModel.php");

$objProducto = new ProductsModel();

$tipo = $_GET['tipo'];
if ($tipo == "registrar") {
    //print_r($_POST);
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $id_categoria  = $_POST['id_categoria'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];

    if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == ""  || $id_categoria == "" || $fecha_vencimiento == "") {
        $arrResponse = array('status' => false, 'msg' => 'Error, campos vacios');
    } else {
        //validacion si existe producto con el mismo codigo
        $existeProducto = $objProducto->existeProducto($codigo);
        if ($existeProducto > 0) {
            $arrResponse = array('status' => false, 'msg' => 'Error, codigo de producto ya existe');
        } else {

            $respuesta = $objProducto->registrar($codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $fecha_vencimiento);
            if ($respuesta) {
                $arrResponse = array('status' => true, 'msg' => 'Registrado correctamente');
            } else {
                $arrResponse = array('status' => false, 'msg' => 'Error, fallo en registro');
            }
        }
    }
    echo json_encode($arrResponse);
}

if ($tipo == "mostrar_productos") {
    $productos = $objProducto->mostrarProductos();
    header('Content-Type: application/json');
    echo json_encode($productos);
}

if ($tipo == "ver") {
    $respuesta = array('status' => false, 'msg' => '');
    $id_producto = $_POST['id_producto'];
    $producto = $objProducto->ver($id_producto);
    if($producto){
        $respuesta ['status'] = true;
        $respuesta ['data'] = $producto;
    }else {
        $respuesta['msg'] = "Error, categoria no existe";
    }
    echo json_encode($respuesta);
}


if ($tipo == "actualizar") {
    $id_producto = $_POST['id_producto'];
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $id_categoria = $_POST['id_categoria'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];

    if ($id_producto == "" || $codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $id_categoria == "" || $fecha_vencimiento == "") {
        $arrResponse = array('status' => false, 'msg' => 'Error, campos vacios');
    }else {
        $existeID = $objProducto->ver($id_producto);
        if(!$existeID){
            $arrResponse = array('status' =>false, 'msg' => 'Error, categoria no existe');
            echo json_encode($arrResponse);
            exit; 
        }else {
            $actualizar = $objProducto->actualizar($id_producto, $codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $fecha_vencimiento);
            if($actualizar){
                $arrResponse = array('status' => true, 'msg' => 'Actualizado correctamente');
                
            }else {
                $arrResponse = array('status' => false, 'msg' => $actualizar);  
            }
            echo json_encode($arrResponse);
            exit;
        }
    }
}

if($tipo == "eliminar"){
    $id_producto = $_POST['id_producto'];
    if($id_producto == ""){
        $arrResponse = array('status' => false, 'msg' => 'Error, id vacio');
    }else{
        $eliminar = $objProducto->eliminar($id_producto);
        if ($eliminar) {
            $arrResponse = array('status' => true, 'msg' => 'Producto eliminado');
        }else{
            $arrResponse = array('status' => false, 'msg' => 'Error al eliminar producto');
        }
        echo json_encode($arrResponse);
        exit;
    }
}