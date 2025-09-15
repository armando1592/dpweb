<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white text-center py-3">
            <h5 class="mb-0">
                <i class="fas fa-edit me-2"></i>Editar Producto
            </h5>
        </div>
        
        <div class="card-body">
            <form id="frm_edit_producto" action="" method="POST">
                <?php
                $producto_id = "";
                // Verifica si 'views' está en la URL y si el array tiene el ID del producto.
                if (isset($_GET["views"])) {
                    $ruta = explode("/", $_GET["views"]);
                    if (count($ruta) > 1) {
                        $producto_id = $ruta[1];
                    }
                }
                ?>
                <input type="hidden" name="id_producto" id="id_producto" value="<?= htmlspecialchars($producto_id); ?>">

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
                            <label for="id_categoria" class="form-label fw-bold">Categoría</label>
                            <input type="number" class="form-control" id="id_categoria" name="id_categoria" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="precio" class="form-label fw-bold">Precio</label>
                            <input type="text" class="form-control" id="precio" name="precio" required>
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label fw-bold">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_vencimiento" class="form-label fw-bold">Fecha de Vencimiento</label>
                            <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" required>
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="submit" class="btn btn-primary btn-lg px-4">
                        <i class="fas fa-sync-alt me-2"></i>Actualizar
                    </button>
                    <a href="<?php echo BASE_URL; ?>productos-lista" class="btn btn-secondary btn-lg px-4">
                        <i class="fas fa-times me-2"></i>Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo BASE_URL; ?>view/function/producto.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        edit_producto();
    });
</script>