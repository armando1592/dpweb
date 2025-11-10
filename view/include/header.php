<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta Lunatic</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>view/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>

    <style>
        /* 🌈 Fondo general con overlay */
        body {
            /* background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDCY6S1ff9IWWgSJ0Vb9Ke_6N_KO91F6TURZ-b9XIIFwxyTkZD1tPPYqTy78ptXgLGLWA&usqp=CAU') no-repeat center center fixed; */
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            color: #fff;
        }

        /* Oscurece el fondo para legibilidad */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(15, 23, 42, 0.6);
            z-index: -1;
        }

        /* Navbar elegante */
        .navbar {
            background: linear-gradient(90deg, #45a195ff, #c57915ff);
            box-shadow: 0 4px 12px rgba(11, 10, 15, 0.3);
            border-radius: 10px;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: 1px;
            color: #222224a4 !important;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .navbar-nav .nav-link {
            color: #e5e5e5 !important;
            font-weight: 500;
            margin-right: 10px;
            transition: 0.3s ease;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .navbar-nav .nav-link:hover {
            color: #b74fa4ff !important;
            transform: scale(1.05);
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
        }

        .dropdown-menu {
            background-color: #2a3eaf;
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }

        .dropdown-item {
            color: #fff;
            transition: background 0.3s;
        }

        .dropdown-item:hover {
            background-color: #4153e1;
        }

        /* Estilo del botón toggler */
        .navbar-toggler {
            border-color: #fff;
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }

        /* 🪄 Animación de entrada */
        .navbar, .navbar-brand, .nav-link {
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="bi bi-shop"></i> Sistema de Venta
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item"><a class="nav-link active" href="#">🏠 Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>users">👤 Usuarios</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>products">📦 Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>category">🗂️ Categorías</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>clients">👥 Clientes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">🏬 Tiendas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">💰 Ventas</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>proveedor">🚚 Proveedor</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>vista-cliente">👀 Vista Cliente</a></li>

                </ul>

                <ul class="navbar-nav px-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ⚙️ Opciones
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">🧍 Perfil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">🔓 Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <script src="<?php echo BASE_URL; ?>view/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
