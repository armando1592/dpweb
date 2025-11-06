 <?php
require_once("../model/CompraModel.php");

$objCompra = new compraModel();

$tipo = $_GET['tipo'];

if ($tipo == "registrar") 
    
    $id_producto =  $_POST['id_producto'];
    $cantidad =  $_POST['cantidad'];
    $precio =  $_POST['precio'];
    $id_trabajador =  $_POST['id_trabajador'];


    /* validar que los campos no esten vacios
    if ($id_producto == "" || $cantidad == "" || $precio == "" || $id_trabajador == "") {

        $arrResponse = array('status' => false, 'msg' => 'Error, campos vacios');
    } else {
        $existeCompra = $objCompra->existeCompra($id_producto);
        if ($existeCompra > 0) {
            $arrResponse = array('status' => false, 'msg' => 'Error: id_producto ya existe');
        } else {
            $respuesta = $objCompra->registrar($id_producto, $cantidad, $precio, $id_trabajador);
            if ($respuesta) {
                $arrResponse = array('status' => true, 'msg' => 'REGISTRADO CORRECTAMENTE');
            } else {
                $arrResponse = array('status' => false, 'msg' => 'ERROR: FALLO AL REGISTAR');
            }
        }
    }
    echo json_encode($arrResponse);
} 
