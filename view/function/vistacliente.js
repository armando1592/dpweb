fetch('control/ProductoController.php?tipo=listarCliente')
  .then(res => res.json())
  .then(data => {
    if (data.status) {
      let productosHTML = '';
      data.data.forEach(prod => {
        productosHTML += `
          <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
              <img src="${base_url}${prod.imagen}" class="card-img-top img-fluid" alt="${prod.nombre}" style="height:200px; object-fit:cover;">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title fw-bold">${prod.nombre}</h5>
                <p class="card-text text-truncate" style="height:40px;">${prod.detalle}</p>
                <p class="text-primary fw-bold fs-5">S/ ${prod.precio}</p>
                <div class="mt-auto d-flex">
                  <button class="btn btn-info btn-sm small rounded-pill px-2 me-2">
                    <i class="bi bi-eye me-1"></i> Detalle
                  </button>
                  <button class="btn btn-primary btn-sm small rounded-pill px-2 btn-cart">
                    <i class="bi bi-cart-plus me-1"></i> Agregar
                  </button>
                </div>
              </div>
            </div>
          </div>
        `;
      });
      document.getElementById('productos-container').innerHTML = productosHTML;
    } else {
      document.getElementById('productos-container').innerHTML =
        `<p class="text-center text-danger">${data.msg}</p>`;
    }
  })
  .catch(err => console.error('Error al cargar productos:', err));