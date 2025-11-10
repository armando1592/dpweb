<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<div class="container mt-5">
    <!-- Header con gradiente moderno -->
    <div class="card border-0 shadow-sm mb-4 overflow-hidden">
        <div class="card-header bg-gradient text-white border-0 p-4" style="background: linear-gradient(135deg, #c65681ff 0%, #71cb6cff 100%);">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="h3 fw-bold m-0 d-flex align-items-center gap-2" style="font-family: 'Inter', sans-serif;">
                    <span class="badge bg-light text-primary rounded-pill px-3 py-2 fs-6">🛍️</span>
                    Lista de Productos
                </h1>
                <a href="<?= BASE_URL ?>new-product" class="btn btn-light btn-lg fw-semibold d-flex align-items-center gap-2 shadow-sm hover-scale">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    Nuevo Producto
                </a>
            </div>
        </div>
    </div>

    <!-- Tabla elegante -->
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" style="font-family: 'Inter', sans-serif;">
                    <thead class="bg-light text-muted text-uppercase small">
                        <tr>
                            <th class="ps-4 fw-semibold">Nro</th>
                            <th class="fw-semibold">Código</th>
                            <th class="fw-semibold">Nombre</th>
                            <th class="fw-semibold">Detalle</th>
                            <th class="fw-semibold">Precio</th>
                            <th class="fw-semibold">Stock</th>
                            <th class="fw-semibold">Categoría</th>
                            <th class="fw-semibold">F.V.</th>
                            <th class="fw-semibold">Proveedor</th>
                            <th class="text-center fw-semibold pe-4">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="content_products" class="text-dark">
                        <!-- Los productos se cargan aquí vía JS -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Estilos personalizados -->
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #f163bbff 0%, #c4995dff 100%);
    }

    body {
        font-family: 'Inter', sans-serif;
        background: #f8f9fa;
    }

    .bg-gradient {
        background: var(--primary-gradient) !important;
    }

    .hover-scale {
        transition: all 0.2s ease;
    }
    .hover-scale:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3) !important;
    }

    .table th {
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        border-bottom: 2px solid #e9ecef;
    }

    .table td {
        vertical-align: middle;
        font-size: 0.95rem;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f3ff !important;
        transform: scale(1.01);
        transition: all 0.2s ease;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }

    .badge {
        font-weight: 600;
    }

    /* Botones de acción (ejemplo para cuando los agregues en JS) */
    .btn-action {
        width: 36px;
        height: 36px;
        padding: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.2s ease;
    }

    .btn-action:hover {
        transform: translateY(-2px);
    }
</style>

<script src="<?= BASE_URL ?>view/function/products.js"></script>