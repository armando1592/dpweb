<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white text-center py-3">
            <h5 class="mb-0">
                <i class="fas fa-plus-circle me-2"></i>Registrar Producto
            </h5>
        </div>
        
        <div class="card-body">
            <form id="frm_product" action="" method="POST"enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="codigo" class="form-label fw-bold">Código</label>
                            <input type="text" class="form-control" id="codigo" name="codigo" required>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-bold">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="detalle" class="form-label fw-bold">Detalle</label>
                            <input type="text" class="form-control" id="detalle" name="detalle" required>
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label fw-bold">Precio</label>
                            <input type="text" class="form-control" id="precio" name="precio" required>
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label fw-bold">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" required>
                        </div>
                        <div class="mb-3">
                            <label for="id_categoria" class="form-label fw-bold">Categoría</label>
                            <select name="id_categoria" id="id_categoria"></select>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_vencimiento" class="form-label fw-bold">Fecha de Vencimiento</label>
                            <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" required>
                        </div>
                        <div class="mb-3">
                            <label for="Imagen" class="form-label fw-bold">Imagen</label>
                            <input type="file" class="form-control" id="Imagen" name="Imagen" required>
                        </div>
                        <div class="mb-3">
                            <label for="Id_Proveedor" class="form-label fw-bold">Id_Proveedor</label>
                            <input type="text" class="form-control" id="Id_Proveedor" name="Id_Proveedor" required>
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="submit" class="btn btn-primary btn-lg px-4">
                        <i class="fas fa-save me-2"></i>Registrar
                    </button>
                    <button type="reset" class="btn btn-info btn-lg px-4">
                        <i class="fas fa-eraser me-2"></i>Limpiar
                    </button>
                    <button type="reset" class="btn btn-info btn-lg px-4">
                        <i class="fas fa-eraser me-2"></i>Cancelar
                    </button>
                    <a href="<?php echo BASE_URL; ?>productos-lista" class="btn btn-secondary btn-lg px-4">
                        <i class="fas fa-list me-2"></i>Ver Lista
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="<?php echo BASE_URL; ?>view/function/producto.js"></script>
<script>
   cargar_categorias();
</script>