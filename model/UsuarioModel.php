<?php
require_once("../library/conexion.php"); //Importa la clase Conexion para poder conectarse a la base de datos MySQL.

class UsuarioModel
{
    private $conexion;//Variable que almacenará la conexión activa a la base de datos. Es privada, por lo tanto, solo puede usarse dentro de esta clase.
    function __construct()
    {
        $this->conexion = new Conexion(); // Crea instancia de la clase Conexion
   
        $this->conexion = $this->conexion->connect(); 
}
    }
    public function registrar($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password) 
    {
        $consulta = "INSERT INTO persona (nro_identidad, razon_social, telefono, correo, departamento, provincia, distrito, cod_postal, direccion, rol, password) VALUES ('$nro_identidad', '$razon_social', '$telefono', '$correo', '$departamento', '$provincia', '$distrito', '$cod_postal', '$direccion', '$rol', '$password')";
        $sql = $this->conexion->query($consulta);
        if ($sql) {
            $sql = $this->conexion->insert_id;
        } else {
            $sql = 0;
        }
        return $sql;
    }
    public function existePersona($nro_identidad)
    {
        $consulta = "SELECT* FROM persona Where nro_identidad = '$nro_identidad'";
        $sql = $this->conexion->query($consulta);
        return $sql->num_rows;
    }

    public function buscarPersonaPorNroIdentidad($nro_identidad)
    {
        $consulta = "SELECT id, razon_social, password from persona where nro_identidad = '$nro_identidad' limit 1;";
        $sql = $this->conexion->query($consulta);
        return $sql->fetch_object();
    }
}
