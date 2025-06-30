 <?php
    /*Importa el archivo views_model.php, que contiene la clase viewModel. */

    require_once "./model/views_model.php";
    //Se define una clase llamada viewsControl, que hereda de viewModel. Esto significa que viewsControl puede usar los métodos y propiedades definidos en viewModel
    class viewsControl extends viewModel
    {
        public function getPlantillaControl()
        {
            return require_once "./view/plantilla.php";//Esta función incluye e imprime el archivo
        }
        public function getViewControl()
        {
            if (isset($_GET["views"])) {
                $ruta = explode("/", $_GET["views"]);
                $response = viewModel::get_view($ruta[0]);
            } else {
                $response = "index.php";
            }
            return $response;
        }
    }
