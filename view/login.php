<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>const base_url = '<?= BASE_URL; ?>';</script>
</head>
<body>
  <div class="container">
    <form class="login-box" id="frm_login" >
      <h2>LOGIN FORM</h2>
      <label for="username">USERNAME</label>
      <input type="text" id="username" name="username" placeholder="Enter Username" required>

      <label for="password">PASSWORD</label>
      <input type="password" id="password" name="password" placeholder="Enter Password" required>

      <button type="button" onclick="iniciar_sesion();">GET INTO</button>
    </form>
  </div>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body, html {
      height: 100%;
    }

    body {
      background-image: url('https://st3.depositphotos.com/3367263/17680/i/450/depositphotos_176805294-stock-photo-vignette-on-blue-brick-wall.jpg');
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      padding: 40px;
      border-radius: 10px;
      width: 300px;
      color: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.5);
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 20px;
      font-weight: 600;
    }

    .login-box label {
      font-size: 14px;
      margin-top: 10px;
      display: block;
    }

    .login-box input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      background: rgba(255, 255, 255, 0.1);
      border: none;
      border-radius: 5px;
      color: white;
    }

    .login-box input::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    .login-box button {
      width: 100%;
      padding: 10px;
      background-color: #ffffff33;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-box button:hover {
      background-color: #ffffff55;
    }
  </style>

<script src="<?php echo BASE_URL; ?>view/function/user.js"></script>



</body>
</html>