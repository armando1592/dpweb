<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white text-center py-3">
            <h5 class="mb-0">
                <i class="fas fa-edit me-2"></i>Editar Categoría
            </h5>
        </div>
        
        <div class="card-body">
            <form id="frm_edit_categorie" action="" method="POST">
                <?php
                $categoria_id = "";
                // Verifica si 'views' está en la URL y si el array tiene el ID de la categoría.
                if (isset($_GET["views"])) {
                    $ruta = explode("/", $_GET["views"]);
                    if (count($ruta) > 1) {
                        $categoria_id = $ruta[1];
                    }
                }
                ?>
                <input type="hidden" name="id_categoria" id="id_categoria" value="<?= htmlspecialchars($categoria_id); ?>">

                <div class="mb-3 row">
                    <label for="nombre" class="col-sm-3 col-form-label fw-bold">Nombre</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="detalle" class="col-sm-3 col-form-label fw-bold">Detalle</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="detalle" name="detalle" required>
                    </div>
                </div>

                <hr class="my-4">

                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="submit" class="btn btn-primary btn-lg px-4">
                        <i class="fas fa-sync-alt me-2"></i>Actualizar
                    </button>
                    <a href="<?php echo BASE_URL; ?>categorias-lista" class="btn btn-secondary btn-lg px-4">
                        <i class="fas fa-times me-2"></i>Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo BASE_URL; ?>view/function/categoria.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        edit_categoria();
    });
</script>