<div class="container mt-4">
    <!-- Encabezado -->
    <div class="arriba d-flex flex-wrap justify-content-between align-items-center p-3 mb-4 rounded shadow">
        <h3 class="fw-bold text-uppercase mb-2 mb-md-0 text-white">
            <i class="bi bi-truck"></i> Lista de Proveedores
        </h3>
        <div class="d-flex gap-3">
            <a href="<?= BASE_URL ?>users" class="btn btn-outline-light fw-semibold">
                <i class="bi bi-people-fill"></i> Usuarios
            </a>
            <a href="<?= BASE_URL ?>new-proveedor" class="btn btn-light fw-semibold text-primary">
                <i class="bi bi-plus-circle"></i> Nuevo
            </a>
        </div>
    </div>

    <!-- Tabla -->
    <div class="table-responsive bg-white p-3 rounded shadow">
        <table class="table table-bordered table-hover align-middle mb-0">
            <thead class="text-center text-white">
                <tr style="background: linear-gradient(90deg, #007bff, #6610f2);">
                    <th>#</th>
                    <th>DNI</th>
                    <th>Nombres y Apellidos</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="content_proveedor">
                <!-- Aquí se insertan los datos dinámicamente -->
            </tbody>
        </table>
    </div>
</div>

<!-- Estilos mejorados -->
<style>
body {
    background: #f2f3f7;
    font-family: 'Poppins', sans-serif;
}

.arriba {
    background: linear-gradient(90deg, #007bff, #6610f2);
    border-radius: 12px;
}

.container h3 {
    letter-spacing: 1px;
}

.btn {
    border-radius: 10px;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.table {
    border-radius: 10px;
    overflow: hidden;
}

.table thead th {
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.table tbody tr:hover {
    background-color: #f8f9fa;
    transition: background 0.3s ease;
}

.table td, .table th {
    vertical-align: middle;
    text-align: center;
}

@media (max-width: 768px) {
    .arriba {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 1rem;
    }

    .arriba h3 {
        font-size: 1.3rem;
    }

    .btn {
        font-size: 0.9rem;
        padding: 8px 14px;
    }
}
</style>

<!-- Script -->
<script src="<?= BASE_URL ?>view/function/proveedor.js"></script>
