<?php
require_once("../model/categoriaModel.php");
$objcategoria = new categoriaModel();




$tipo = $_GET['tipo'];

if ($tipo == "Guardar") {
    // print_r($_POST);
    $nro_identidad = $_POST['nombre'];
    $razon_social = $_POST['detalle'];

    if ($nombre == "" || $detalle =="") {
        $arrResponse = array('status' => false, 'msg' => 'Error, campos  vacios');
    } else {
        //validacion si existe persona con el mismo dni
        $existeCategoria = $objcategoria->existeCategoria($nombre);
       if ($existeCategoria>0) {
        $arrResponse = array('status' => false, 'msg' => 'Error, nombre de categoria ya existe');
       }else {
        $respuesta = $objcategoria->Guardar($nombre, $detalle);
        if ($respuesta) {
            $arrResponse = array('status' => true, 'msg' => 'Resgistrado Correctamente');
        } else {
            $arrResponse = array('status' => false, 'msg' => 'Error, fallo en registro');
        }
        }
    }
    echo json_encode($arrResponse);
}
