<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE VENTA</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>view/bootstrap/css/bootstrap.min.css">
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
    <?php
    if (isset($_GET["views"])) {
        $ruta = explode("/", $_GET["views"]);
        //echo $ruta[1];
    }
    ?>
</head>




<body  style="background-image:url(https://img.freepik.com/fotos-premium/sistema-punto-venta-o-caja-registradora-escritorio_493806-18395.jpg?semt=ais_incoming&w=740&q=80);">
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background-color: #273eceff; font-weight: bold; font-size: 1.1rem;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-size: 1.7rem;">🛒</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">🏠Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>users">👤Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>products">📦Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>category">🗂️Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>clients">👥Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">🏬Shops</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">💰Sales</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>proveedor">🚚proveedor</a>
                    </li>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>vista-cliente">👀vista-cliente</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <ul class="navbar-nav px-4">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               ⬇️ Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">🧍‍♂️Perfil</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">🔓Logout</a></li>
                            </ul>
                        </li>
                        <li>

                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>