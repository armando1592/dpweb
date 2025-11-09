<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        /* Partículas flotantes de fondo - Solo CSS */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .particle:nth-child(1) { 
            width: 80px; 
            height: 80px; 
            top: 20%; 
            left: 10%; 
            animation-delay: 0s; 
        }
        .particle:nth-child(2) { 
            width: 60px; 
            height: 60px; 
            top: 60%; 
            left: 70%; 
            animation-delay: 2s; 
        }
        .particle:nth-child(3) { 
            width: 100px; 
            height: 100px; 
            top: 80%; 
            left: 20%; 
            animation-delay: 4s; 
        }
        .particle:nth-child(4) { 
            width: 40px; 
            height: 40px; 
            top: 30%; 
            left: 80%; 
            animation-delay: 1s; 
        }
        .particle:nth-child(5) { 
            width: 120px; 
            height: 120px; 
            top: 10%; 
            left: 60%; 
            animation-delay: 3s; 
        }
        .particle:nth-child(6) { 
            width: 70px; 
            height: 70px; 
            top: 70%; 
            left: 50%; 
            animation-delay: 2.5s; 
        }
        .particle:nth-child(7) { 
            width: 90px; 
            height: 90px; 
            top: 40%; 
            left: 30%; 
            animation-delay: 1.5s; 
        }

        @keyframes float {
            0%, 100% { 
                transform: translateY(0px) rotate(0deg); 
                opacity: 0.3;
            }
            33% { 
                transform: translateY(-30px) rotate(120deg); 
                opacity: 0.6;
            }
            66% { 
                transform: translateY(20px) rotate(240deg); 
                opacity: 0.4;
            }
        }

        /* Efectos de onda en el fondo */
        .wave {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.1));
            transform: rotate(-12deg);
            animation: wave 8s ease-in-out infinite;
        }

        @keyframes wave {
            0%, 100% { transform: rotate(-12deg) translateX(-20px); }
            50% { transform: rotate(-8deg) translateX(20px); }
        }

        /* Anillo pulsante */
        .pulse-ring {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 200px;
            height: 200px;
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            animation: pulse 4s ease-in-out infinite;
            pointer-events: none;
        }

        @keyframes pulse {
            0% {
                transform: translate(-50%, -50%) scale(0.8);
                opacity: 1;
            }
            100% {
                transform: translate(-50%, -50%) scale(2);
                opacity: 0;
            }
        }

        /* Contenedor principal - Adaptado a tu estructura */
        .login-container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 10;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            padding: 40px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            border-radius: 20px;
            width: 400px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: slideIn 1s ease-out;
            position: relative;
        }

        /* Efecto de brillo */
        .login-box::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #ff6b6b, #ee5a24, #667eea, #764ba2);
            border-radius: 22px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
            animation: glow 2s ease-in-out infinite alternate;
        }

        .login-box:hover::before {
            opacity: 1;
        }

        @keyframes glow {
            from { filter: blur(10px); }
            to { filter: blur(20px); }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-box h2 {
            margin-bottom: 30px;
            text-align: center;
            color: white;
            font-size: 28px;
            font-weight: 600;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            animation: titleGlow 2s ease-in-out infinite alternate;
        }

        @keyframes titleGlow {
            from { text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3); }
            to { text-shadow: 0 2px 20px rgba(255, 255, 255, 0.4); }
        }

        /* Campos de entrada mejorados */
        .login-box input {
            width: 100%;
            padding: 15px 20px;
            margin: 15px 0;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            color: white;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .login-box input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .login-box input:focus {
            border-color: rgba(255, 255, 255, 0.6);
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* Botón mejorado */
        .login-box button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .login-box button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .login-box button:hover::before {
            left: 100%;
        }

        .login-box button:hover {
            background: linear-gradient(135deg, #ee5a24, #ff6b6b);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(238, 90, 36, 0.4);
        }

        .login-box button:active {
            transform: translateY(-1px);
        }

        /* Animaciones de aparición */
        #frm_login {
            animation: fadeInUp 0.6s ease-out 0.3s both;
        }

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

        /* Responsive */
        @media (max-width: 480px) {
            .login-box {
                width: 90%;
                padding: 30px 20px;
            }
            
            .login-box h2 {
                font-size: 24px;
            }
        }
    </style>
    <script>
        const base_url = '<?php BASE_URL; ?> ';
    </script>
</head>
<body>
    <!-- Partículas de fondo -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Efecto de onda -->
    <div class="wave"></div>

    <!-- Anillo pulsante -->
    <div class="pulse-ring"></div>

    <!-- Tu estructura original pero con diseño impresionante -->
    <div class="login-container">
        <div class="login-box">
            <h2>Iniciar Sesión</h2>
            <form id="frm_login">
                <input type="text" placeholder="Usuario" id="username" name="username" required>
                <input type="password" placeholder="Contraseña" id="password" name="password" required>
                <button type="button" onclick="iniciar_sesion();">Entrar</button>
            </form>
        </div>
    </div>

    <script src="<?=BASE_URL; ?>view/function/user.js"></script>
</body>
</html>