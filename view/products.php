<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center p-3 mb-3 rounded shadow" style="background: linear-gradient(90deg, #572a63ff, #060506ff);">
        <h1 class="text-white fw-bold m-0" style="font-family: 'Verdana'; font-size: 1.8rem;">Lista de Productos</h1>
        <a href="<?= BASE_URL ?>new-product" class="btn btn-success">Nuevo +</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nro</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Detalle</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoria</th>
                <th>F.V.</th>
                <th>codigo barra</th>
                <th>Proveedor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="content_products">

        </tbody>
    </table>
</div>
<script src="<?= BASE_URL ?>view/function/products.js"></script>
<script src="<?= BASE_URL ?>view/function/JsBarcode.all.min.js"></script>