<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>view/bootstrap/css/bootstrap.min.css">
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
    <style>
        body {
            background-color: #e0f7fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        #menu {
            background-color: #dc3545;
        }

        #navbarSupportedContent {
            background-color: #c8e6c9;
        }

        .nav-link {
            color: #212529;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #0d6efd;
        }

        .navbar-brand img {
            border: 2px solid #212529;
            border-radius: 10px;
        }

        .card-header {
            background-color: #b0bec5;
            color: #212529;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .form-control {
            border: 1px solid #212529;
            border-radius: 5px;
        }

        .btn {
            min-width: 100px;
            font-weight: 500;
        }

        .dropdown-menu {
            background-color: #f1f1f1;
        }

        .dropdown-item:hover {
            background-color: #dcdcdc;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid" id="menu">
            <a class="navbar-brand" href="#">
                <img src="view/img/logo-lobo.jpg" alt="Logo" width="80" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Menú de navegación">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>home">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>new-user">Usuarios</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>products">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Categorías</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Clientes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Compras</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Ventas</a></li>
                </ul>

                <form class="d-flex" role="search">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Perfil
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Ver perfil</a></li>
                                <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid my-4">
        <div class="card mx-auto shadow" style="max-width: 700px;">
            <h5 class="card-header text-center">INGRESA LOS DATOS DE COMPRA</h5>
            <form id="frm_shops" action="" method="">
                <div class="card-body">

                    <div class="mb-3 row">
                        <label for="id_producto" class="col-sm-4 col-form-label"><strong>ID Producto:</strong></label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="id_producto" name="id_producto" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="cantidad" class="col-sm-4 col-form-label"><strong>Cantidad:</strong></label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="cantidad" name="cantidad" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="precio" class="col-sm-4 col-form-label"><strong>Precio:</strong></label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="precio" name="precio" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="id_trabajador" class="col-sm-4 col-form-label"><strong>ID Trabajador:</strong></label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="id_trabajador" name="id_trabajador" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="offset-sm-4 col-sm-8">
                            <button type="submit" class="btn btn-primary me-2">Registrar</button>
                            <button type="reset" class="btn btn-warning me-2">Limpiar</button>
                            <button type="button" class="btn btn-danger">Cancelar</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <script src="<?php echo BASE_URL; ?>view/funtion/shops.js"></script>
    <script src="<?php echo BASE_URL; ?>view/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
