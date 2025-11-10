<!-- Asegúrate de tener esto en tu <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container mt-4">
    <!-- Encabezado -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center p-4 mb-4 rounded-4 shadow-sm"
        style="background: linear-gradient(90deg, #d1c67dff, #6f42c1);">
        <h1 class="text-white fw-bold mb-3 mb-md-0" style="font-family: 'Poppins', sans-serif; font-size: 1.8rem;">
            <i class="bi bi-folder2-open me-2"></i>Categorías Registradas
        </h1>
        <a href="<?= BASE_URL ?>new-category" class="btn btn-light btn-lg fw-semibold shadow-sm">
            <i class="bi bi-plus-circle me-1"></i> Agregar Nueva
        </a>
    </div>

    <!-- Tarjeta contenedora -->
    <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header bg-light d-flex justify-content-between align-items-center py-3 rounded-top-4">
            <h5 class="fw-bold text-primary m-0"><i class="bi bi-list-ul me-2"></i>Lista de Categorías</h5>
            <div>
                <input type="text" id="searchCategoria" class="form-control form-control-sm d-inline-block"
                    placeholder="🔍 Buscar categoría..." style="width: 250px;">
            </div>
        </div>

        <div class="card-body p-0">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-primary text-center">
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th style="width: 25%;">Nombre</th>
                        <th style="width: 45%;">Detalle</th>
                        <th style="width: 25%;">Acciones</th>
                    </tr>
                </thead>
                <tbody id="content_categorias" class="text-center">
                    <!-- Contenido dinámico -->
                </tbody>
            </table>
        </div>

        <div class="card-footer text-muted text-center py-3">
            <small><i class="bi bi-info-circle"></i> Mostrando las categorías registradas en el sistema</small>
        </div>
    </div>
</div>

<!-- Script de funciones -->
<script src="<?= BASE_URL ?>view/function/category.js"></script>

<!-- Estilos adicionales (puedes ponerlos en tu CSS principal) -->
<style>
    body {
        background-color: #f8f9fa;
    }

    .table th {
        font-weight: 600;
    }

    .table-hover tbody tr:hover {
        background-color: #eef4ff !important;
    }

    .btn-light:hover {
        background-color: #cbc2d7ff;
        color: #b15324ff;
        border-color: #c9db89ff;
        transform: scale(1.03);
        transition: 0.3s;
    }

    #searchCategoria {
        border-radius: 2rem;
        border: 1px solid #ced4da;
        transition: 0.3s;
    }

    #searchCategoria:focus {
        border-color: #79327aff;
        box-shadow: 0 0 0 0.2rem rgba(209, 253, 13, 0.25);
    }
</style>
