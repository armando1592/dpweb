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
        //validacion Si ya existe un usuario con ese DNI, se devuelve un error y se corta el proceso.
        $existePersona = $objPersona->existePersona($nro_identidad);
       if ($existePersona>0) {
        $arrResponse = array('status' => false, 'msg' => 'Error, nro documento ya existe');
        //Si el DNI no existe, se llama al método registrar() del modelo. para registrar al usuario
       }else {
        $respuesta = $objPersona->registrar($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password);
        if ($respuesta) {
            $arrResponse = array('status' => true, 'msg' => 'Resgistrado Correctamente');
        } else {
            $arrResponse = array('status' => false, 'msg' => 'Error, fallo en registro');
        }//Devuelve un mensaje de éxito si todo sale bien, o error si falla.
        }
    }
    //Devuelve la respuesta al navegador o a la aplicación cliente en formato JSON.
    echo json_encode($arrResponse);
}
//se capturan datos, se encripta el número de identidad para el password, los campos no tiene que estar vacios, validamos si existe con el mismo dni, registrar si no existe, muestra exito al registarse y error si hay campos vacios





// INICIAR SESION
if ($tipo == "iniciar_sesion") { //Verifica si la variable $tipo (probablemente enviada por $_POST o definida antes) es igual a "iniciar_sesion". Si es así, procede a ejecutar el login.
    $nro_identidad = $_POST['username']; 
    $password = $_POST['password'];//Recoge el nombre de usuario y la contraseña enviados por el formulario (o petición AJAX).
    if ($nro_identidad== "" || $password== "") {
        $respuesta = array('status' => false, 'msg' => 'ERROR: campos vacios'); //Verifica que ambos campos estén llenos. Si alguno está vacío, devuelve un error.
    }else {
        $existePersona= $objPersona->existePersona($nro_identidad); //Usa el método existePersona del objeto $objPersona para comprobar si existe una persona con ese número de identidad.
        if (!$existePersona) {
            $respuesta = array('status' => false, 'msg' => 'ERROR: usuario no registrado'); //Si no existe, retorna un mensaje de error.
        }else {
            $persona = $objPersona->buscarPersonaPorNroIdentidad($nro_identidad); //Si sí existe, busca los datos completos del usuario con ese número de identidad.
            if (password_verify($password, $persona->password)) {
                session_start(); //Compara la contraseña ingresada ($password) con la contraseña en la base de datos ($persona->password) que está encriptada con password_hash
                $_SESION ['ventas_id'] = $persona->id;
                $_SESION ['ventas_usuario'] = $persona->razon_social; //  Si la contraseña es correcta, inicia sesión con session_start() y guarda los datos del usuario en $_SESSION.
                $respuesta = array('status' => true, 'msg' => 'ingresado'); //Retorna una respuesta de éxito.
            }else {
               $respuesta = array('status' => false, 'msg' => 'Error, contraseña incorrecta'); //Si la contraseña no coincide, da un error.
            }
        }
    }
    echo json_encode($respuesta); // Finalmente, devuelve la respuesta como JSON para que el cliente (JavaScript o frontend) pueda mostrar el mensaje.
}

/*Registra nuevos usuarios con validación y encriptación.
Inicia sesión comparando contraseñas seguras.
Usa JSON para comunicarse con el frontend (JavaScript).
Guarda sesión para mantener al usuario autenticado
 */






