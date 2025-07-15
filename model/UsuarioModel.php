<?php
require_once("../library/conexion.php"); //Importa la clase Conexion para poder conectarse a la base de datos MySQL.

class UsuarioModel
{
    private $conexion;//Variable que almacenará la conexión activa a la base de datos. Es privada, por lo tanto, solo puede usarse dentro de esta clase.
    function __construct()
    {
        $this->conexion = new Conexion(); // Crea un objeto de la clase Conexion.
        $this->conexion = $this->conexion->connect(); //Llama al método connect() de esa clase para obtener una conexión MySQL activa y lo guarda en $this->conexion.
    }
    public function registrar($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password) //Inserta un nuevo registro en la tabla persona.  Usa los parámetros recibidos (DNI, nombre, dirección, etc.).
    {
        $consulta = "INSERT INTO persona (nro_identidad, razon_social, telefono, correo, departamento, provincia, distrito, cod_postal, direccion, rol, password) VALUES ('$nro_identidad', '$razon_social', '$telefono', '$correo', '$departamento', '$provincia', '$distrito', '$cod_postal', '$direccion', '$rol', '$password')";
        $sql = $this->conexion->query($consulta);//Ejecuta la consulta en la base de datos mediante la conexión activa.El resultado se guarda en $sql.
        if ($sql) {  //Devuelve el ID del nuevo registro insertado (usando insert_id).Si falló, devuelve 0.
            $sql = $this->conexion->insert_id;
        } else {
            $sql = 0;
        }
        return $sql; //Devuelve el resultado del registro: el ID si tuvo éxito, o 0 si falló.
    }
    public function existePersona($nro_identidad) //Verifica si un número de identidad ya existe en la tabla persona.
    {
        $consulta = "SELECT* FROM persona Where nro_identidad = '$nro_identidad'";//hace una consulta que el dni sea igual al recibido
        $sql = $this->conexion->query($consulta);// Ejecuta la consulta.
        return $sql->num_rows; //Si existe, devuelve 1 (o más). Si no existe, devuelve 0.
    }

    public function buscarPersonaPorNroIdentidad($nro_identidad) //Busca a una persona por su número de identidad. //Devuelve solo los campos id, razon_social y password.
    {
        $consulta = "SELECT id, razon_social, password from persona where nro_identidad = '$nro_identidad' limit 1;"; //Arma una consulta que selecciona solo los campos necesarios
        $sql = $this->conexion->query($consulta);// Ejecuta la consulta.
        return $sql->fetch_object(); //Devuelve el resultado como un objeto PHP con las propiedades
    }
}   

// realizamos la conexion con la base de datos, insertamos registros en la tabla persona para hacer la consulta y validaciones. verificamos si ya existe un dni. buscamos una persona por su dni