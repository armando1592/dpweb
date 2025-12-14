<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas-Antojitos</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>view/bootstrap/css/bootstrap.min.css">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --success-gradient: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            --navbar-height: 70px;
        }

        body {
  
            min-height: 100vh;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url("data:image/jpeg;base64,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");
           
            z-index: -1;
        }

        .navbar-professional {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            padding: 0;
            height: var(--navbar-height);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            font-size: 2rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transition: all 0.3s ease;
            padding: 0 20px;
            display: flex;
            align-items: center;
            height: var(--navbar-height);
        }

        .navbar-brand:hover {
            transform: scale(1.1);
        }

        .navbar-toggler {
            border: 2px solid rgba(255, 255, 255, 0.2);
            padding: 10px 15px;
            margin-right: 15px;
            transition: all 0.3s ease;
        }

        .navbar-toggler:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.4);
        }

        .navbar-toggler-icon {
            filter: brightness(0) invert(1);
        }

        .navbar-nav {
            gap: 5px;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            font-weight: 600;
            font-size: 1rem;
            padding: 10px 18px !important;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            height: 45px;
            margin: 0 2px;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white !important;
            transform: translateY(-2px);
        }

        .nav-link.active {
            background: var(--primary-gradient);
            color: white !important;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: var(--success-gradient);
            transition: width 0.3s ease;
            border-radius: 3px 3px 0 0;
        }

        .nav-link:hover::before {
            width: 80%;
        }

        .dropdown-menu {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            padding: 10px;
            margin-top: 10px;
        }

        .dropdown-item {
            color: rgba(255, 255, 255, 0.85);
            padding: 12px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .dropdown-item:hover {
            background: var(--primary-gradient);
            color: white;
            transform: translateX(5px);
        }

        .dropdown-divider {
            border-color: rgba(255, 255, 255, 0.2);
            margin: 8px 0;
        }

        .dropdown-toggle::after {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .dropdown-toggle[aria-expanded="true"]::after {
            transform: rotate(180deg);
        }

        .user-section {
            display: flex;
            align-items: center;
            gap: 15px;
            padding-right: 20px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: white;
            font-weight: 700;
            box-shadow: 0 2px 10px rgba(102, 126, 234, 0.4);
        }

        /* Iconos mejorados */
        .nav-icon {
            font-size: 1.2rem;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }

        /* Responsive mejoras */
        @media (max-width: 991px) {
            .navbar-professional {
                height: auto;
            }

            .navbar-collapse {
                background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
                padding: 20px;
                border-radius: 0 0 15px 15px;
                margin-top: 10px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            }

            .navbar-nav {
                gap: 10px;
            }

            .nav-link {
                justify-content: flex-start;
                padding: 15px 20px !important;
            }

            .user-section {
                padding: 15px 0;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                margin-top: 15px;
                justify-content: center;
            }

            .dropdown-menu {
                background: rgba(44, 62, 80, 0.95);
                border: none;
                box-shadow: none;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand {
                font-size: 1.5rem;
                padding: 0 10px;
            }

            .nav-link {
                font-size: 0.95rem;
            }
        }

        /* Animación de carga */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .navbar-professional {
            animation: fadeIn 0.5s ease;
        }

        /* Efecto de brillo en hover */
        .nav-link:hover .nav-icon {
            animation: pulse 1s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }
    </style>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
    <?php
    if (isset($_GET["views"])) {
        $ruta = explode("/", $_GET["views"]);
    }
    ?>
</head>

<body>
    <nav class="navbar navbar-professional navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <span class="nav-icon">🛒</span>
                <span class="d-none d-md-inline">Antojitos dulce deleite</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span class="nav-icon">🏠</span>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>users">
                            <span class="nav-icon">👤</span>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>products">
                            <span class="nav-icon">📦</span>
                            <span>Products</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>category">
                            <span class="nav-icon">🗂️</span>
                            <span>Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>clients">
                            <span class="nav-icon">👥</span>
                            <span>Clients</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="nav-icon">🏬</span>
                            <span>Shops</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="nav-icon">💰</span>
                            <span>Sales</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>proveedor">
                            <span class="nav-icon">🚚</span>
                            <span>Proveedor</span>
                        </a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>vendedor">
                            <span class="nav-icon">💼</span>
                            <span>Vendedor</span>
                        </a>
                    </li>
                </ul>
                <div class="user-section">
                    <div class="user-avatar">A</div>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mi Cuenta
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span>🧍‍♂️</span>
                                        <span>Perfil</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span>⚙️</span>
                                        <span>Configuración</span>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span>🔓</span>
                                        <span>Cerrar Sesión</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <script src="<?php echo BASE_URL; ?>view/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script para marcar el link activo según la URL actual
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                if (link.getAttribute('href') && currentPath.includes(link.getAttribute('href'))) {
                    navLinks.forEach(l => l.classList.remove('active'));
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>