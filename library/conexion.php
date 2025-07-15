<?php
require_once "../config/config.php";  //Importa el archivo de  que contiene las constantes necesarias para la conexión

class Conexion{ //grupa métodos relacionados a la conexión de base de datos

    public static function connect(){ /*Define un método estático connect() que:
Crea la conexión Define la codificación Establece la zona horaria Verifica si hubo un error de conexión Y devuelve el objeto de conexión*/

        $mysql = new mysqli(BD_HOST,BD_USER ,BD_PASSWORD,BD_NAME); /*Crea un objeto de conexión mysqli con los datos del archivo config.php.*/
        $mysql ->set_charset(BD_CHARSET);//Establece la codificación de caracteres (ej. UTF-8) para evitar errores con tildes, ñ,---se llama operador -> para acceder a propiedades o métodos de un objeto
        date_default_timezone_set("America/Lima");//Establece la zona horaria de la aplicación para que todas las fechas/hora estén en horario de Perú.
        if(mysqli_connect_errno()){ //Verifica si ocurrió un error de conexión. En caso de error, imprime el número del error con un mensaje.
            echo "Error de coenxion:" .mysqli_connect_errno();
        }
        return $mysql; //Devuelve el objeto de conexión mysqli para ser usado en el resto de tu aplicación (CRUD, consultas, etc.).


    }
}

 /* crea la conexion BD, evitar errores con tildes, ñ, Establece la zona horaria Verifica si hubo un error de conexión Y devuelve el objeto de conexión*/






































 /*$mysql = new mysqli(BD_HOST,BD_USER ,BD_PASSWORD,BD_NAME);
        $mysql ->set_charset(BD_CHARSET);
        date_default_timezone_set("America/Lima");
        if(mysqli_connect_errno()){
            echo "Error de coenxion:" .mysqli_connect_errno();
        }else {
            echo"conexion exitosa";
        }
*/

