<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bennito</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>view/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <header>
        <style>
            .nav-brand {
                color: yellowgreen;
            }
        </style>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categaries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">shops</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">sales</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profile
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">profile</a></li>
                                    <li><a class="dropdown-item" href="#">My profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>

        <form id="frm-user" action="" method="" >
            <div class="container-fluid">
                <div class="card">
                    <center>
                        <h5>Registro de Usuario</h5>
                        <h2> complete el formulario</s></h2>
                    </center>

                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="nro_identidad" class="col-sm-4 col-form-label">Numero de documento:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="nro_identidad" name="nro_identidad" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="razon_social" class="col-sm-4 col-form-label">Razon social:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="razon_social" name="razon_social" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="telefono	" class="col-sm-4 col-form-label">Telefono:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="telefono" name="telefono" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="correo" class="col-sm-4 col-form-label">Correo:</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="departamento" class="col-sm-4 col-form-label">Departamento:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="departamento" name="departamento" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="provincia" class="col-sm-4 col-form-label">provincia:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="provincia" name="provincia" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="distrito" class="col-sm-4 col-form-label">distrito:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="istrito" name="distrito" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="cod_postal" class="col-sm-4 col-form-label">codigo postal:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="cod_postal" name="cod_postal" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="direccion" class="col-sm-4 col-form-label">direccion:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="rol" class="col-sm-4 col-form-label">rol:</label>
                            <div class="col-sm-8">
                                <select class="form-control" require name="rol" id="rol" required>
                                    <option value="" aria-placeholder="">seleccione</option>
                                    <option value="administrador">administrador</option>
                                    <option value="vendedor">vendedor</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">  
                            <label for=""class="col-sm-4 col-form-label"></label>
                        <div class> 
                            <button type="submit" class="btn btn-success">Registrar</button>
                            <button type="reset" class="btn btn-info">Limpiar</button>
                            <button type="button" class="btn btn-danger">Cancelar</button>
                            
                        </div>
                        </div>
                    </div>

                </div>
            </div>

        </form>
    </header>

</body>
<script src="<?php echo BASE_URL; ?>view/function/user.js"></script>
<script src="<?php echo BASE_URL; ?>view/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>
