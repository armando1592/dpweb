<?php
/*require_once("../model/productsModel.php");

$objProducto = new ProductsModel();

$tipo = $_GET['tipo'];

if ($tipo == "registrar") {
    //print_r($_POST);
    $codigo =  $_POST['codigo'];
    $nombre =  $_POST['nombre'];
    $detalle =  $_POST['detalle'];
    $precio =  $_POST['precio'];
    $stock =  $_POST['stock'];
    $id_categoria =  $_POST['id_categoria'];
    $imagen =  $_POST['imagen'];
    $id_proveedor =  $_POST['id_proveedor'];


    /* validar que los campos no esten vacios
    if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $id_categoria == "" || $imagen == "" || $id_proveedor == "") {

        $arrResponse = array('status' => false, 'msg' => 'Error, campos vacios');
    } else {
        // validar si existe persona con el mismo nro_documento
        $existeProducto = $objProducto->existeProducto($codigo);
        if ($existeProducto > 0) {
            $arrResponse = array('status' => false, 'msg' => 'Error: codigo ya existe');
        } else {
            $respuesta = $objProducto->registrar($codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $imagen, $id_proveedor);
            if ($respuesta) {
                $arrResponse = array('status' => true, 'msg' => 'REGISTRADO CORRECTAMENTE');
            } else {
                $arrResponse = array('status' => false, 'msg' => 'ERROR: FALLO AL REGISTAR');
            }
        }
    }
    echo json_encode($arrResponse);
}*/

require_once("../model/ProductsModel.php");

$objpProducto = new productsModel();

$tipo = $_GET['tipo'];
if ($tipo == "registrar") {
    //print_r($_POST);
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];

    if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == ""  || $fecha_vencimiento == "") {
        $arrResponse = array('status' => false, 'msg' => 'Error, campos vacios');
    } else {
        //validacion si existe producto con el mismo codigo
        $existeProducto = $objpProducto->existeProducto($codigo);
        if ($existeProducto > 0) {
            $arrResponse = array('status' => false, 'msg' => 'Error, codigo de producto ya existe');
        } else {

            $respuesta = $objpProducto->registrar($codigo, $nombre, $detalle, $precio, $stock, $fecha_vencimiento);
            if ($respuesta) {
                $arrResponse = array('status' => true, 'msg' => 'Registrado correctamente');
            } else {
                $arrResponse = array('status' => false, 'msg' => 'Error, fallo en registro');
            }
        }
    }
    echo json_encode($arrResponse);
}

