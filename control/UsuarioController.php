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
if ($tipo == "registrar")
{ 
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
        //validacion si existe persona con el mismo dni
        $existePersona = $objPersona->existePersona($nro_identidad);
       if ($existePersona>0) {
        $arrResponse = array('status' => false, 'msg' => 'Error, nro documento ya existe');
        //Si el DNI no existe, se llama al método registrar() del modelo.
       }else {
        $respuesta = $objPersona->registrar($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password);
        if ($respuesta) {
            $arrResponse = array('status' => true, 'msg' => 'Resgistrado Correctamente');
        } else {
            $arrResponse = array('status' => false, 'msg' => 'Error, fallo en registro');
        }
        }
    }
    //Devuelve la respuesta al navegador o a la aplicación cliente en formato JSON.
    echo json_encode($arrResponse);
}


<?php
// INICIAR SESION
if ($tipo == "iniciar_sesion") {
    $nro_identidad = $_POST['username'];
    $password = $_POST['password'];
    if ($nro_identidad== "" || $password== "") {
        $respuesta = array('status' => false, 'msg' => 'ERROR: campos vacios');
    }else {
        $existePersona= $objPersona->existePersona($nro_identidad);
        if (!$existePersona) {
            $respuesta = array('status' => false, 'msg' => 'ERROR: usuario no registrado');
        }else {
            $persona = $objPersona->buscarPersonaPorNroIdentidad($nro_identidad);
            if (password_verify($password, $persona->password)) {
                session_start();
                $_SESION ['ventas_id'] = $persona->id;
                $_SESION ['ventas_usuario'] = $persona->razon_social;
                $respuesta = array('status' => true, 'msg' => 'ingresado');
            }else {
               $respuesta = array('status' => false, 'msg' => 'Error, contraseña incorrecta');
            }
        }
    }
    echo json_encode($respuesta);
}
?>