<!-- LISTA DE PRODUCTOS -->
<div class="container mt-5">
  <div class="card shadow-lg border-0 rounded-3">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
      <h5 class="mb-0"><i class="fas fa-boxes me-2"></i>Lista de Productos</h5>
      <button class="btn btn-light btn-sm text-primary fw-bold">
      <a href="<?php echo BASE_URL; ?>new-producto" class="btn btn-success d-flex align-items-center">
            <i class="fas fa-plus me-2"></i>Nuevo producto
        </a>
      </button>
    </div>

    <div class="card-body p-4">
      <div class="table-responsive">
        <table class="table table-hover align-middle text-center border rounded-3 shadow-sm">
          <thead class="bg-primary text-white">
            <tr>
              <th scope="col">#</th>
              <th scope="col"><i class="fas fa-barcode me-1"></i>Código</th>
              <th scope="col"><i class="fas fa-tag me-1"></i>Nombre</th>
              <th scope="col"><i class="fas fa-dollar-sign me-1"></i>Precio</th>
              <th scope="col"><i class="fas fa-cubes me-1"></i>Stock</th>
              <th scope="col"><i class="fas fa-layer-group me-1"></i>Categoría</th>
              <th scope="col"><i class="fas fa-truck me-1"></i>Proveedor</th>
              <th scope="col"><i class="fas fa-calendar-alt me-1"></i>Fecha de Vencimiento</th>
              <th scope="col"><i class="fas fa-cogs me-1"></i>Acciones</th>
            </tr>
          </thead>

          <tbody id="content_productos" class="table-light">
            <!-- Contenido dinámico -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Estilos personalizados -->
<style>
  .card-header {
    background: linear-gradient(90deg, #007bff, #0056b3);
  }

  .table thead {
    background: linear-gradient(90deg, #007bff, #0048a5);
    color: white;
  }

  .table tbody tr:hover {
    background-color: #eaf2ff !important;
    transition: background-color 0.3s ease;
  }

  .btn-action {
    border: none;
    background: none;
    cursor: pointer;
    transition: transform 0.2s ease;
  }

  .btn-action:hover {
    transform: scale(1.2);
  }

  .btn-action i {
    font-size: 1.1rem;
  }

  .btn-view i {
    color: #0d6efd;
  }

  .btn-edit i {
    color: #ffc107;
  }

  .btn-delete i {
    color: #dc3545;
  }
</style>

<!-- Script de funciones -->
<script src="<?php echo BASE_URL; ?>view/function/producto.js"></script>
