<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🛒 Catálogo de Productos</title>

  <!-- Bootstrap y dependencias -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>view/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <script>
    const base_url = '<?php echo BASE_URL; ?>';
  </script>
</head>

<body class="bg-dark text-light">

  <div class="container-fluid py-4">
    <div class="row g-4">

      <!-- Catálogo de productos -->
      <div class="col-lg-9 col-md-8">
        <h1 class="text-center fw-bold mb-4">
          <i class="bi bi-shop text-primary"></i> Catálogo de Productos
        </h1>

        <div class="row g-4" id="productos-container">
          <!-- Aquí se cargan las tarjetas de productos -->
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card bg-secondary border-0 text-white h-100 ">
              <div class="ratio ratio-4x3">
                <img src="https://via.placeholder.com/400x250" class="card-img-top img-fluid rounded-top object-fit-cover" alt="Producto">
              </div>
              <div class="card-body text-center d-flex flex-column justify-content-between">
                <div>
                  <h5 class="card-title">Nombre del Producto</h5>
                  <p class="mb-1 text-warning fw-bold">S/ 100.00</p>
                  <p class="text-muted small mb-3">Categoría: Electrónica</p>
                </div>
                <button class="btn btn-primary btn-sm mt-auto">
                  <i class="bi bi-cart-plus me-1"></i> Agregar
                </button>
              </div>
            </div>
          </div>

          <!-- Más productos dinámicos aquí -->
        </div>
      </div>

      <!-- Carrito lateral -->
      <div class="col-lg-3 col-md-4">
        <div class="card h-100 bg-primary bg-gradient text-white border-0 shadow-lg sticky-top">
          
          <!-- Encabezado del carrito -->
          <div class="card-header text-center">
            <h5 class="mb-0">
              <i class="bi bi-cart-fill"></i> Lista Venta Lunatic
              <span class="badge bg-light text-dark ms-2" id="badge-cantidad">0</span>
            </h5>
          </div>
          <div class="d-flex align-items-center p-2 mb-2 border-bottom border-light" data-producto-id="[ID_DEL_PRODUCTO]">
    
    <div class="flex-grow-1 me-2">
        <strong class="d-block text-truncate">[Nombre del Producto]</strong>
        <span class="small text-white-50">S/ [Precio Unitario].00</span>
    </div>

    <div class="text-end me-3">
        <div class="input-group input-group-sm mb-1">
            <input type="number" class="form-control text-center" value="[Cantidad]" min="1" style="width: 60px;" aria-label="Cantidad" onchange="actualizarCantidad(this)">
        </div>
        
        <span class="fw-bold text-warning d-block">S/ [Total Ítem].00</span>
    </div>
    
    <div>
        <button class="btn btn-danger btn-sm" onclick="removerItem('[ID_DEL_PRODUCTO]')">
            <i class="bi bi-trash"></i>
        </button>
    </div>
</div>

          <!-- Contenido del carrito -->
          <div class="card-body overflow-auto" style="max-height: 65vh;">
            <div id="carrito-lista">
              <div class="text-center py-5" id="carrito-vacio">
                <i class="bi bi-cart-x" style="font-size: 3rem;"></i>
                <p class="mt-3 text-white-50">Tu carrito está vacío</p>
              </div>
            </div>
          </div>

          <!-- Footer del carrito -->
          <div class="card-footer bg-light text-dark">
            <div class="d-flex justify-content-between">
              <span>Subtotal:</span>
              <span id="carrito-subtotal">S/ 0.00</span>
            </div>
            <div class="d-flex justify-content-between small">
              <span>IGV (18%):</span>
              <span id="carrito-igv">S/ 0.00</span>
            </div>
            <div class="d-flex justify-content-between fw-bold fs-5 text-primary">
              <span>TOTAL:</span>
              <span id="carrito-total">S/ 0.00</span>
            </div>
            <button class="btn btn-success w-100 mt-3 py-2" onclick="procesarPago()">
              <i class="fas fa-credit-card me-2"></i> Proceder al Pago
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="<?php echo BASE_URL; ?>view/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="<?php echo BASE_URL; ?>view/function/vistacliente.js"></script>
  <script src="<?php echo BASE_URL; ?>view/function/venta.js"></script>


</body>
</html>



    <!-- <script>
        const IGV_RATE = 0.18;
        let cart = []; // Array que contendrá los productos en el carrito

        const productosEjemplo = [
            { id: 1, nombre: "Audífonos Bluetooth Pro", categoria: "Electrónica", precio: 120.00, imagen: "https://cdn.pixabay.com/photo/2017/03/02/17/32/headphones-2116283_960_720.jpg" },
            { id: 2, nombre: "Reloj Inteligente Ultra", categoria: "Accesorios", precio: 150.00, imagen: "https://cdn.pixabay.com/photo/2019/03/22/14/30/smart-watch-4070916_960_720.jpg" },
            { id: 3, nombre: "Cámara Deportiva 4K", categoria: "Tecnología", precio: 300.00, imagen: "https://cdn.pixabay.com/photo/2015/07/02/10/22/gopro-828890_960_720.jpg" },
            { id: 4, nombre: "Zapatillas Running Elite", categoria: "Deporte", precio: 220.00, imagen: "https://cdn.pixabay.com/photo/2016/03/27/22/16/running-shoes-1284540_960_720.jpg" }
        ];

        document.addEventListener('DOMContentLoaded', () => {
            renderProducts();
            document.getElementById('productos-container').addEventListener('click', handleProductActions);
        });

        // 1. Renderiza los productos del catálogo
        function renderProducts() {
            const container = document.getElementById("productos-container");
            container.innerHTML = productosEjemplo.map(p => `
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="card card-producto h-100">
                        <img src="${p.imagen}" alt="${p.nombre}">
                        <div class="card-body">
                            <h5 class="card-title">${p.nombre}</h5>
                            <p class="categoria">${p.categoria}</p>
                            <p class="precio">S/ ${p.precio.toFixed(2)}</p>
                            <button class="btn-comprar" data-id="${p.id}">
                                <i class="bi bi-cart"></i> Comprar
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // 2. Maneja las acciones de compra y carrito
        function handleProductActions(e) {
            if (e.target.classList.contains('btn-comprar')) {
                const productId = parseInt(e.target.dataset.id);
                addToCart(productId);
            }
        }

        // 3. Añade el producto al array del carrito
        function addToCart(productId) {
            const existingItem = cart.find(item => item.id === productId);
            const product = productosEjemplo.find(p => p.id === productId);

            if (existingItem) {
                existingItem.quantity += 1;
            } else if (product) {
                cart.push({
                    id: product.id,
                    name: product.nombre,
                    price: product.precio,
                    quantity: 1
                });
            }
            updateCartUI();
        }

        // 4. Renderiza la lista de ítems en el carrito
        function renderCart() {
            const listContainer = document.getElementById('carrito-lista');
            const emptyMessage = document.getElementById('carrito-vacio');
            
            if (cart.length === 0) {
                listContainer.innerHTML = '';
                emptyMessage.style.display = 'block';
                return;
            }
            emptyMessage.style.display = 'none';

            listContainer.innerHTML = cart.map(item => {
                const itemSubtotal = item.price * item.quantity;
                return `
                    <div class="carrito-item d-flex flex-column text-white" data-id="${item.id}">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span class="fw-bold">${item.name}</span>
                            <button class="btn btn-sm btn-outline-danger btn-eliminar" data-id="${item.id}" title="Eliminar">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <label for="qty-${item.id}" class="me-2 small text-white-50">Cantidad:</label>
                                <input type="number" id="qty-${item.id}" class="form-control form-control-sm input-cantidad" value="${item.quantity}" min="1" data-id="${item.id}">
                            </div>
                            <span class="fw-bold" style="color: #ffc107;">S/ ${itemSubtotal.toFixed(2)}</span>
                        </div>
                    </div>
                `;
            }).join('');

            // Agregar eventos a los botones y campos
            listContainer.querySelectorAll('.btn-eliminar').forEach(button => {
                button.addEventListener('click', removeItem);
            });
            listContainer.querySelectorAll('.input-cantidad').forEach(input => {
                input.addEventListener('change', updateQuantity);
            });
        }

        // 5. Calcula los totales del carrito
        function calculateTotals() {
            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const igv = subtotal * IGV_RATE;
            const total = subtotal + igv;
            const totalQuantity = cart.reduce((sum, item) => sum + item.quantity, 0);

            document.getElementById('carrito-subtotal').textContent = `S/ ${subtotal.toFixed(2)}`;
            document.getElementById('carrito-igv').textContent = `S/ ${igv.toFixed(2)}`;
            document.getElementById('carrito-total').textContent = `S/ ${total.toFixed(2)}`;
            document.getElementById('badge-cantidad').textContent = totalQuantity;
        }

        // 6. Función principal de actualización del carrito
        function updateCartUI() {
            renderCart();
            calculateTotals();
        }

        // 7. Eliminar ítem del carrito
        function removeItem(e) {
            const productId = parseInt(e.currentTarget.dataset.id);
            cart = cart.filter(item => item.id !== productId);
            updateCartUI();
        }

        // 8. Actualizar cantidad
        function updateQuantity(e) {
            const productId = parseInt(e.currentTarget.dataset.id);
            const newQuantity = parseInt(e.currentTarget.value);
            
            const item = cart.find(item => item.id === productId);
            if (item && newQuantity > 0) {
                item.quantity = newQuantity;
                updateCartUI();
            } else if (newQuantity <= 0) {
                // Si la cantidad es 0 o menos, eliminar el ítem
                cart = cart.filter(item => item.id !== productId);
                updateCartUI();
            }
        }
        
        // 9. Simulación de procesamiento de pago
        function procesarPago() {
            if (cart.length === 0) {
                Swal.fire('Error', 'El carrito está vacío.', 'error');
                return;
            }
            const total = document.getElementById('carrito-total').textContent;
            Swal.fire(
                '¡Pago Procesado!',
                `Confirmación de pago por ${total}. ¡Gracias por tu compra!`,
                'success'
            ).then(() => {
                // Vaciar carrito después de la compra (simulación)
                cart = [];
                updateCartUI();
            });
        }
    </script> -->
</body>
</html>