<div class="container mt-4">
    <!-- Encabezado con fondo degradado y sombra -->
    <div class="d-flex justify-content-between align-items-center p-3 mb-3 rounded shadow" style="background: linear-gradient(90deg, #0d6efd, #6610f2);">
        <h1 class="text-white fw-bold m-0" style="font-family: 'Verdana'; font-size: 1.8rem;">📂 Categorías Registradas</h1>
        <a href="<?php echo BASE_URL; ?>new-category" class="btn btn-outline-light fw-bold">
            <i class="bi bi-plus-circle"></i>  Agregar Nueva
        </a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nro</th>
                <th>Nombre</th>
                <th>Detalle</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="content_categorias">

        </tbody>
    </table>
</div>


<script src="<?= BASE_URL ?>view/function/category.js"></script>