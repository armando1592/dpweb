<?php
require_once("../library/conexion.php"); // imorta el archivo Siempre que incluyas archivos con clases, funciones o configuraciones que no deben duplicarse.

class categoriaModel  //Declara la clase categoriaModel.Esta clase se encargará de operaciones sobre la tabla categoria.
{
    private $conexion; //e usará para guardar la conexión activa con la base de datos.

    function __construct() //Se ejecuta automáticamente cuando creas un nuevo objeto categoriaModel.
    {
        $this->conexion = new Conexion(); //Crea un nuevo objeto de la clase Conexion.Esa clase seguramente está en el archivo conexion.php.
        $this->conexion = $this->conexion->connect();//Llama al método connect() del objeto Conexion.Esto devuelve la conexión activa con la base de datos (probablemente un objeto mysqli).
    }

    public function registrar($nombre, $detalle){ //Toma dos datos: nombre y detalle de una categoría, para insertarlos en la base de datos.
        $consulta = "INSERT INTO categoria (nombre, detalle) VALUES ('$nombre', '$detalle')"; // Arma un INSERT SQL directamente con los valores recibidos.
        $sql = $this->conexion->query($consulta); //Si funciona, $sql será true. Si falla, será false
        return $sql ? $this->conexion->insert_id : 0; //Devuelve el ID del nuevo registro si se insertó bien.Si falló, devuelve 0
    }

    public function existeCategoria($nombre){ //Verifica si ya existe una categoría con ese nombre.
        $consulta = "SELECT * FROM categoria WHERE nombre = '$nombre'";//Consulta para buscar registros con ese nombre.
        $sql = $this->conexion->query($consulta); //Devuelve un objeto de resultado (mysqli_result) si funciona.


        return $sql ? $sql->num_rows : 0; //Devuelve el número de filas encontradas.Si encuentra alguna, devuelve ese número (> 0).Si no encuentra nada, o falla, devuelve 0.
    }
}
?>


