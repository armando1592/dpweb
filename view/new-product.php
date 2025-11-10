<div class="container-fluid py-4">
    <div class="card shadow-lg">
        <h5 class="card-header bg-primary text-white">
            <i class="fas fa-box-open me-2"></i> 📦 Registro de Producto
        </h5>
        <form id="frm_product" action="" method="" enctype="multipart/form-data">
            <div class="card-body">

                <h6 class="text-primary mb-3"><i class="fas fa-info-circle me-1"></i> Información General</h6>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="codigo" class="form-label"><i class="fas fa-barcode me-1"></i> Código:</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el código único" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nombre" class="form-label"><i class="fas fa-tag me-1"></i> Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="detalle" class="form-label"><i class="fas fa-align-left me-1"></i> Detalle/Descripción:</label>
                    <textarea class="form-control" id="detalle" name="detalle" rows="3" placeholder="Descripción detallada del producto" required></textarea>
                </div>

                <hr class="my-4">

                <h6 class="text-primary mb-3"><i class="fas fa-dollar-sign me-1"></i> Precio y Existencias</h6>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="precio" class="form-label"><i class="fas fa-hand-holding-usd me-1"></i> Precio (S/):</label>
                        <input type="number" class="form-control" id="precio" name="precio" step="0.01" min="0" placeholder="0.00" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="stock" class="form-label"><i class="fas fa-boxes me-1"></i> Stock Inicial:</label>
                        <input type="number" class="form-control" id="stock" name="stock" min="0" placeholder="0" required>
                    </div>
                </div>

                <hr class="my-4">

                <h6 class="text-primary mb-3"><i class="fas fa-link me-1"></i> Relaciones y Logística</h6>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="id_categoria" class="form-label"><i class="fas fa-sitemap me-1"></i> Categoría:</label>
                        <select class="form-select" name="id_categoria" id="id_categoria" required>
                            <option value="">Seleccione Categoría</option>
                            </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="id_proveedor" class="form-label"><i class="fas fa-truck me-1"></i> Proveedor:</label>
                        <select class="form-select" id="id_proveedor" name="id_proveedor" required>
                            <option value="">Seleccione Proveedor</option>
                            </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="fecha_vencimiento" class="form-label"><i class="fas fa-calendar-alt me-1"></i> Fec. Vencimiento:</label>
                        <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" required>
                    </div>
                </div>

                <hr class="my-4">

                <h6 class="text-primary mb-3"><i class="fas fa-image me-1"></i> Imagen del Producto</h6>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Subir Imagen (JPG, JPEG, PNG):</label>
                    <input type="file" class="form-control" id="imagen" name="imagen" accept=".jpg, .jpeg, .png" required>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-success me-2">
                        <i class="fas fa-save me-1"></i> Registrar
                    </button>
                    <button type="reset" class="btn btn-warning me-2">
                        <i class="fas fa-broom me-1"></i> Limpiar
                    </button>
                    <a href="<?= BASE_URL ?>products" class="btn btn-danger">
                        <i class="fas fa-times-circle me-1"></i> Cancelar
                    </a>
                </div>

            </div>
        </form>
    </div>
</div>
<script src="<?php echo BASE_URL; ?>view/function/products.js"></script>
<script>
    cargar_categorias();
    cargar_proveedores();
</script>