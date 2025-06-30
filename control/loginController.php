<?php
require_once("../model/usuarioModel.php");
header('Content-Type: application/json');

$usuarioModel = new UsuarioModel();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (trim($username) === "" || trim($password) === "") {
    echo json_encode(['status' => false, 'msg' => 'Campos vacíos']);
    exit;
}

$resultado = $usuarioModel->login($username, $password);

if ($resultado) {
    session_start();
    $_SESSION['usuario'] = $resultado['username'];
    echo json_encode(['status' => true, 'msg' => 'Inicio de sesión exitoso']);
} else {
    echo json_encode(['status' => false, 'msg' => 'Credenciales incorrectas']);
}
?>