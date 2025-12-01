<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunatic - Iniciar Sesión</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', 'Segoe UI', sans-serif;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        /* Fondo con imagen de moda */
        .background-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            overflow: hidden;
        }

        .background-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255,255,255,.03) 35px, rgba(255,255,255,.03) 70px),
                repeating-linear-gradient(-45deg, transparent, transparent 35px, rgba(255,255,255,.02) 35px, rgba(255,255,255,.02) 70px);
            animation: patternMove 20s linear infinite;
        }

        @keyframes patternMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(70px, 70px); }
        }

        /* Elementos decorativos flotantes */
        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .fashion-icon {
            position: absolute;
            color: rgba(255, 255, 255, 0.05);
            font-size: 80px;
            animation: float 15s ease-in-out infinite;
        }

        .fashion-icon:nth-child(1) { top: 15%; left: 10%; animation-delay: 0s; }
        .fashion-icon:nth-child(2) { top: 65%; right: 15%; animation-delay: 3s; }
        .fashion-icon:nth-child(3) { top: 40%; left: 5%; animation-delay: 6s; }
        .fashion-icon:nth-child(4) { bottom: 20%; right: 10%; animation-delay: 9s; }
        .fashion-icon:nth-child(5) { top: 25%; right: 25%; animation-delay: 12s; }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.3; }
            25% { transform: translateY(-30px) rotate(5deg); opacity: 0.5; }
            50% { transform: translateY(0px) rotate(0deg); opacity: 0.3; }
            75% { transform: translateY(20px) rotate(-5deg); opacity: 0.4; }
        }

        /* Efecto de luz radial */
        .radial-light {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(232, 93, 117, 0.15) 0%, transparent 70%);
            transform: translate(-50%, -50%);
            animation: pulse-light 8s ease-in-out infinite;
        }

        @keyframes pulse-light {
            0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.3; }
            50% { transform: translate(-50%, -50%) scale(1.2); opacity: 0.6; }
        }

        /* Contenedor principal */
        .login-wrapper {
            position: relative;
            z-index: 10;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-container {
            display: flex;
            max-width: 1100px;
            width: 100%;
            background: rgba(255, 255, 255, 0.98);
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
            animation: slideUp 1s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px) scale(0.9);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Panel izquierdo - Imagen decorativa */
        .login-visual {
            flex: 1;
            background: linear-gradient(135deg, #e85d75 0%, #d63864 100%);
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .login-visual::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 10px,
                rgba(255, 255, 255, 0.05) 10px,
                rgba(255, 255, 255, 0.05) 20px
            );
            animation: stripesMove 20s linear infinite;
        }

        @keyframes stripesMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        .brand-section {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
        }

        .brand-icon {
            width: 120px;
            height: 120px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            font-size: 60px;
            animation: iconFloat 3s ease-in-out infinite;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        @keyframes iconFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .brand-section h1 {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 15px;
            text-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            letter-spacing: 2px;
        }

        .brand-section p {
            font-size: 16px;
            opacity: 0.95;
            line-height: 1.6;
            max-width: 350px;
            margin: 0 auto;
        }

        .features-list {
            margin-top: 40px;
            text-align: left;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            color: white;
            animation: fadeInLeft 1s ease-out;
        }

        .feature-item i {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 18px;
        }

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

        /* Panel derecho - Formulario */
        .login-form-section {
            flex: 1;
            padding: 60px 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: white;
        }

        .form-header {
            margin-bottom: 40px;
        }

        .form-header h2 {
            font-size: 32px;
            color: #1a1a2e;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .form-header p {
            color: #7f8c8d;
            font-size: 15px;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
            animation: fadeInRight 0.8s ease-out;
        }

        .input-group:nth-child(2) {
            animation-delay: 0.2s;
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .input-group label {
            display: block;
            color: #2c3e50;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #e85d75;
            font-size: 18px;
            z-index: 2;
        }

        .input-group input {
            width: 100%;
            padding: 16px 20px 16px 55px;
            border: 2px solid #e8e8e8;
            border-radius: 15px;
            font-size: 15px;
            color: #2c3e50;
            transition: all 0.3s ease;
            background: #f8f9fa;
            outline: none;
        }

        .input-group input::placeholder {
            color: #bdc3c7;
        }

        .input-group input:focus {
            border-color: #e85d75;
            background: white;
            box-shadow: 0 5px 20px rgba(232, 93, 117, 0.15);
            transform: translateY(-2px);
        }

        .password-toggle {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #95a5a6;
            cursor: pointer;
            font-size: 18px;
            z-index: 2;
            transition: color 0.3s ease;
        }

        .password-toggle:hover {
            color: #e85d75;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            color: #7f8c8d;
            cursor: pointer;
        }

        .remember-me input {
            margin-right: 8px;
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #e85d75;
        }

        .forgot-password {
            color: #e85d75;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #d63864;
            text-decoration: underline;
        }

        .login-button {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #e85d75 0%, #d63864 100%);
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(232, 93, 117, 0.3);
        }

        .login-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s;
        }

        .login-button:hover::before {
            left: 100%;
        }

        .login-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(232, 93, 117, 0.4);
        }

        .login-button:active {
            transform: translateY(-1px);
        }

        .divider {
            text-align: center;
            margin: 30px 0;
            position: relative;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            width: 45%;
            height: 1px;
            background: #e8e8e8;
        }

        .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            right: 0;
            width: 45%;
            height: 1px;
            background: #e8e8e8;
        }

        .divider span {
            color: #95a5a6;
            background: white;
            padding: 0 15px;
            font-size: 14px;
        }

        .social-login {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }

        .social-btn {
            flex: 1;
            padding: 14px;
            border: 2px solid #e8e8e8;
            border-radius: 12px;
            background: white;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-weight: 600;
            font-size: 14px;
            color: #2c3e50;
        }

        .social-btn:hover {
            border-color: #e85d75;
            background: #fff5f7;
            transform: translateY(-2px);
        }

        .social-btn i {
            font-size: 20px;
        }

        .google { color: #db4437; }
        .facebook { color: #4267B2; }

        .register-link {
            text-align: center;
            margin-top: 25px;
            color: #7f8c8d;
            font-size: 14px;
        }

        .register-link a {
            color: #e85d75;
            font-weight: 700;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .register-link a:hover {
            color: #d63864;
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 968px) {
            .login-container {
                flex-direction: column;
                max-width: 500px;
            }

            .login-visual {
                padding: 40px 30px;
            }

            .brand-section h1 {
                font-size: 32px;
            }

            .features-list {
                display: none;
            }

            .login-form-section {
                padding: 40px 30px;
            }
        }

        @media (max-width: 480px) {
            .login-form-section {
                padding: 30px 25px;
            }

            .form-header h2 {
                font-size: 26px;
            }

            .social-login {
                flex-direction: column;
            }
        }

        /* Loading animation */
        .btn-loading {
            pointer-events: none;
            opacity: 0.7;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spinner 0.8s linear infinite;
        }

        @keyframes spinner {
            to { transform: rotate(360deg); }
        }
    </style>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
</head>
<body>
    <!-- Fondo animado -->
    <div class="background-wrapper">
        <div class="background-pattern"></div>
        <div class="radial-light"></div>
        <div class="floating-elements">
            <i class="fas fa-tshirt fashion-icon"></i>
            <i class="fas fa-shopping-bag fashion-icon"></i>
            <i class="fas fa-crown fashion-icon"></i>
            <i class="fas fa-gem fashion-icon"></i>
            <i class="fas fa-star fashion-icon"></i>
        </div>
    </div>

    <!-- Contenedor de login -->
    <div class="login-wrapper">
        <div class="login-container">
            <!-- Panel visual izquierdo -->
            <div class="login-visual">
                <div class="brand-section">
                    <div class="brand-icon">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <h1>FASHION LUNATIC</h1>
                    <p>Tu tienda con estilo y eficiencia.</p>
                    
                    <div class="features-list">
                        <div class="feature-item">
                            <i class="fas fa-chart-line"></i>
                            <span>Control de ventas en tiempo real</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-box"></i>
                            <span>Inventario actualizado</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-users"></i>
                            <span>Gestión de clientes</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>Seguridad garantizada</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Panel del formulario derecho -->
            <div class="login-form-section">
                <div class="form-header">
                    <h2>Bienvenido a Lunatic</h2>
                    <p>Ingresa tus credenciales para acceder al sistema</p>
                </div>

                <form id="frm_login">
                    <div class="input-group">
                        <label for="username">Usuario</label>
                        <div class="input-wrapper">
                            <i class="fas fa-user input-icon"></i>
                            <input 
                                type="text" 
                                id="username" 
                                name="username" 
                                placeholder="Ingresa tu usuario"
                                required
                                autocomplete="username"
                            >
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="password">Contraseña</label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock input-icon"></i>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                placeholder="Ingresa tu contraseña"
                                required
                                autocomplete="current-password"
                            >
                            <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                        </div>
                    </div>

                    <div class="form-options">
                        <label class="remember-me">
                            <input type="checkbox" id="remember">
                            <span>Recordarme</span>
                        </label>
                        <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
                    </div>

                    <button type="button" class="login-button" onclick="iniciar_sesion();">
                        Iniciar Sesión
                    </button>
                </form>

                <div class="divider">
                    <span>O continúa con</span>
                </div>

                <div class="social-login">
                    <button class="social-btn" onclick="loginWithGoogle()">
                        <i class="fab fa-google google"></i>
                        <span>Google</span>
                    </button>
                    <button class="social-btn" onclick="loginWithFacebook()">
                        <i class="fab fa-facebook facebook"></i>
                        <span>Facebook</span>
                    </button>
                </div>

                <div class="register-link">
                    ¿No tienes una cuenta? <a href="#">Regístrate aquí</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });

        // Función de inicio de sesión (adaptable a tu sistema)
        function iniciar_sesion() {
            const button = document.querySelector('.login-button');
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (!username || !password) {
                alert('Por favor, completa todos los campos');
                return;
            }

            // Agregar estado de carga
            button.classList.add('btn-loading');
            button.textContent = '';

            // Aquí va tu lógica de login
            // Simulación de llamada a función externa
            setTimeout(() => {
                button.classList.remove('btn-loading');
                button.textContent = 'Iniciar Sesión';
                // Tu función original de login
                // window.iniciar_sesion(); 
            }, 2000);
        }

        // Login social (placeholder)
        function loginWithGoogle() {
            console.log('Login con Google');
            // Implementar lógica OAuth de Google
        }

        function loginWithFacebook() {
            console.log('Login con Facebook');
            // Implementar lógica OAuth de Facebook
        }

        // Enter key to submit
        document.getElementById('password').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                iniciar_sesion();
            }
        });
    </script>

    <!-- Tu script original -->
    <script src="<?php echo BASE_URL; ?>view/function/user.js"></script>
</body>
</html>