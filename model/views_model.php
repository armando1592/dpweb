<?php
class viewModel{//Define una clase llamada viewModel, usada para manejar la lógica de qué vista cargar en función de un nombre que recibe como parámetro.
    protected static function get_view($view){ //Es una función estática (no necesita crear un objeto para usarla). Es protegida (protected) porque se espera que solo se use internamente o por clases hijas. Recibe un parámetro $view, que será el nombre de la vista que se desea cargar (ejemplo: "users", "login", etc.).
        $white_list = ["home", "products", "users", "new-user", "edit-user", "categoria", "principal", "compra" , "sesion","new-categoria","categorias-edit","categorias-lista","new-producto",
        "productos-edit","productos-lista","clients","new-client","edit-client","proveedor","new-proveedor","edit-proveedor","vista-cliente"];//se define una lista con los nombres permitidos de vistas.
        if (in_array($view, $white_list)) {//Comprueba si el valor de $view está dentro de la lista blanca.
            if (is_file("./view/".$view.".php")) {//Si el archivo existe en la carpeta ./view/, entonces asigna su ruta al contenido a mostrar. Si no existe, asigna "404" para indicar que no se encontró la vista.
                $content = "./view/".$view.".php";
            }else{
                $content = "404";
            }
        }elseif($view == "login"){ //Si la vista solicitada es "login", se permite cargarla aunque no esté en la lista blanca. Excepción para login
            $content = "login";
        }else{
            $content = "404";
        }
        return $content;//Devuelve el contenido calculado: la ruta de la vista (por ejemplo: "./view/home.php") o el texto "404" o "login".
    }
}

    //importamos archivos o rutas de view para que se muestre en la vista y validamos, si existen en la carpeta VIEW
 
    
