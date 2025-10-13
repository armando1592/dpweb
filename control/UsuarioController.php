<?php
/* 
   require_once-incluye archivos
   Model-contiene la lógica para interactuar con la base de datos.
    Se crea un objeto $objPersona que usará los métodos definidos en UsuarioModel
 */
require_once("../model/UsuarioModel.php");
$objPersona = new UsuarioModel();




//Toma el valor del parámetro tipo enviado por GET en la URL.

$tipo = $_GET['tipo'];
if ($tipo == "registrar") {
    //Se capturan los datos enviados por el formulario HTML mediante el método POST
    $nro_identidad = $_POST['nro_identidad'];
    $razon_social = $_POST['razon_social'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $departamento = $_POST['departamento'];
    $provincia = $_POST['provincia'];
    $distrito = $_POST['distrito'];
    $cod_postal = $_POST['cod_postal'];
    $direccion = $_POST['direccion'];
    $rol = $_POST['rol'];
    //Se encripta el número de identidad (nro_identidad) usando password_hash para usarlo como contraseña.
    $password = password_hash($nro_identidad, PASSWORD_DEFAULT);
    //Si algún campo está vacío, no se realiza el registro y se envía un mensaje de error.
    if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" || $direccion == "" || $rol == "") {
        $arrResponse = array('status' => false, 'msg' => 'Error, campos  vacios');
    } else {
        //validacion Si ya existe un usuario con ese DNI, se devuelve un error y se corta el proceso.
        $existePersona = $objPersona->existePersona($nro_identidad);
        if ($existePersona > 0) {
            $arrResponse = array('status' => false, 'msg' => 'Error, nro documento ya existe');
            //Si el DNI no existe, se llama al método registrar() del modelo. para registrar al usuario
        } else {
            $respuesta = $objPersona->registrar($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password);
            if ($respuesta) {
                $arrResponse = array('status' => true, 'msg' => 'Resgistrado Correctamente');
            } else {
                $arrResponse = array('status' => false, 'msg' => 'Error, fallo en registro');
            } //Devuelve un mensaje de éxito si todo sale bien, o error si falla.
        }
    }
    //Devuelve la respuesta al navegador o a la aplicación cliente en formato JSON.
    echo json_encode($arrResponse);
}
//se capturan datos, se encripta el número de identidad para el password, los campos no tiene que estar vacios, validamos si existe con el mismo dni, registrar si no existe, muestra exito al registarse y error si hay campos vacios





// INICIAR SESION
if ($tipo == "iniciar_sesion") { //Verifica si la variable $tipo (probablemente enviada por $_POST o definida antes) es igual a "iniciar_sesion". Si es así, procede a ejecutar el login.
    $nro_identidad = $_POST['username'];
    $password = $_POST['password']; //Recoge el nombre de usuario y la contraseña enviados por el formulario (o petición AJAX).
    if ($nro_identidad == "" || $password == "") {
        $respuesta = array('status' => false, 'msg' => 'ERROR: campos vacios'); //Verifica que ambos campos estén llenos. Si alguno está vacío, devuelve un error.
    } else {
        $existePersona = $objPersona->existePersona($nro_identidad); //Usa el método existePersona del objeto $objPersona para comprobar si existe una persona con ese número de identidad.
        if (!$existePersona) {
            $respuesta = array('status' => false, 'msg' => 'ERROR: usuario no registrado'); //Si no existe, retorna un mensaje de error.
        } else {
            $persona = $objPersona->buscarPersonaPorNroIdentidad($nro_identidad); //Si sí existe, busca los datos completos del usuario con ese número de identidad.
            if (password_verify($password, $persona->password)) {
                session_start(); //Compara la contraseña ingresada ($password) con la contraseña en la base de datos ($persona->password) que está encriptada con password_hash
                $_SESSION['ventas_id'] = $persona->id;
                $_SESSION['ventas_usuario'] = $persona->razon_social; //  Si la contraseña es correcta, inicia sesión con session_start() y guarda los datos del usuario en $_SESSION.
                $respuesta = array('status' => true, 'msg' => 'ingresado'); //Retorna una respuesta de éxito.
            } else {
                $respuesta = array('status' => false, 'msg' => 'Error, contraseña incorrecta'); //Si la contraseña no coincide, da un error.
            }
        }
    }
    echo json_encode($respuesta); // Finalmente, devuelve la respuesta como JSON para que el cliente (JavaScript o frontend) pueda mostrar el mensaje.
}

/* para cerrar sesion */
$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : '';
if ($tipo == 'cerrar_sesion') {
    session_start();
    session_destroy();
    echo json_encode(['status' => true, 'msg' => 'Sesión cerrada correctamente']);
    exit;
}
/*Registra nuevos usuarios con validación y encriptación.
Inicia sesión comparando contraseñas seguras.
Usa JSON para comunicarse con el frontend (JavaScript).
Guarda sesión para mantener al usuario autenticado
 */



/*Ver usuarios :)*/
if ($tipo == "ver_usuarios") {
    $usuarios = $objPersona->verUsuarios();
    echo json_encode($usuarios);
}
if ($tipo == "ver") {
    // print_r($_POST);
    $respuesta = array('status' => false, 'msg' => '');
    $id_persona = $_POST['id_persona'];
    $usuario = $objPersona->ver($id_persona);
    if ($usuario) {
        $respuesta['status'] = true;
        $respuesta['data'] = $usuario;
    } else {
        $respuesta['msg'] = 'Error, usuario no existe';
    }
    echo json_encode($respuesta);
}
if ($tipo == "actualizar") {
    //   print_r($_POST);
    $id_persona = $_POST['id_persona'];
    $nro_identidad = $_POST['nro_identidad'];
    $razon_social = $_POST['razon_social'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $departamento = $_POST['departamento'];
    $provincia = $_POST['provincia'];
    $distrito = $_POST['distrito'];
    $cod_postal = $_POST['cod_postal'];
    $direccion = $_POST['direccion'];
    $rol = $_POST['rol'];
    if ($id_persona == "" || $nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" || $direccion == "" || $rol == "") {
        $arrResponse = array('status' => false, 'msg' => 'Error, campos  vacios');
    } else {
        $existeID = $objPersona->ver($id_persona);
        if (!$existeID) {
            $arrResponse = array('status' => false, 'msg' => 'Error, usuario no existe en BD');
            echo json_encode($arrResponse);
            exit;
        } else {
            $actualizar = $objPersona->actualizar($id_persona, $nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol);
            if ($actualizar) {
                $arrResponse = array('status' => true, 'msg' => "Actualizado correctamente");
            }
            $arrResponse = array('status' => false, 'msg' => $actualizar);
            echo json_encode($arrResponse);
            exit;
        }
    }

    // eliminar
    if ($tipo == "eliminar") {
        $id_persona = isset($_POST['id']) ? $_POST['id'] : '';

        if ($id_persona == "") {
            $arrResponse = array('status' => false, 'msg' => 'Error, ID vacío');
        } else {
            $existeId = $objPersona->ver($id_persona);
            if (!$existeId) {
                $arrResponse = array('status' => false, 'msg' => 'Error, usuario no existe en Base de Datos!!');
            } else {
                $eliminar = $objPersona->eliminar($id_persona);
                if ($eliminar) {
                    $arrResponse = array('status' => true, 'msg' => "Eliminado correctamente");
                } else {
                    $arrResponse = array('status' => false, 'msg' => 'Error al eliminar');
                }
            }
        }
        echo json_encode($arrResponse);
        exit;
    }
}

if ($tipo == "ver_proveedores") {
    $respuesta = array('status' => false, 'msg' => 'fallo el controlador');
    $usuarios = $objPersona->verProveedores();
    if (count($usuarios)) {
        $respuesta = array('status' => true, 'msg' => '', 'data' => $usuarios);
    }
    echo json_encode($respuesta);
}

if ($tipo == "ver_clients") {
    $respuesta = array('status' => false, 'msg' => 'fallo el controlador');
    $usuarios = $objPersona->verClientes();
    if (count($usuarios)) {
        $respuesta = array('status' => true, 'msg' => '', 'data' => $usuarios);
    }
    echo json_encode($respuesta);

}
































// if ($tipo == 'ver_persona') {
//     $id_persona = $_POST['idPersona'];
//     $arr_Respuesta = $objPersona->verPersona($id_persona);
//     if (empty($arr_Respuesta)){
//         $response = array('status' => false, 'mensaje' => 'Usuario no encontrado');
//     }else{
//         $response = array('status' => true, 'mesaje' => 'Usuario encontrado', 'datos' => $arr_Respuesta);
//     }
//     echo json_encode($response);
// }


























// if ($tipo == "editar") {
//     if ($_POST) {
//      $nro_identidad = $_POST['nro_identidad'];
//     $razon_social = $_POST['razon_social'];
//     $telefono = $_POST['telefono'];
//     $correo = $_POST['correo'];
//     $departamento = $_POST['departamento'];
//     $provincia = $_POST['provincia'];
//     $distrito = $_POST['distrito'];
//     $cod_postal = $_POST['cod_postal'];
//     $direccion = $_POST['direccion'];
//    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
//     $rol = $_POST['rol'];  

//         if($nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" || $direccion == "" || $rol == "") {
//             $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: campos vacíos');
//         } else {
//             $arrPersona = $objPersona->editarPersona($id, $codigo, $nombre, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol,$password, $estado);
//             if ($arrPersona->p_id > 0) {
//                 $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualización exitosa');
//             } else {
//                 $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar la persona');
//             }
//             echo json_encode($arr_Respuesta);
//         }
//     }
// }


// if ($tipo == 'eliminar') {
//     $id_persona = $_POST['id'];
//     if($objPersona->hayPersonasAsociadas($id_persona)){
//         $arr_Respuesta = array('status' => false,'mensaje' => 'No se puede eliminar la persona, posee compras o productos asociados.');
//     }else{
//         $resultado = $objPersona->eliminarPersona($id_persona);
//         if ($resultado) {
//             $arr_Respuesta = array('status' => true,'mensaje' => 'Persona eliminada correctamente');
//         } else {
//             $arr_Respuesta = array('status' => false,'mensaje' => 'Error al eliminar la persona');
//         }
//     }
//     echo json_encode($arr_Respuesta);
// }
