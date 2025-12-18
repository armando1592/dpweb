<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunatic Minimarket - Iniciar Sesión</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
            background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
            position: relative;
        }

        /* Grid animado de fondo */
        .animated-bg {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            overflow: hidden;
        }

        .bg-grid {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: gridMove 20s linear infinite;
        }

        @keyframes gridMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        /* Orbes flotantes */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.3;
            animation: float 20s ease-in-out infinite;
        }

        .orb1 {
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            top: -10%;
            left: -10%;
            animation-delay: 0s;
        }

        .orb2 {
            width: 350px;
            height: 350px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            bottom: -10%;
            right: -10%;
            animation-delay: 5s;
        }

        .orb3 {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            top: 40%;
            right: -10%;
            animation-delay: 10s;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            33% {
                transform: translate(100px, -100px) scale(1.1);
            }
            66% {
                transform: translate(-50px, 100px) scale(0.9);
            }
        }

        /* Productos flotantes */
        .floating-products {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
        }

        .product-item {
            position: absolute;
            font-size: 35px;
            opacity: 0.08;
            animation: productFloat 25s infinite ease-in-out;
        }

        .product-item:nth-child(1) { left: 5%; top: 15%; animation-delay: 0s; }
        .product-item:nth-child(2) { right: 10%; top: 25%; animation-delay: 3s; }
        .product-item:nth-child(3) { left: 15%; bottom: 20%; animation-delay: 6s; }
        .product-item:nth-child(4) { right: 5%; bottom: 30%; animation-delay: 9s; }
        .product-item:nth-child(5) { left: 45%; top: 10%; animation-delay: 12s; }
        .product-item:nth-child(6) { right: 35%; bottom: 15%; animation-delay: 15s; }
        .product-item:nth-child(7) { left: 30%; top: 50%; animation-delay: 18s; }
        .product-item:nth-child(8) { right: 25%; top: 40%; animation-delay: 21s; }

        @keyframes productFloat {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            25% {
                transform: translateY(-40px) rotate(10deg);
            }
            50% {
                transform: translateY(0) rotate(0deg);
            }
            75% {
                transform: translateY(30px) rotate(-10deg);
            }
        }

        /* Partículas */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            width: 3px;
            height: 3px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        }

        /* Container principal */
        .login-container {
            position: relative;
            z-index: 10;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .login-wrapper {
            display: flex;
            max-width: 1100px;
            width: 100%;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(30px) saturate(180%);
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 
                0 50px 100px rgba(0, 0, 0, 0.3),
                0 0 0 1px rgba(255, 255, 255, 0.1) inset;
            animation: slideUp 0.8s cubic-bezier(0.22, 1, 0.36, 1);
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(60px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Panel izquierdo - Branding */
        .brand-panel {
            flex: 1;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .brand-panel::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 30px 30px;
            animation: patternMove 30s linear infinite;
        }

        @keyframes patternMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(30px, 30px); }
        }

        .brand-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .brand-logo {
            width: 140px;
            height: 140px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            box-shadow: 
                0 20px 60px rgba(0, 0, 0, 0.3),
                0 0 0 1px rgba(255, 255, 255, 0.2) inset;
            animation: logoPulse 3s ease-in-out infinite;
            position: relative;
        }

        @keyframes logoPulse {
            0%, 100% {
                transform: scale(1) rotate(0deg);
            }
            50% {
                transform: scale(1.05) rotate(2deg);
            }
        }

        .brand-logo i {
            font-size: 70px;
            color: white;
            animation: iconSpin 4s ease-in-out infinite;
        }

        @keyframes iconSpin {
            0%, 100% { transform: rotate(0deg); }
            50% { transform: rotate(-8deg); }
        }

        .brand-logo::before {
            content: '';
            position: absolute;
            inset: -3px;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.3), transparent);
            border-radius: 35px;
            animation: shimmer 3s linear infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .brand-title {
            font-size: 42px;
            font-weight: 900;
            color: white;
            margin-bottom: 15px;
            letter-spacing: -1px;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .brand-subtitle {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 600;
            margin-bottom: 40px;
            letter-spacing: 2px;
        }

        .brand-features {
            list-style: none;
            text-align: left;
            width: 100%;
            max-width: 350px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
            color: white;
            font-size: 15px;
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeInLeft 0.6s ease-out forwards;
        }

        .feature-item:nth-child(1) { animation-delay: 0.3s; }
        .feature-item:nth-child(2) { animation-delay: 0.5s; }
        .feature-item:nth-child(3) { animation-delay: 0.7s; }
        .feature-item:nth-child(4) { animation-delay: 0.9s; }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .feature-icon {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        /* Panel derecho - Formulario */
        .form-panel {
            flex: 1;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header {
            margin-bottom: 40px;
        }

        .form-title {
            font-size: 32px;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 10px;
            letter-spacing: -0.5px;
        }

        .form-description {
            color: #718096;
            font-size: 15px;
            font-weight: 500;
        }

        .form-group {
            margin-bottom: 25px;
            animation: fadeInUp 0.6s ease-out backwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-label {
            display: block;
            color: #2d3748;
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 10px;
            transition: color 0.3s;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aec0;
            font-size: 18px;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .form-input {
            width: 100%;
            padding: 16px 18px 16px 52px;
            border: 2px solid #e2e8f0;
            border-radius: 14px;
            font-size: 15px;
            color: #2d3748;
            background: #f7fafc;
            transition: all 0.3s ease;
            outline: none;
            font-weight: 500;
        }

        .form-input:focus {
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        .form-input:focus + .input-icon {
            color: #667eea;
            transform: translateY(-50%) scale(1.1);
        }

        .password-toggle {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aec0;
            cursor: pointer;
            font-size: 18px;
            z-index: 2;
            transition: all 0.3s ease;
        }

        .password-toggle:hover {
            color: #667eea;
            transform: translateY(-50%) scale(1.15);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            font-size: 14px;
            animation: fadeInUp 0.6s ease-out 0.3s backwards;
        }

        .remember-checkbox {
            display: flex;
            align-items: center;
            cursor: pointer;
            color: #4a5568;
            font-weight: 600;
            transition: color 0.3s;
        }

        .remember-checkbox:hover {
            color: #667eea;
        }

        .remember-checkbox input {
            margin-right: 10px;
            width: 20px;
            height: 20px;
            cursor: pointer;
            accent-color: #667eea;
        }

        .forgot-link {
            color: #667eea;
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s;
            position: relative;
        }

        .forgot-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #667eea;
            transition: width 0.3s ease;
        }

        .forgot-link:hover::after {
            width: 100%;
        }

        .login-button {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 14px;
            font-size: 16px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            animation: fadeInUp 0.6s ease-out 0.4s backwards;
        }

        .login-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .login-button:hover::before {
            left: 100%;
        }

        .login-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.5);
        }

        .login-button:active {
            transform: translateY(-1px);
        }

        .button-text {
            position: relative;
            z-index: 1;
        }

        .btn-loading {
            pointer-events: none;
            opacity: 0.7;
        }

        .btn-loading .button-text {
            opacity: 0;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            width: 24px;
            height: 24px;
            top: 50%;
            left: 50%;
            margin-left: -12px;
            margin-top: -12px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spinner 0.8s linear infinite;
            z-index: 2;
        }

        @keyframes spinner {
            to { transform: rotate(360deg); }
        }

        .divider {
            text-align: center;
            margin: 35px 0;
            position: relative;
            animation: fadeInUp 0.6s ease-out 0.5s backwards;
        }

        .divider::before,
        .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 43%;
            height: 1px;
            background: #e2e8f0;
        }

        .divider::before { left: 0; }
        .divider::after { right: 0; }

        .divider-text {
            color: #a0aec0;
            background: white;
            padding: 0 20px;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .social-buttons {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
            animation: fadeInUp 0.6s ease-out 0.6s backwards;
        }

        .social-btn {
            flex: 1;
            padding: 14px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            background: white;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-weight: 700;
            font-size: 14px;
            color: #4a5568;
        }

        .social-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .social-btn.google:hover {
            border-color: #db4437;
            background: #fef5f5;
        }

        .social-btn.facebook:hover {
            border-color: #4267B2;
            background: #f5f7ff;
        }

        .social-btn i {
            font-size: 20px;
        }

        .google-icon { color: #db4437; }
        .facebook-icon { color: #4267B2; }

        .register-text {
            text-align: center;
            color: #718096;
            font-size: 14px;
            font-weight: 600;
            animation: fadeInUp 0.6s ease-out 0.7s backwards;
        }

        .register-link {
            color: #667eea;
            font-weight: 800;
            text-decoration: none;
            transition: all 0.3s;
        }

        .register-link:hover {
            color: #764ba2;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .login-wrapper {
                flex-direction: column;
            }

            .brand-panel {
                padding: 50px 40px;
            }

            .brand-features {
                margin-top: 30px;
            }

            .form-panel {
                padding: 50px 40px;
            }
        }

        @media (max-width: 768px) {
            .login-container {
                padding: 20px;
            }

            .brand-panel {
                padding: 40px 30px;
            }

            .brand-logo {
                width: 110px;
                height: 110px;
            }

            .brand-logo i {
                font-size: 55px;
            }

            .brand-title {
                font-size: 32px;
            }

            .form-panel {
                padding: 40px 30px;
            }

            .form-title {
                font-size: 26px;
            }

            .product-item {
                font-size: 25px;
            }
        }

        @media (max-width: 480px) {
            .brand-panel,
            .form-panel {
                padding: 35px 25px;
            }

            .brand-title {
                font-size: 28px;
            }

            .brand-subtitle {
                font-size: 14px;
            }

            .form-title {
                font-size: 24px;
            }

            .form-input {
                padding: 14px 16px 14px 48px;
            }

            .login-button {
                padding: 16px;
                font-size: 15px;
            }

            .social-buttons {
                flex-direction: column;
            }

            .product-item {
                font-size: 20px;
            }

            .feature-item {
                font-size: 14px;
            }

            .form-options {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
        }
    </style>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
</head>
<body>
    <!-- Fondo animado -->
    <div class="animated-bg">
        <div class="bg-grid"></div>
        <div class="orb orb1"></div>
        <div class="orb orb2"></div>
        <div class="orb orb3"></div>
    </div>

    <!-- Productos flotantes -->
    <div class="floating-products">
        <div class="product-item">🛒</div>
        <div class="product-item">🥤</div>
        <div class="product-item">🍫</div>
        <div class="product-item">🍞</div>
        <div class="product-item">🥛</div>
        <div class="product-item">🧃</div>
        <div class="product-item">🍪</div>
        <div class="product-item">🥫</div>
    </div>

    <!-- Partículas -->
    <div class="particles" id="particles"></div>

    <!-- Container principal -->
    <div class="login-container">
        <div class="login-wrapper">
            <!-- Panel izquierdo - Branding -->
            <div class="brand-panel">
                <div class="brand-content">
                    <div class="brand-logo">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <h1 class="brand-title">Lunatic</h1>
                    <p class="brand-subtitle">MINIMARKET</p>
                    
                    <ul class="brand-features">
                        <li class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-box-open"></i>
                            </div>
                            <span>Gestión completa de inventario</span>
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <span>Reportes y análisis en tiempo real</span>
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <span>Control de clientes y proveedores</span>
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <span>Sistema seguro y confiable</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Panel derecho - Formulario -->
            <div class="form-panel">
                <div class="form-header">
                    <h2 class="form-title">Bienvenido de nuevo</h2>
                    <p class="form-description">Ingresa tus credenciales para continuar</p>
                </div>

                <form id="frm_login">
                    <div class="form-group">
                        <label class="form-label" for="username">Usuario</label>
                        <div class="input-wrapper">
                            <input 
                                type="text" 
                                id="username" 
                                name="username" 
                                class="form-input"
                                placeholder="Ingresa tu usuario"
                                required
                                autocomplete="username"
                            >
                            <i class="fas fa-user input-icon"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">Contraseña</label>
                        <div class="input-wrapper">
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                class="form-input"
                                placeholder="Ingresa tu contraseña"
                                required
                                autocomplete="current-password"
                            >
                            <i class="fas fa-lock input-icon"></i>
                            <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                        </div>
                    </div>

                    <div class="form-options">
                        <label class="remember-checkbox">
                            <input type="checkbox" id="remember">
                            <span>Recordarme</span>
                        </label>
                        <a href="#" class="forgot-link">¿Olvidaste tu contraseña?</a>
                    </div>

                    <button type="button" class="login-button" onclick="iniciar_sesion();">
                        <span class="button-text">Iniciar Sesión</span>
                    </button>
                </form>

                <div class="divider">
                    <span class="divider-text">O continúa con</span>
                </div>

                <div class="social-buttons">
                    <button class="social-btn google" onclick="loginWithGoogle()">
                        <i class="fab fa-google google-icon"></i>
                        <span>Google</span>
                    </button>
                    <button class="social-btn facebook" onclick="loginWithFacebook()">
                        <i class="fab fa-facebook facebook-icon"></i>
                        <span>Facebook</span>
                    </button>
                </div>

                <div class="register-text">
                    ¿No tienes una cuenta? <a href="#" class="register-link">Regístrate aquí</a>
                </div>
            </div>
        </div>
    </div>
</script> <!-- Tu script original --> <script src="<?php echo BASE_URL; ?>view/function/user.js"></script>
    <script>
        // Crear partículas
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = window.innerWidth < 768 ? 30 : 60;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                const startX = Math.random() * window.innerWidth;
                const startY = Math.random() * window.innerHeight;
                const endX = startX + (Math.random() - 0.5) * 200;
                const endY = startY - Math.random() * window.innerHeight;
                const duration = 3 + Math.random() * 4;
                const delay = Math.random() * 5;
                
                particle.style.left = startX + 'px';
                particle.style.top = startY + 'px';
                
                const animation = particle.animate([
                    { transform: 'translate(0, 0)', opacity: 0 },
                    { transform: `translate(${endX - startX}px, ${endY - startY}px)`, opacity: 1, offset: 0.1 },
                    { transform: `translate(${endX - startX}px, ${endY - startY}px)`, opacity: 1, offset: 0.9 },
                    { transform: `translate(${endX - startX}px, ${endY - startY}px)`, opacity: 0 }
                ], {
                    duration: duration * 1000,
                    delay: delay * 1000,
                    iterations: Infinity,
                    easing: 'linear'
                });}}