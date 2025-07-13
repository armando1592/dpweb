<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>

</head>

<body>
    <style>
        body {
            font-family: sans-serif;
            background-color: rgba(227, 221, 221, 0.73);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            text-align: center;
        }

        .error-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 50%;
        
        }

        h1 {
            font-size: 4em;
            color:rgb(80, 27, 49);
            /* Un rojo llamativo */
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color:rgb(112, 141, 79);
            color: #fff;
            text-decoration: none;
            border-radius: 15px;
            font-weight: bold;
        
        }

        .button:hover {
            background-color:rgb(12, 169, 172);
          
        }

        /* Estilos adicionales para hacerlo más visual (opcional) */
        .sad-face {
            font-size: 5em;
            color: #ffc107;
            /* Un amarillo de advertencia */
            margin-bottom: 20px;
        }
    </style>
    <div class="error-container">
        <h3>¡Oops! Página no encontrada especialista</h3    >
        <p>Error</p>
        <a href="/view/principal.php" class="button">Volver a la página principal</a>
    </div>
</body>

</html>