<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
</head>
<body>
    
  <div class="form-container">
    <h2>Categoria</h2>
    <form id="categoriaForm" action="" method="">
      <label for="nombre">Nombre de la Categoría:</label>
      <input type="text" id="nombre" name="nombre" placeholder="nombre..." required>

      <label for="descripcion">Descripción Detallada:</label>
      <textarea id="descripcion" name="descripcion" placeholder="Describe el contenido y alcance de la categoría..." required></textarea>

      <button type="submit">Guardar Categoría</button>
      <button type="submit">Cancelar Categoría</button>
    </form>

    <div class="success-message" id="successMsg">
      ✅ Categoría guardada correctamente.
    </div>
       <div class="success-message" id="successMsg">
      ✅ Categoría se cancelo.
    </div>
  </div>

  <style>
.form-container {
      max-width: 600px;
      margin: auto;
      background-color: #fff;
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #1a1a1a;
      text-align: center;
    }

    p.subtitle {
      text-align: center;
      color: #555;
      margin-top: -10px;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
      font-size: 1rem;
    }

    textarea {
      resize: vertical;
      height: 120px;
    }

    button {
      margin-top: 20px;
      background-color: #007bff;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
      font-size: 1rem;
    }

    button:hover {
      background-color: #0056b3;
    }

    .success-message {
      color: green;
      text-align: center;
      margin-top: 15px;
      display: none;
    }
  </style>

<script src="<?php echo BASE_URL; ?>view/function/categoria.js"></script>

</body>
</html>