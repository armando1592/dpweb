<?php
require_once('../model/compraModel.php');
require_once('../model/productoModel.php');
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];
$objCompra = new compraModel();
$objPersona = new personaModel();
if ($tipo=="registrar") {
 //print_r($_POST);
    //echo $_FILES['imagen']['name'];
    
     if($_POST);
   
    $id_producto= $_POST['id_producto'];
    $cantidad= $_POST['cantidad'];
    $precio= $_POST['precio'];
    $id_trabajador= $_POST['id_trabajador'];
   
    if ( $id_producto=="" || $cantidad==""|| $precio==""|| $id_trabajador=="" ) {
        $arr_Respuesta = array('status'=> false, 'mensaje'=>'error campos vacios');
    }else {
        $arrCompra = $objCompra->registrarCompra($id_producto, $cantidad, $precio, $id_trabajador);
        if ($arrCompra->id>0) {
            $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            //cargar archivos
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje'=>'error al SUBIR producto');
        }
        echo json_encode($arr_Respuesta);
    } 

}