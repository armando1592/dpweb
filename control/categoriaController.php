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

if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrCategorias = $objCategoria->obtenerCategorias();

    if (!empty($arrCategorias)) {
        for ($i = 0; $i < count($arrCategorias); $i++) {
            $id_categoria = $arrCategorias[$i]->id;
            $nombre_categoria = $arrCategorias[$i]->nombre;
            $detalle = $arrCategorias[$i]->detalle;
            $opciones = '<a class="btn btn-warning btn-sm m-2" href="' . BD_URL . '?admin=categorias-editar&id_c=' . $id_categoria . '"">
                        <i class="fas fa-edit"></i> Editar
                        </a>
                        <button class="btn btn-danger btn-sm m-2" onclick="eliminar_categoria(' . $id_categoria . ');">
                        <i class="fas fa-trash-alt"></i> Eliminar
                        </button>';
            $arrCategorias[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arrCategorias;
    }
    echo json_encode($arr_Respuesta);
}

if ($tipo == "ver_categoria") {
    $id_categoria = $_POST['idCategoria'];
    $arr_Respuesta = $objCategoria->verCategoria($id_categoria);
    if (empty($arr_Respuesta)) {
        $response = array('status' => false, 'mensaje' => 'No se encontro la categoria');
    } else {
        $response = array('status' => true, 'mensaje' => 'Categoría encontrada', 'datos' => $arr_Respuesta);
    }
    echo json_encode($response);
}

if ($tipo == "editar") {
    // print_r($_POST);
    if ($_POST) {
        $id = $_POST['id_categoria'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        if ($id == "" || $nombre == "" || $detalle == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error campos vacios');
        } else {
            $arrCategoria = $objCategoria->editarCategoria($id, $nombre, $detalle);
            if ($arrCategoria->p_id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualización exitosa');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar categoria');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}
if ($tipo == "eliminar") {
    $id_categoria = $_POST['id'];
    if ($objCategoria->hayProductosAsociados($id_categoria)) {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'No se puede eliminar la categoría, tiene productos asociados');
    } else {
        $resultado = $objCategoria->eliminarCategoria($id_categoria);
        if ($resultado) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Categoría eliminada exitosamente');
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al eliminar la categoría');
        }
    }
    echo json_encode($arr_Respuesta);
}
