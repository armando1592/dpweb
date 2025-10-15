<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white text-center py-3">
            <h5 class="mb-0">
                <i class="fas fa-plus me-2"></i>Registrar Categoría
            </h5>
        </div>
        
        <div class="card-body">
            <form id="frm_categorie" action="" method="POST">
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
                        <i class="fas fa-save me-2"></i>Registrar
                    </button>
                    <button type="reset" class="btn btn-info btn-lg px-4">
                        <i class="fas fa-eraser me-2"></i>Limpiar
                    </button>
                    <a href="<?php echo BASE_URL; ?>categorias-lista" class="btn btn-secondary btn-lg px-4">
                        <i class="fas fa-arrow-left me-2"></i>Cancelar
                    </a>
                     <a href="<?php echo BASE_URL; ?>categorias-lista" class="btn btn-secondary btn-lg px-4">
                        <i class="fas fa-arrow-left me-2"></i>Ver lista
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="<?php echo BASE_URL; ?>view/function/categoria.js"></script>