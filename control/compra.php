<?php
require_once('../model/compraModel.php');
require_once('../model/productoModel.php');
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];
$objCompra = new compraModel();
$objPersona = new personaModel();
if ($tipo=="registrar") {

    
}