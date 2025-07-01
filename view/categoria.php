<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Categoría</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>view/bootstrap/css/bootstrap.min.css">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Definir base_url desde PHP -->
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>

    <style>
        .nav-brand {
            color: yellowgreen;
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-4">
        <div class="card mx-auto" style="max-width: 600px;">
            <h5 class="card-header text-center">CATEGORÍA</h5>
            <form id="categoriaForm">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nombre" class="col-sm-4 col-form-label"><strong>Nombre</strong></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="detalle" class="col-sm-4 col-form-label"><strong>Detalle</strong></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="detalle" name="detalle" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-8 offset-sm-4">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                            <button type="reset" class="btn btn-warning">Limpiar</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href=base_url">Cancelar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="<?php echo BASE_URL; ?>view/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>view/function/categoria.js"></script>

    
</body>

</html>