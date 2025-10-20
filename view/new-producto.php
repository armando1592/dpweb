<!-- inicio de cuerpo de pagina -->
<div class="container" style="margin-top: 100px;">
    <div class="card">
        <div class="card-header" style="text-align:center;">
            Registrar Producto
        </div>
        <form id="frm_product" action="" method="" enctype="multipart/form-data">
            <div class="card-body">

                <div class="mb-3 row">
                    <label for="codigo" class="col-sm-2 col-form-label">codigo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="codigo" name="codigo" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nombre" class="col-sm-2 col-form-label">nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="detalle" class="col-sm-2 col-form-label">detalle</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="detalle" name="detalle" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="precio" class="col-sm-2 col-form-label">precio</label>
                    <div class="col-sm-10">
                        <input type="decimal" class="form-control" id="precio" name="precio" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="stock" class="col-sm-2 col-form-label">stock</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="stock" name="stock" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="id_categoria" class="col-sm-2 col-form-label">Categoría</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="id_categoria" name="id_categoria" required>
                            <option value="">Seleccione una categoría</option>
                            <!-- Las opciones se cargarán dinámicamente con JavaScript -->
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="fecha_vencimiento" class="col-sm-2 col-form-label">fecha_vencimiento</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="imagen" class="col-sm-2 col-form-label">Imagen</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="imagen" name="imagen"  accept="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="id_proveedor" class="col-sm-2 col-form-label">Proveedor</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="id_proveedor" name="id_proveedor" required>
                            <option value="">Seleccione un proveedor</option>
                            <!-- Las opciones se cargarán dinámicamente con JavaScript -->
                        </select>
                    </div>
                </div>

                <div style="display: flex; justify-content:center; gap:20px">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <button type="reset" class="btn btn-info">Limpiar</button>
                    <button type="button" class="btn btn-danger">Cancelar</button>
                    <a href="<?php echo BASE_URL; ?>productos-lista" class="btn btn-success">ver</a>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- fin de cuerpo de pagina -->
<script src="<?php echo BASE_URL; ?>view/function/producto.js"></script>

<script> 
    document.addEventListener('DOMContentLoaded', function() {
        cargar_categorias();
        cargar_proveedores();
    });
</script>
<!--
<script>
    document.addEventListener('DOMContentLoaded', () => {
        let partes = window.location.pathname.split('/');
        let id = partes[partes.length - 1];

        cargarCategorias(); // Cargar categorías primero

        if (!isNaN(id)) {
            obtenerProductoPorId(id); // Luego cargar el producto para seleccionar la categoría
        }
    });
</script>-->