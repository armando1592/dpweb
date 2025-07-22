
<!-- Estructura de new-user-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nuevo Usuario</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>view/bootstrap/css/bootstrap.min.css">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Base URL para JS -->
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>

    <style>
        body {
            background-color:hsl(0, 0.00%, 96.90%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background-color:rgba(67, 104, 182, 0.7);
            box-shadow: 0 2px 5px rgba(231, 226, 226, 0.95);
        }

        .navbar-brand img {
            border-radius: 10px;
            border: 1px solid #ddd;
        }

        .nav-link {
            font-weight: 500;
            color: #333;
        }

        .nav-link:hover {
            color: #007bff;
        }

        .card {
            margin-top: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(236, 230, 230, 0.08);
        }

        .card-header {
            background-color:rgb(62, 158, 158);
            color: #fff;
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .form-control {
            border-radius: 6px;
        }

        .btn {
            min-width: 100px;
            font-weight: 500;
        }

        .btn-primary {
            background-color:rgb(34, 70, 18);
            border: none;
        }

        .btn-warning {
            background-color:rgb(97, 24, 180);
            border: none;
            color:rgb(188, 201, 214);
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://logopond.com/logos/ed0f647072c2187bd75f55bf4301c2ed.png" alt="Logo" width="80" height="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Categories</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Clients</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Shops</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sales</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Profile</a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">My Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


<!-- Estructura de categoria-->

    <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Categoría</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>view/bootstrap/css/bootstrap.min.css">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Base URL global -->
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>

    <style>
        body {
            background-color: #f0f8ff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }

        .card-header {
            background-color: #83a9d1ff;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        label {
            font-weight: 600;
        }

        .form-control {
            border-radius: 6px;
            border: 1px solid #ced4da;
        }

        .btn {
            min-width: 100px;
            font-weight: 500;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #5da2ebff;
        }

        .btn-warning {
            background-color: #37b696ff;
            border: none;
        }

        .btn-warning:hover {
            background-color: #24549cff;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #b52a37;
        }
    </style>
</head>

<body>