<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Catálogo de Alimentos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .product-card { transition: transform 0.15s ease-in-out; }
    .product-card:hover { transform: translateY(-6px); }
    .price-btn { min-width: 100px; }
    .carousel-img { height: 360px; object-fit: cover; }
    @media (max-width:576px){ .carousel-img { height: 220px; } }
  </style>
</head>
<body>



<!-- Carrusel principal -->
<div id="heroCarousel" class="carousel slide mt-3" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=1200" class="d-block w-100 carousel-img" alt="Frutas frescas">
      <div class="carousel-caption d-none d-md-block">
        <h3>Frutas Frescas</h3>
        <p>La mejor selección de frutas naturales para tu mesa.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1543353071-087092ec393a?w=1200" class="d-block w-100 carousel-img" alt="Verduras">
      <div class="carousel-caption d-none d-md-block">
        <h3>Verduras Orgánicas</h3>
        <p>De la granja directamente a tu hogar.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1604908177520-472c0eb70f67?w=1200" class="d-block w-100 carousel-img" alt="Snacks">
      <div class="carousel-caption d-none d-md-block">
        <h3>Snacks Saludables</h3>
        <p>Deliciosos, prácticos y nutritivos.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

<!-- Catálogo -->
<div class="container my-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 id="catalog">Catálogo de Alimentos</h2>
    <div class="d-flex gap-2">
      <select class="form-select" id="filterCategory" style="width:200px">
        <option value="all">Todas las categorías</option>
        <option value="fruta">Fruta</option>
        <option value="verdura">Verdura</option>
        <option value="snack">Snack</option>
      </select>
      <input id="searchInput" class="form-control" style="width:280px" placeholder="Buscar por nombre...">
    </div>
  </div>

  <div class="row g-3" id="productsRow">

    <div class="col-12 col-md-6 col-lg-4 product-item" data-category="fruta">
      <div class="card product-card h-100">
        <img src="https://images.unsplash.com/photo-1574226516831-e1dff420e12a?w=900" class="card-img-top" style="height:220px;object-fit:cover" alt="Manzanas">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Manzanas Rojas</h5>
          <p class="mb-1"><span class="badge bg-danger">Fruta</span></p>
          <p class="card-text text-muted small">Frescas, dulces y perfectas para tus snacks o postres.</p>
          <div class="mt-auto d-flex justify-content-between align-items-center">
            <button class="btn btn-outline-primary price-btn" disabled>S/ 4.50 / kg</button>
            <div>
              <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#moreModal" data-name="Manzanas Rojas" data-price="S/ 4.50 / kg" data-cat="Fruta">Más</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 product-item" data-category="verdura">
      <div class="card product-card h-100">
        <img src="https://images.unsplash.com/photo-1510626176961-4b37d6af9f22?w=900" class="card-img-top" style="height:220px;object-fit:cover" alt="Lechuga">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Lechuga Orgánica</h5>
          <p class="mb-1"><span class="badge bg-success">Verdura</span></p>
          <p class="card-text text-muted small">Hojas frescas ideales para ensaladas nutritivas.</p>
          <div class="mt-auto d-flex justify-content-between align-items-center">
            <button class="btn btn-outline-primary price-btn" disabled>S/ 2.80 / und</button>
            <div>
              <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#moreModal" data-name="Lechuga Orgánica" data-price="S/ 2.80 / und" data-cat="Verdura">Más</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 product-item" data-category="snack">
      <div class="card product-card h-100">
        <img src="https://images.unsplash.com/photo-1606755962773-0f3c20b6b27a?w=900" class="card-img-top" style="height:220px;object-fit:cover" alt="Mix de frutos secos">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Mix de Frutos Secos</h5>
          <p class="mb-1"><span class="badge bg-warning text-dark">Snack</span></p>
          <p class="card-text text-muted small">Almendras, nueces y pasas para una merienda saludable.</p>
          <div class="mt-auto d-flex justify-content-between align-items-center">
            <button class="btn btn-outline-primary price-btn" disabled>S/ 8.90 / pack</button>
            <div>
              <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#moreModal" data-name="Mix de Frutos Secos" data-price="S/ 8.90 / pack" data-cat="Snack">Más</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Modal Detalle -->
<div class="modal fade" id="moreModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detalle del producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <img id="modalImg" src="https://images.unsplash.com/photo-1574226516831-e1dff420e12a?w=900" class="img-fluid rounded" alt="Producto">
          </div>
          <div class="col-md-6">
            <h4 id="modalName">Nombre</h4>
            <p><strong>Categoría:</strong> <span id="modalCat"></span></p>
            <p><strong>Precio:</strong> <span id="modalPrice"></span></p>
            <p id="modalDesc">Detalles sobre el producto. Información nutricional, origen, conservación y recomendaciones.</p>
            <div class="d-flex gap-2">
              <button class="btn btn-primary">Comprar ahora</button>
              <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="bg-success text-light py-3 mt-4">
  <div class="container d-flex justify-content-between">
    <small>© FoodMarket 2025</small>
    <div>Contacto: ventas@foodmarket.example</div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const filter = document.getElementById('filterCategory');
  const search = document.getElementById('searchInput');
  const items = document.querySelectorAll('.product-item');

  function applyFilter() {
    const cat = filter.value;
    const q = search.value.toLowerCase();
    items.forEach(it => {
      const name = it.querySelector('.card-title').textContent.toLowerCase();
      const itemCat = it.getAttribute('data-category');
      const matchCat = (cat === 'all') || (itemCat === cat);
      const matchSearch = name.includes(q);
      it.style.display = (matchCat && matchSearch) ? '' : 'none';
    });
  }
  filter.addEventListener('change', applyFilter);
  search.addEventListener('input', applyFilter);

  const moreModal = document.getElementById('moreModal');
  moreModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget;
    const name = button.getAttribute('data-name');
    const price = button.getAttribute('data-price');
    const cat = button.getAttribute('data-cat');
    moreModal.querySelector('#modalName').textContent = name;
    moreModal.querySelector('#modalPrice').textContent = price;
    moreModal.querySelector('#modalCat').textContent = cat;
  });
</script>
</body>
</html>
