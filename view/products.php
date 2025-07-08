<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> productos </title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>view/bootstrap/css/bootstrap.min.css">
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
</head>

<body>
    <style>
        /*
        body {
            background-color: skyblue;
        }*/

        .nav-link {
            color: black;
        }

        .home {
            color: red;
        }

        .collapse {
            background-color: whitesmoke;
        }

        img {
            border: 1px solid black;
        }

        .card-header {
            background-color: silver;
            color: black;
        }

        .form-control {
            border: solid black;
        }

        #navbarSupportedContent {
            background-color: rgb(43, 255, 0);
        }

        #menu {
            background-color: rgb(255, 0, 0);
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" id="menu">
            <a class="navbar-brand" href=""><img src="view/img/logo-lobo.jpg" alt="logo" width="80px" height="80px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="<?php echo BASE_URL; ?>home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>new-user">User</a>
                        <!--
                        <a href="<?php echo BASE_URL; ?>new-user">User</a>
                        -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>category">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>compras">Shops</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>venta">Sales</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdow">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                profile
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="#">logout</a></li>

                            </ul>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }

            .container {
                max-width: 1200px;
                margin: 20px auto;
                padding: 20px;
                background: #fff;
                border-radius: 8px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            .product {
                display: flex;
                align-items: center;
                margin-bottom: 20px;
                border-bottom: 1px solid #ddd;
                padding-bottom: 15px;
            }

            .product img {
                width: 100px;
                height: 100px;
                object-fit: cover;
                border-radius: 8px;
                margin-right: 20px;
            }

            .product-details {
                flex: 1;
            }

            .product-name {
                font-size: 18px;
                font-weight: bold;
                margin: 0;
            }

            .product-description {
                font-size: 14px;
                color: #555;
                margin: 5px 0;
            }

            .product-price {
                font-size: 16px;
                color:rgb(40, 137, 167);
                font-weight: bold;
            }

            .buy-button {
                background-color: #007bff;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 5px;
                cursor: pointer;
                text-decoration: none;
            }

            .buy-button:hover {
                background-color: #0056b3;
            }
        </style>

        <div class="container-fluid">
            <div class="card">
                <center>
                    <h5 class="card-header">INGRESA LOS DATOS</h5>
                </center>
                <form id="frm_products" action="" method="">
                    <div class="card-body">
                        <div class="mb-3 row">

                            <div class="mb-3 row">
                                <label for="codigo" class="col-sm-4 col-form-label"><strong>
                                        codigo:</strong></label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="codigo" name="codigo" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nombre" class="col-sm-4 col-form-label"><strong>
                                        nombre:</strong></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="detalle" class="col-sm-4 col-form-label"><strong>detalle:</strong></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="detalle" name="detalle" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="precio" class="col-sm-4 col-form-label"><strong>precio:</strong></label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="precio" name="precio" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="stock" class="col-sm-4 col-form-label"><strong>stock:</strong></label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="stock" name="stock" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_categoria " class="col-sm-4 col-form-label"><strong>id_categoria
                                        :</strong></label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="id_categoria" name="id_categoria"
                                        required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="fecha_vencimiento"
                                    class="col-sm-4 col-form-label"><strong>fecha_vencimiento:</strong></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="fecha_vencimiento"
                                        name="fecha_vencimiento" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="imagen" class="col-sm-4 col-form-label"><strong>
                                        imagen:</strong></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="imagen" name="imagen" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_proveedor " class="col-sm-4 col-form-label"><strong>id_proveedor
                                        :</strong></label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="id_proveedor" name="id_proveedor"
                                        required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label"></label>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                    <button type="reset" class="btn btn-warning">Limpiar</button>
                                    <button type="button" class="btn btn-danger">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>
<script src="<?php echo BASE_URL; ?>view/funtion/product.js"></script>
<script src="<?php echo BASE_URL; ?>view/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- importar sweet aler 2-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>