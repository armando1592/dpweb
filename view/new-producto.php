<div class="container my-5">
  <div class="card shadow-lg border-0 rounded-4">
    <!-- ENCABEZADO -->
    <div class="card-header bg-gradient bg-primary text-white text-center py-4 rounded-top-4">
      <h4 class="mb-0 fw-bold">
        <i class="fas fa-box me-2"></i>Registrar Producto
      </h4>
    </div>

    <!-- CUERPO -->
    <div class="card-body p-4">
      <form id="frm_product" action="" method="POST" enctype="multipart/form-data">
        <div class="row g-4">
          <!-- LADO IZQUIERDO -->
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input type="text" class="form-control shadow-sm" id="codigo" name="codigo" placeholder="Código" required>
              <label for="codigo"><i class="fas fa-barcode me-2 text-primary"></i>Código</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control shadow-sm" id="nombre" name="nombre" placeholder="Nombre" required>
              <label for="nombre"><i class="fas fa-tag me-2 text-primary"></i>Nombre</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control shadow-sm" id="detalle" name="detalle" placeholder="Detalle" required>
              <label for="detalle"><i class="fas fa-info-circle me-2 text-primary"></i>Detalle</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" step="0.01" class="form-control shadow-sm" id="precio" name="precio" placeholder="Precio" required>
              <label for="precio"><i class="fas fa-dollar-sign me-2 text-success"></i>Precio</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" class="form-control shadow-sm" id="stock" name="stock" placeholder="Stock" required>
              <label for="stock"><i class="fas fa-cubes me-2 text-warning"></i>Stock</label>
            </div>
          </div>

          <!-- LADO DERECHO -->
          <div class="col-md-6">
            <div class="mb-3">
              <label for="id_categoria" class="form-label fw-bold">
                <i class="fas fa-list-alt me-2 text-primary"></i>Categoría
              </label>
              <select name="id_categoria" id="id_categoria" class="form-select shadow-sm" required></select>
            </div>

            <div class="form-floating mb-3">
              <input type="date" class="form-control shadow-sm" id="fecha_vencimiento" name="fecha_vencimiento" required>
              <label for="fecha_vencimiento"><i class="fas fa-calendar-alt me-2 text-danger"></i>Fecha de Vencimiento</label>
            </div>

            <div class="mb-3">
              <label for="Imagen" class="form-label fw-bold">
                <i class="fas fa-image me-2 text-success"></i>Imagen
              </label>
              <input type="file" class="form-control shadow-sm" id="Imagen" name="Imagen" required>
            </div>

            <div class="mb-3">
              <label for="id_proveedor" class="form-label fw-bold">
                <i class="fas fa-truck me-2 text-secondary"></i>Proveedor
              </label>
              <select name="id_proveedor" id="id_proveedor" class="form-select shadow-sm" required></select>
            </div>
          </div>
        </div>

        <!-- BOTONES -->
        <hr class="my-4">

        <div class="d-flex flex-wrap justify-content-center gap-3">
          <button type="submit" class="btn btn-success btn-lg shadow-sm">
            <i class="fas fa-save me-2"></i>Registrar
          </button>
          <button type="reset" class="btn btn-warning btn-lg shadow-sm text-white">
            <i class="fas fa-eraser me-2"></i>Limpiar
          </button>
          <a href="<?php echo BASE_URL; ?>productos-lista" class="btn btn-info btn-lg shadow-sm text-white">
            <i class="fas fa-list me-2"></i>Ver Lista
          </a>
          <a href="<?php echo BASE_URL; ?>" class="btn btn-danger btn-lg shadow-sm">
            <i class="fas fa-times me-2"></i>Cancelar
          </a>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="<?php echo BASE_URL; ?>view/function/producto.js"></script>
<script>
   cargar_categorias();
   cargar_proveedores();
</script>

<style>
  .form-control:focus, .form-select:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.2rem rgba(13,110,253,.25);
  }
  .btn:hover {
    transform: scale(1.05);
    transition: 0.2s ease-in-out;
  }
</style>
