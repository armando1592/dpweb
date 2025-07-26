<?php
require_once "./config/config.php";
require_once "./control/views_control.php";

$view = new viewsControl();
$mostrar = $view->getViewControl();

if ($mostrar == "login" || $mostrar == "404" || $mostrar == "home" ) {
   require_once "./view/".$mostrar.".php";
}else{
    include "./view/include/header.php";  //cargamos el header de new-user
    include $mostrar;
    include "./view/include/footer.php"; //cargamos el footer
}
