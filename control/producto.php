<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');
$tipo = $_REQUEST ['tipo'];
# instacncion ña clase model producto
$objProducto = new productoModel();
$objCategoria = new categoriaModel();
$objPersona = new personaModel();

if ($tipo=="listar") {
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Productos = $objProducto-> obtener_productos();
    if (!empty($arr_Productos)) {// recorremos el array pra agregar la opciones de las categorias
        for ($i=0; $i <count($arr_Productos) ; $i++) {

            $id_producto = $arr_Productos[$i]->id; 
            $codigo = $arr_Productos[$i]->codigo;
            $nombre = $arr_Productos[$i]->nombre;
            $precio = $arr_Productos[$i]->precio;
            $stock = $arr_Productos[$i]->stock;
            $id_categoria = $arr_Productos[$i]->id_categoria;
            $r_categoria = $objCategoria->obtener_categoria($id_categoria);
            $arr_Productos[$i]->categoria=$r_categoria;
            $id_proveedor = $arr_Productos[$i]->id_proveedor;
            $r_proveedor = $objPersona->verPersona($id_proveedor);
            $arr_Productos[$i]->proveedor = $r_proveedor;
            //localhost /editarproducto/4
            $opciones='
            <a href="'.BASE_URL.'editar-producto/'.$id_producto.'" class="btn btn-warnig"> editar </a>
            <button onclick="eliminar_producto('.$id_producto.');"> eliminar </button>
            ';
            $arr_Productos[$i]->options= $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_Productos;
    }
    echo json_encode($arr_Respuesta);
}