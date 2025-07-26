<?php

 ($tipo == "iniciar_sesion") {
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
