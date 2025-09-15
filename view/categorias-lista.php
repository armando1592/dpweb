<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="text-white bg-primary p-2 rounded w-100 text-center">LISTA DE CATEGORIAS</h5>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="input-group" style="width: 50%;">
            <input type="text" id="searchInput" class="form-control" placeholder="Buscar categoria...">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
        <a href="<?php echo BASE_URL; ?>new-categoria" class="btn btn-success d-flex align-items-center">
            <i class="fas fa-plus me-2"></i>Nueva Categoria
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered text-center">
            <thead class="bg-primary text-white">
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
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="<?php echo BASE_URL; ?>view/function/categoria.js"></script>
<script>
    // Lógica para el buscador dinámico
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let filter = this.value.toLowerCase();
        let rows = document.getElementById('content_categorias').getElementsByTagName('tr');
        for (let i = 0; i < rows.length; i++) {
            let cells = rows[i].getElementsByTagName('td');
            let found = false;
            for (let j = 0; j < cells.length; j++) {
                if (cells[j].textContent.toLowerCase().indexOf(filter) > -1) {
                    found = true;
                    break;
                }
            }
            rows[i].style.display = found ? '' : 'none';
        }
    });
</script>