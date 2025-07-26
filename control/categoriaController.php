<?php
require_once("../model/categoriaModel.php");

header('Content-Type: application/json'); // Asegura que devuelva JSON

$objcategoria = new categoriaModel();

$tipo = $_GET['tipo'] ?? '';

if ($tipo == "registrar") {
    $nombre = $_POST['nombre'] ?? '';
    $detalle = $_POST['detalle'] ?? '';

    if (trim($nombre) == "" || trim($detalle) == "") {
        echo json_encode(['status' => false, 'msg' => 'Error, campos vacíos']);
        exit;
    }

    $existe = $objcategoria->existeCategoria($nombre);
    if ($existe > 0) {
        echo json_encode(['status' => false, 'msg' => 'Error, nombre de categoría ya existe']);
        exit;
    }

    $respuesta = $objcategoria->registrar($nombre, $detalle);
    if ($respuesta > 0) {
        echo json_encode(['status' => true, 'msg' => 'Se registró correctamente']);
    } else {
        echo json_encode(['status' => false, 'msg' => 'Error al registrar categoría']);
    }
    echo json_encode($arrResponse);
}
