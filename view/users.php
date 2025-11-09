<div class="container">
    <h3 class="mt-3 mb-3">🧑‍💻Lista de Usuario</h3>
    <table class="table table-bordered table-striped">
        <a href="<?php echo BASE_URL; ?>new-user" class="btn btn-info">
            New User
        </a>
        <thead>
            <tr>
                <th>Nro</th>
                <th>DNI</th>
                <th>Nombres y Apellidos</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="content_users">

        </tbody>
    </table>
    <style>


.container {
    background: white;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(6, 6, 133, 0.1);
    color: #2723b0ff;
    margin: 20px auto;
}


.container h3 {
    color: #2c3e50;
    border-bottom: 2px solid #3498db;
    
}


.btn-info {
    background: #1f17b8ff;
    border-color: #c03d1cff;
    color: white;
    padding: 8px 16px;
    border-radius: 5px;
    margin-bottom: 15px;
}


.table thead th {
    background-color: #3c24b4ff;
    color: white;
    text-align: center;
    border-color: #2bba0eff;
}
</style>
</div>
<script src="<?= BASE_URL ?>view/function/user.js"></script>
<!--<script>view_users();</script> -->