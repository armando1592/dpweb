<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luantic - Iniciar Sesión</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
            background: linear-gradient(135deg, #4c0340ff 0%, #5a7fceff 50%, #772253ff 100%);
            position: relative;
        }

        /* Elementos flotantes de pastelería */
        .floating-bakery {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
            pointer-events: none;
        }

        .bakery-item {
            position: absolute;
            font-size: 40px;
            opacity: 0.15;
            animation: float-bakery 20s infinite ease-in-out;
        }

        .bakery-item:nth-child(1) { left: 10%; top: 20%; animation-delay: 0s; }
        .bakery-item:nth-child(2) { right: 15%; top: 30%; animation-delay: 3s; }
        .bakery-item:nth-child(3) { left: 20%; bottom: 25%; animation-delay: 6s; }
        .bakery-item:nth-child(4) { right: 10%; bottom: 35%; animation-delay: 9s; }
        .bakery-item:nth-child(5) { left: 50%; top: 15%; animation-delay: 12s; }
        .bakery-item:nth-child(6) { right: 40%; bottom: 20%; animation-delay: 15s; }

        @keyframes float-bakery {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            25% {
                transform: translateY(-30px) rotate(5deg);
            }
            50% {
                transform: translateY(0) rotate(0deg);
            }
            75% {
                transform: translateY(20px) rotate(-5deg);
            }
        }

        /* Partículas brillantes */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 2;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            animation: sparkle 3s infinite ease-in-out;
        }

        @keyframes sparkle {
            0%, 100% {
                opacity: 0;
                transform: scale(0);
            }
            50% {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Ondas decorativas */
        .waves {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 150px;
            z-index: 2;
            opacity: 0.3;
        }

        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 200%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"><path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="white"/></svg>') repeat-x;
            animation: wave-animation 15s linear infinite;
        }

        .wave:nth-child(2) {
            animation-duration: 20s;
            opacity: 0.5;
        }

        @keyframes wave-animation {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* Container principal */
        .login-container {
            position: relative;
            z-index: 10;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border-radius: 35px;
            box-shadow: 0 30px 70px rgba(255, 105, 135, 0.3);
            width: 100%;
            max-width: 480px;
            padding: 50px 45px;
            animation: slideIn 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
            overflow: hidden;
            border: 3px solid rgba(255, 255, 255, 0.8);
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(50px) scale(0.9);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Efecto de brillo en la tarjeta */
        .login-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 182, 193, 0.2), transparent);
            transform: rotate(45deg);
            animation: shine 4s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        /* Logo animado */
        .logo-container {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .logo-icon {
            width: 110px;
            height: 110px;
            background: linear-gradient(135deg, #ff6b9d 0%, #ff8fab 50%, #ffc3a0 100%);
            border-radius: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            box-shadow: 0 15px 40px rgba(255, 107, 157, 0.4);
            animation: iconPulse 2.5s ease-in-out infinite;
            position: relative;
        }

        @keyframes iconPulse {
            0%, 100% {
                transform: scale(1) rotate(0deg);
                box-shadow: 0 15px 40px rgba(255, 107, 157, 0.4);
            }
            50% {
                transform: scale(1.08) rotate(3deg);
                box-shadow: 0 20px 50px rgba(255, 107, 157, 0.6);
            }
        }

        .logo-icon i {
            font-size: 55px;
            color: white;
            animation: iconRotate 3s ease-in-out infinite;
        }

        @keyframes iconRotate {
            0%, 100% { transform: rotate(0deg); }
            50% { transform: rotate(-10deg); }
        }

        /* Círculos decorativos */
        .logo-ring {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 130px;
            height: 130px;
            border: 3px solid rgba(255, 107, 157, 0.3);
            border-radius: 50%;
            animation: ringExpand 2.5s ease-in-out infinite;
        }

        .logo-ring:nth-child(2) {
            animation-delay: 0.6s;
            border-color: rgba(255, 195, 160, 0.4);
        }

        @keyframes ringExpand {
            0% {
                width: 130px;
                height: 130px;
                opacity: 1;
            }
            100% {
                width: 180px;
                height: 180px;
                opacity: 0;
            }
        }

        .brand-title {
            font-size: 30px;
            font-weight: 900;
            background: linear-gradient(135deg, #ff6b9d 0%, #ff8fab 50%, #ffc3a0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 8px;
            animation: titleFloat 3s ease-in-out infinite;
            letter-spacing: -0.5px;
        }

        @keyframes titleFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        .brand-subtitle {
            color: #ff6b9d;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        /* Formulario */
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-label {
            display: block;
            color: #ff6b9d;
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 10px;
            transition: color 0.3s;
        }

        .input-container {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #ff8fab;
            font-size: 18px;
            transition: all 0.3s;
            z-index: 2;
        }

        .form-input {
            width: 100%;
            padding: 17px 20px 17px 55px;
            border: 2px solid #ffe0e9;
            border-radius: 18px;
            font-size: 15px;
            color: #333;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            background: #fff8fa;
            outline: none;
        }

        .form-input:focus {
            border-color: #ff8fab;
            background: white;
            box-shadow: 0 8px 30px rgba(255, 107, 157, 0.25);
            transform: translateY(-3px);
        }

        .form-input:focus ~ .input-icon {
            color: #ff6b9d;
            transform: translateY(-50%) scale(1.15);
        }

        .input-focus-effect {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            width: 0;
            background: linear-gradient(90deg, #ff6b9d, #ffc3a0);
            transition: width 0.4s ease;
            border-radius: 0 0 18px 18px;
        }

        .form-input:focus + .input-focus-effect {
            width: 100%;
        }

        .password-toggle {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #ffaec5;
            cursor: pointer;
            font-size: 18px;
            z-index: 2;
            transition: all 0.3s;
        }

        .password-toggle:hover {
            color: #ff6b9d;
            transform: translateY(-50%) scale(1.2);
        }

        /* Opciones del formulario */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            font-size: 14px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .remember-checkbox {
            display: flex;
            align-items: center;
            cursor: pointer;
            color: #666;
            transition: color 0.3s;
        }

        .remember-checkbox:hover {
            color: #ff6b9d;
        }

        .remember-checkbox input {
            margin-right: 8px;
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #ff8fab;
        }

        .forgot-link {
            color: #ff6b9d;
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
            background: #ff8fab;
            transition: width 0.3s;
        }

        .forgot-link:hover::after {
            width: 100%;
        }

        /* Botón de inicio de sesión */
        .login-button {
            width: 100%;
            padding: 19px;
            background: linear-gradient(135deg, #ff6b9d 0%, #ff8fab 50%, #ffc3a0 100%);
            color: white;
            border: none;
            border-radius: 18px;
            font-size: 16px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            box-shadow: 0 10px 35px rgba(255, 107, 157, 0.4);
        }

        .login-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .login-button:hover::before {
            width: 350px;
            height: 350px;
        }

        .login-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 45px rgba(255, 107, 157, 0.5);
        }

        .login-button:active {
            transform: translateY(-2px);
        }

        .button-text {
            position: relative;
            z-index: 1;
        }

        /* Estado de carga */
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
            width: 26px;
            height: 26px;
            top: 50%;
            left: 50%;
            margin-left: -13px;
            margin-top: -13px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spinner 0.8s linear infinite;
            z-index: 2;
        }

        @keyframes spinner {
            to { transform: rotate(360deg); }
        }

        /* Divisor */
        .divider {
            text-align: center;
            margin: 30px 0;
            position: relative;
        }

        .divider::before,
        .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 42%;
            height: 2px;
            background: linear-gradient(to right, transparent, #ffe0e9, transparent);
        }

        .divider::before { left: 0; }
        .divider::after { right: 0; }

        .divider-text {
            color: #ff8fab;
            background: white;
            padding: 0 15px;
            font-size: 13px;
            font-weight: 600;
            position: relative;
            z-index: 1;
        }

        /* Botones sociales */
        .social-buttons {
            display: flex;
            gap: 12px;
            margin-bottom: 30px;
        }

        .social-btn {
            flex: 1;
            padding: 15px;
            border: 2px solid #ffe0e9;
            border-radius: 15px;
            background: white;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-weight: 700;
            font-size: 14px;
            color: #333;
        }

        .social-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .social-btn.google:hover {
            border-color: #db4437;
            background: #fff5f5;
        }

        .social-btn.facebook:hover {
            border-color: #4267B2;
            background: #f5f7ff;
        }

        .social-btn i {
            font-size: 22px;
        }

        .google-icon { color: #db4437; }
        .facebook-icon { color: #4267B2; }

        /* Link de registro */
        .register-text {
            text-align: center;
            color: #666;
            font-size: 14px;
            font-weight: 500;
        }

        .register-link {
            color: #ff6b9d;
            font-weight: 800;
            text-decoration: none;
            transition: all 0.3s;
        }

        .register-link:hover {
            color: #ff8fab;
            text-decoration: underline;
        }

        /* Responsive móvil */
        @media (max-width: 768px) {
            .login-card {
                padding: 45px 35px;
                border-radius: 30px;
            }

            .logo-icon {
                width: 90px;
                height: 90px;
            }

            .logo-icon i {
                font-size: 45px;
            }

            .brand-title {
                font-size: 26px;
            }

            .brand-subtitle {
                font-size: 15px;
            }

            .social-buttons {
                flex-direction: column;
            }

            .bakery-item {
                font-size: 30px;
            }
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 15px;
            }

            .login-card {
                padding: 40px 30px;
            }

            .brand-title {
                font-size: 24px;
            }

            .form-input {
                padding: 15px 18px 15px 52px;
            }

            .login-button {
                padding: 17px;
                font-size: 15px;
            }

            .bakery-item {
                font-size: 25px;
            }
        }

        /* Animaciones de entrada */
        .form-group {
            animation: fadeInUp 0.6s ease-out backwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .form-options { animation: fadeInUp 0.6s ease-out 0.3s backwards; }
        .login-button { animation: fadeInUp 0.6s ease-out 0.4s backwards; }
        .divider { animation: fadeInUp 0.6s ease-out 0.5s backwards; }
        .social-buttons { animation: fadeInUp 0.6s ease-out 0.6s backwards; }
        .register-text { animation: fadeInUp 0.6s ease-out 0.7s backwards; }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
</head>
<body>
    <!-- Elementos flotantes de pastelería -->
    <div class="floating-bakery">
        <div class="bakery-item">🧁</div>
        <div class="bakery-item">🍰</div>
        <div class="bakery-item">🎂</div>
        <div class="bakery-item">🍪</div>
        <div class="bakery-item">🍩</div>
        <div class="bakery-item">🥐</div>
    </div>

    <!-- Partículas brillantes -->
    <div class="particles" id="particles"></div>

    <!-- Ondas decorativas -->
    <div class="waves">
        <div class="wave"></div>
        <div class="wave"></div>
    </div>

    <!-- Container principal -->
    <div class="login-container">
        <div class="login-card">
            <!-- Logo y marca -->
            <div class="logo-container">
                <div style="position: relative; display: inline-block;">
                    <div class="logo-ring"></div>
                    <div class="logo-ring"></div>
                    <div class="logo-icon">
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                </div>
                <h1 class="brand-title">Lunatic</h1>
                <p class="brand-subtitle">Sabores Únicos</p>
            </div>

            <!-- Formulario de login -->
            <form id="frm_login">
                <div class="form-group">
                    <label class="form-label" for="username">Usuario</label>
                    <div class="input-container">
                        <i class="fas fa-user input-icon"></i>
                        <input 
                            type="text" 
                            id="username" 
                            name="username" 
                            class="form-input"
                            placeholder="Ingresa tu usuario"
                            required
                            autocomplete="username"
                        >
                        <div class="input-focus-effect"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Contraseña</label>
                    <div class="input-container">
                        <i class="fas fa-lock input-icon"></i>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-input"
                            placeholder="Ingresa tu contraseña"
                            required
                            autocomplete="current-password"
                        >
                        <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                        <div class="input-focus-effect"></div>
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

            <!-- Divisor -->
            <div class="divider">
                <span class="divider-text">O continúa con</span>
            </div>

            <!-- Botones sociales -->
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

            <!-- Link de registro -->
            <div class="register-text">
                ¿No tienes una cuenta? <a href="#" class="register-link">Regístrate aquí</a>
            </div>
        </div>
    </div>

    <script>
        // Generar partículas brillantes
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = window.innerWidth < 768 ? 25 : 50;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                const x = Math.random() * window.innerWidth;
                const y = Math.random() * window.innerHeight;
                
                particle.style.left = x + 'px';
                particle.style.top = y + 'px';
                particle.style.animationDelay = Math.random() * 3 + 's';
                particle.style.animationDuration = (2 + Math.random() * 2) + 's';
                
                particlesContainer.appendChild(particle);
            }
        }

        createParticles();

        // Toggle de contraseña
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });

        // Función de inicio de sesión
        function iniciar_sesion() {
            const button = document.querySelector('.login-button');
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (!username || !password) {
                alert('Por favor, completa todos los campos');
                return;
            }

            button.classList.add('btn-loading');

            // Simulación - reemplazar con tu lógica real
            setTimeout(() => {
                button.classList.remove('btn-loading');
                // Aquí va tu función original de login
                // window.iniciar_sesion(); 
            }, 2000);
        }

        // Login con Google
        function loginWithGoogle() {
            console.log('Login con Google');
            // Implementar OAuth de Google
        }

        // Login con Facebook
        function loginWithFacebook() {
            console.log('Login con Facebook');
            // Implementar OAuth de Facebook
        }

        // Enviar con Enter
        document.getElementById('password').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                iniciar_sesion();
            }
        });

        // Animación al hacer focus en los inputs
        const inputs = document.querySelectorAll('.form-input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
    </script>

    <!-- Tu script original -->
    <script src="<?php echo BASE_URL; ?>view/function/user.js"></script>
</body>
</html>