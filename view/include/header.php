<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas-Lunatic</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>view/bootstrap/css/bootstrap.min.css">
    <style>
        :root {
            --primary-color: #667eea;
            --secondary-color: #764ba2;
            --accent-color: #f093fb;
            --dark-bg: #1a1a2e;
            --darker-bg: #16213e;
            --light-text: #ffffff;
            --navbar-height: 70px;
            --transition-speed: 0.3s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            position: relative;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('https://i.pinimg.com/736x/fb/61/e7/fb61e71d72a192bea6b22a43ef2b979a.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            z-index: -1;
            opacity: 0.95;
        }

        /* Navbar Principal */
        .navbar-professional {
            background: linear-gradient(135deg, rgba(26, 26, 46, 0.98) 0%, rgba(22, 33, 62, 0.98) 100%);
            backdrop-filter: blur(20px) saturate(180%);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
            padding: 0;
            height: var(--navbar-height);
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all var(--transition-speed) ease;
        }

        .navbar-professional.scrolled {
            height: 60px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.6);
        }

        /* Brand/Logo */
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 900;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transition: all var(--transition-speed) ease;
            padding: 0 25px;
            display: flex;
            align-items: center;
            gap: 12px;
            height: var(--navbar-height);
            text-decoration: none;
        }

        .navbar-brand:hover {
            transform: scale(1.05) translateY(-2px);
            filter: drop-shadow(0 0 15px rgba(102, 126, 234, 0.6));
        }

        .brand-icon {
            font-size: 2rem;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
        }

        /* Hamburger Button */
        .navbar-toggler {
            border: none;
            padding: 8px;
            margin-right: 15px;
            background: transparent;
            position: relative;
            width: 40px;
            height: 40px;
            transition: all var(--transition-speed) ease;
        }

        .navbar-toggler:focus {
            box-shadow: none;
            outline: none;
        }

        .navbar-toggler-icon {
            background-image: none;
            position: relative;
            display: block;
            width: 100%;
            height: 100%;
        }

        .navbar-toggler-icon::before,
        .navbar-toggler-icon::after,
        .navbar-toggler-icon span {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 25px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 3px;
            transition: all var(--transition-speed) ease;
        }

        .navbar-toggler-icon::before { top: 8px; }
        .navbar-toggler-icon span { top: 50%; transform: translate(-50%, -50%); }
        .navbar-toggler-icon::after { bottom: 8px; }

        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::before {
            top: 50%;
            transform: translate(-50%, -50%) rotate(45deg);
        }

        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon span {
            opacity: 0;
            transform: translate(-50%, -50%) scale(0);
        }

        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::after {
            bottom: 50%;
            transform: translate(-50%, 50%) rotate(-45deg);
        }

        /* Navigation Links */
        .navbar-nav {
            gap: 8px;
            align-items: center;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 10px 18px !important;
            border-radius: 12px;
            transition: all var(--transition-speed) cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .nav-link:hover::before {
            left: 100%;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.15);
            color: white !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .nav-link.active {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white !important;
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.5);
            transform: scale(1.05);
        }

        .nav-icon {
            font-size: 1.3rem;
            transition: transform var(--transition-speed) ease;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
        }

        .nav-link:hover .nav-icon {
            transform: scale(1.2) rotate(5deg);
        }

        .nav-link.active .nav-icon {
            animation: bounce 0.6s ease;
        }

        @keyframes bounce {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.2); }
        }

        /* Dropdown Menu */
        .dropdown-menu {
            background: linear-gradient(135deg, rgba(26, 26, 46, 0.98) 0%, rgba(22, 33, 62, 0.98) 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.5);
            padding: 12px;
            margin-top: 12px;
            min-width: 220px;
            animation: dropdownFade 0.3s ease;
        }

        @keyframes dropdownFade {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-item {
            color: rgba(255, 255, 255, 0.9);
            padding: 12px 18px;
            border-radius: 10px;
            transition: all var(--transition-speed) ease;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.95rem;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            transform: translateX(8px);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .dropdown-divider {
            border-color: rgba(255, 255, 255, 0.2);
            margin: 10px 0;
        }

        .dropdown-toggle::after {
            margin-left: 8px;
            transition: transform var(--transition-speed) ease;
        }

        .dropdown-toggle[aria-expanded="true"]::after {
            transform: rotate(180deg);
        }

        /* User Section */
        .user-section {
            display: flex;
            align-items: center;
            gap: 15px;
            padding-right: 20px;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: white;
            font-weight: 800;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.5);
            transition: all var(--transition-speed) ease;
            cursor: pointer;
            position: relative;
        }

        .user-avatar::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            z-index: -1;
            filter: blur(10px);
            opacity: 0;
            transition: opacity var(--transition-speed) ease;
        }

        .user-avatar:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 6px 25px rgba(102, 126, 234, 0.7);
        }

        .user-avatar:hover::before {
            opacity: 1;
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .navbar-professional {
                height: auto;
                min-height: var(--navbar-height);
            }

            .navbar-collapse {
                background: linear-gradient(135deg, rgba(26, 26, 46, 0.98) 0%, rgba(22, 33, 62, 0.98) 100%);
                backdrop-filter: blur(20px);
                padding: 25px;
                border-radius: 0 0 20px 20px;
                margin-top: 15px;
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.5);
                animation: slideDown 0.4s ease;
            }

            @keyframes slideDown {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .navbar-nav {
                gap: 8px;
            }

            .nav-link {
                justify-content: flex-start;
                padding: 15px 20px !important;
                font-size: 1rem;
            }

            .user-section {
                padding: 20px 0 0 0;
                border-top: 2px solid rgba(255, 255, 255, 0.15);
                margin-top: 20px;
                justify-content: center;
                flex-direction: column;
                gap: 15px;
            }

            .dropdown-menu {
                background: rgba(26, 26, 46, 0.95);
                border: none;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            }

            .navbar-brand {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand {
                font-size: 1.4rem;
                padding: 0 15px;
            }

            .brand-icon {
                font-size: 1.6rem;
            }

            .nav-link {
                font-size: 0.95rem;
                padding: 12px 18px !important;
            }

            .nav-icon {
                font-size: 1.2rem;
            }

            .user-avatar {
                width: 40px;
                height: 40px;
                font-size: 1.1rem;
            }
        }

        /* Loading Animation */
        @keyframes fadeInNav {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .navbar-professional {
            animation: fadeInNav 0.6s ease;
        }

        /* Pulse Effect for Icons */
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.15);
            }
        }

        .nav-link:hover .nav-icon {
            animation: pulse 1s ease infinite;
        }

        /* Shine Effect */
        @keyframes shine {
            0% { background-position: -200% center; }
            100% { background-position: 200% center; }
        }

        .nav-link.active {
            background-size: 200% auto;
            animation: shine 3s linear infinite;
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Container Spacing */
        .container-fluid {
            padding-left: 15px;
            padding-right: 15px;
        }

        @media (min-width: 992px) {
            .container-fluid {
                padding-left: 30px;
                padding-right: 30px;
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
                <span class="brand-icon">🛒</span>
                <span>Lunatic</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <span></span>
                </span>
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

            // Efecto scroll para navbar
            let lastScroll = 0;
            const navbar = document.querySelector('.navbar-professional');
            
            window.addEventListener('scroll', function() {
                const currentScroll = window.pageYOffset;
                
                if (currentScroll > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
                
                lastScroll = currentScroll;
            });

            // Cerrar menú móvil al hacer clic en un enlace
            const navbarCollapse = document.querySelector('.navbar-collapse');
            const navbarToggler = document.querySelector('.navbar-toggler');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth < 992) {
                        navbarCollapse.classList.remove('show');
                        navbarToggler.setAttribute('aria-expanded', 'false');
                    }
                });
            });

            // Animación de carga para items del menú
            const menuItems = document.querySelectorAll('.nav-item');
            menuItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(-20px)';
                setTimeout(() => {
                    item.style.transition = 'all 0.4s ease';
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, index * 50);
            });
        });
    </script>
</body>
</html>