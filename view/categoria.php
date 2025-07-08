
    <!-- INICIO CUERPO DE LA PAGINA -->
    <div class="container-fluid mt-5">
        <div class="card mx-auto" style="max-width: 600px;">
            <h5 class="card-header text-center">REGISTRO DE CATEGORÍA</h5>
            <form id="categoriaForm">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nombre" class="col-sm-4 col-form-label">Nombre:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="detalle" class="col-sm-4 col-form-label">Detalle:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="detalle" name="detalle" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-8 offset-sm-4 d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                            <button type="reset" class="btn btn-warning">Limpiar</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href = base_url;">Cancelar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<!-- FIN DE CUERPO DE PAGINA -->
 

