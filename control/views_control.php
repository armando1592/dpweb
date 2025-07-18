 <?php
    /*Importa el archivo views_model.php, que contiene la clase viewModel. */

    require_once "./model/views_model.php";
    //Se define una clase llamada viewsControl, que hereda de viewModel. Esto significa que viewsControl puede usar los métodos y propiedades definidos en viewModel
    class viewsControl extends viewModel
    {
        public function getPlantillaControl()
        {
            return require_once "./view/plantilla.php"; //Esta función incluye e imprime el archivo
        }


        public function getViewControl()
        {
            session_start(); // 1. Inicia la sesión PHP (o la continúa si ya existe)
            if (isset($_SESSION['ventas_id'])) {    /// 2. Verifica si hay un usuario logueado (sesión activa)
                if (isset($_GET["views"])) {  //Verifica si en la URL viene un parámetro GET llamado "views"
                    $ruta = explode("/", $_GET["views"]); //Separa la cadena de "views" por el carácter "/" en un array llamado $ruta
                    $response = viewModel::get_view($ruta[0]); //

                } else {
                    $response = "index.php"; //Si no se especifica "views", carga por defecto "index.php"
                }
            }
            else {
                $response = "login"; // Si no hay sesión, redirecciona a la vista de login
            }
            return $response; //Devuelve el valor final (la ruta de la vista a cargar)
        }
    }















    