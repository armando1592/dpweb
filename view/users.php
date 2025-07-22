<div class="container">
  <div class="titulo">
    <h3>Lista de Usuarios</h3>
  </div>
  <div class="tabla-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Nro</th>
          <th>DNI</th>
          <th>Apellidos y nombres</th>
          <th>Correo</th>
          <th>Rol</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody id="content_users">
        <!-- Datos dinámicos -->
      </tbody>
    </table>
  </div>
</div>


<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f7f9;
    margin: 0;
    padding: 2rem;
  }

  .container {
    max-width: 1000px;
    margin: auto;
    margin-top: 15px;
    padding: 1.5rem;
    background-color: #c0c2c5ff;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
  }

  .titulo {
    text-align: center;
    padding: 1.2rem;
    color: white;
    background: linear-gradient(90deg, #9c6fccff, #72dbcdff);
    border-radius: 12px;
    margin-bottom: 1.5rem;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
  }

  .titulo h3 {
    margin: 0;
    font-size: 1.5rem;
    letter-spacing: 1px;
  }

  .tabla-responsive {
    width: 100%;
    overflow-x: auto;
    border-radius: 10px;
  }

  .table {
    width: 100%;
    border-collapse: collapse;
    min-width: 700px; /* Asegura desplazamiento en pantallas pequeñas */
  }

  .table th,
  .table td {
    border: 1px solid #645f46ff;
    padding: 1rem;
    text-align: center;
    font-size: 0.95rem;
    color: #333;
    white-space: nowrap; /* Evita que el texto se rompa */
  }

  .table thead {
    background-color: #2575fc;
    color: #ffffff;
  }

  .table tbody tr:hover {
    background-color: #eef3ff;
    transition: background 0.3s ease;
  }

  @media screen and (max-width: 768px) {
    .container {
      padding: 1rem;
    }

    .titulo h3 {
      font-size: 1.2rem;
    }
  }
</style>




 <script src="<?php echo BASE_URL; ?>view/function/user.js"></script>

