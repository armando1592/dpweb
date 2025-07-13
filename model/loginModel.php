<?php
/*require_once("../library/conexion.php");

class UsuarioModel {
    private $conexion;

    public function __construct() {
        $this->conexion = (new Conexion())->connect();
    }

    public function login($username, $password) {
        $query = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
        $sql = $this->conexion->query($query);
        return $sql && $sql->num_rows > 0 ? $sql->fetch_assoc() : false;
    }
}
*/