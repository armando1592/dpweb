<?php
class viewModel
{
    protected static function get_view($view)
    {
        $white_list = ["home", "products", "users", "new-user","edit-user", "products", "new-product", "edit-product", "category", "new-category", "edit-category", "orders", "order-details", "profile", "settings", "clients", "proveedor", "new-cliente", "new-proveedor","edit-clients","edit-proveedor","edit-product","product.js","vendedor"];
        if (in_array($view, $white_list)) {
            if (is_file("./view/" . $view . ".php")) {
                $content = "./view/" . $view . ".php";
            } else {
                $content = "404";
            }
            // PARA QUE LA VISTA SEA PARA EL CLIENTE Y NO PARA EL ADMINISTRADOR 
            } elseif ($view == "vista-cliente") {
            $content = "vista-cliente";
        } elseif ($view == "login") {
            $content = "login";
        } else {
            $content = "404";
        }
        return $content;
    }
}