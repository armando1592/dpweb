<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunatic</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>view/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>view/css/cliente.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script>
        // base_url provided globally in the site header; avoid redeclaring here to prevent JS errors
    </script>
    <?php
    if (isset($_GET["views"])) {
        $ruta = explode("/", $_GET["views"]);
        //echo $ruta[1];
    }
    ?>
    <style>
        /* Header styles */
        .header-container{display:flex;align-items:center;justify-content:space-between;gap:1rem;padding:.6rem 0}
        .header-container .logo{font-size:1.6rem;font-weight:700;color:#1e66ff;margin:0}
        nav{display:flex;gap:1rem;align-items:center}
        nav a{color:#333;text-decoration:none;font-weight:500}
        .search-box{display:flex;align-items:center;gap:.25rem}
        .search-box input{width:300px;padding:.45rem .6rem;border-radius:25px;border:1px solid #ddd}
        .search-box button{background:transparent;border:none;color:#1e66ff}
        .header-icons{display:flex;align-items:center;gap:.5rem}
        .icon-btn{background:transparent;border:0;font-size:1.1rem;color:#555}
        .mobile-menu{display:none;margin-top:.5rem}
        .mobile-menu.show{display:block}
        .carousel-slide img{width:100%;height:340px;object-fit:cover;border-radius:8px}
        @media(max-width:768px){nav{display:none}.search-box input{width:140px}.mobile-menu{display:block}}
        /* Productos grid */
        #productos-container{margin-top:1.2rem}
        .product-card{border:1px solid #e9e9e9;border-radius:8px;padding:12px;margin-bottom:16px;display:flex;flex-direction:column;align-items:center;text-align:center;background:#fff}
        .product-card img{width:100%;height:180px;object-fit:cover;border-radius:6px;margin-bottom:.6rem}
        .product-card .product-name{font-weight:600;color:#222;margin-bottom:.25rem}
        .product-card .product-cat{font-size:.9rem;color:#666;margin-bottom:.4rem}
        .product-card .product-price{font-size:1.05rem;color:#1e66ff;font-weight:700}
        @media(min-width:768px){#productos-container .col-md-3{padding-left:8px;padding-right:8px}}
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container container">
            <h1 class="logo mb-0">Lunatic</h1>
            <!-- BOTÓN MENÚ MÓVIL -->
            <button class="menu-btn" id="menu-toggle">
                <i class="bi bi-list"></i>
            </button>
            <nav>
                <a href="#">Inicio</a>
                <a href="#">Productos</a>
                <a href="#">Ofertas</a>
                <a href="#">Contacto</a>
            </nav>
            <div class="header-icons">
                <div class="search-box">
                    <input type="text" placeholder="Buscar...">
                    <button><i class="bi bi-search"></i></button>
                </div>
                <button class="icon-btn"><i class="bi bi-person"></i></button>
                <button class="icon-btn"><i class="bi bi-heart"></i></button>
                <button class="icon-btn" id="cart-btn">
                    <i class="bi bi-cart3"></i>
                    <span class="cart-count">0</span>
                </button>
            </div>
        </div>
        <!--  bicicleta -->
        <div class="mobile-menu" id="mobile-menu">
            <a href="#">Inicio</a>
            <a href="#">Productos</a>
            <a href="#">Ofertas</a>
            <a href="#">Contacto</a>
        </div>
    </header>

    <!-- Carrusel -->
    <section class="carousel">
        <div class="carousel-slide active">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi6NIhRYufA8oie-oDYp2UeivaPLcscm3IZQ&s"">
            <div class="carousel-text">
                <h2>Nueva Colección 2025</h2>
                <p>Descubre las últimas tendencias</p>
                <button class="btn">Ver Colección</button>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7Pg9OG4aafUqOeD7tMY-zPryMIdAWvogRkQ&s" alt="">
            <div class="carousel-text">
                <h2>Ofertas Especiales</h2>
                <p>Hasta 50% de descuento</p>
                <button class="btn">Comprar Ahora</button>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzgWbwBHY_OuNputSrBkGK5MsPoFSOKAn3vw&s" alt="">
            <div class="carousel-text">
                <h2>Envío Gratis</h2>
                <p>En compras mayores a S/100</p>
                <button class="btn">Explorar</button>
            </div>
        </div>

        <button id="prevSlide" class="carousel-control prev">❮</button>
        <button id="nextSlide" class="carousel-control next">❯</button>
    </section>

    <!-- Categorías -->
    <section class="categorias container">
        <button>bmx</button>
    </section>



    <!-- Productos -->
    <div class="container">
            <div class="row" id="productos-container"></div>
    </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container footer-grid">
      <div>
        <h3>Mi Tienda</h3>
        <p>Tu tienda online de confianza</p>
      </div>
      <div>
        <h4>Compañía</h4>
        <a href="#">Sobre Nosotros</a>
        <a href="#">Contacto</a>
        <a href="#">Trabaja con Nosotros</a>
      </div>
      <div>
        <h4>Ayuda</h4>
        <a href="#">Envíos</a>
        <a href="#">Devoluciones</a>
        <a href="#">FAQ</a>
      </div>
      <div>
        <h4>Síguenos</h4>
        <a href="#">Facebook</a>
        <a href="#">Instagram</a>
        <a href="#">Twitter</a>
      </div>
    </div>
    <p class="copy">© 2025 Mi Tienda. Todos los derechos reservados.</p>
  </footer>

    <script>
        // MENU RESPONSIVO
        const menuToggleEl = document.getElementById('menu-toggle');
        if (menuToggleEl) {
            menuToggleEl.addEventListener('click', () => {
                const navEl = document.querySelector('nav');
                if (navEl) navEl.classList.toggle('active');
                const mobile = document.getElementById('mobile-menu');
                if (mobile) mobile.classList.toggle('show');
            });
        }

        // CARRUSEL
        const slides = document.querySelectorAll('.carousel-slide');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach(s => s.classList.remove('active'));
            if (slides[index]) slides[index].classList.add('active');
        }

        const nextBtn = document.getElementById('nextSlide');
        const prevBtn = document.getElementById('prevSlide');
        if (nextBtn) nextBtn.onclick = () => { currentSlide = (currentSlide + 1) % slides.length; showSlide(currentSlide); };
        if (prevBtn) prevBtn.onclick = () => { currentSlide = (currentSlide - 1 + slides.length) % slides.length; showSlide(currentSlide); };

        setInterval(() => { currentSlide = (currentSlide + 1) % slides.length; showSlide(currentSlide); }, 5000);

        // CARRITO simple placeholder
        document.addEventListener('click', e => {
            if (e.target.classList && e.target.classList.contains('btn-cart')) {
                let cartCount = parseInt(document.querySelector('.cart-count')?.textContent || '0', 10) || 0;
                cartCount++;
                const count = document.querySelector('.cart-count');
                if (count) {
                    count.textContent = cartCount;
                    count.classList.remove('hidden');
                }
            }
        });
    </script>
    <script>
        // Fetch and render products for client view
        async function cargarProductosCliente() {
            const container = document.getElementById('productos-container');
            if (!container) return;
            container.innerHTML = '<div class="col-12">Cargando productos...</div>';
            try {
                const resp = await fetch(base_url + 'control/productosController.php?tipo=mostrar_productos', {
                    method: 'POST', mode: 'cors', cache: 'no-cache'
                });
                if (!resp.ok) throw new Error('HTTP ' + resp.status);
                const json = await resp.json();
                if (!json.status || !Array.isArray(json.data) || json.data.length === 0) {
                    container.innerHTML = '<div class="col-12">No hay productos disponibles</div>';
                    return;
                }
                const items = json.data.map(prod => {
                    const imagen = prod.imagen && prod.imagen.trim() !== '' ? (base_url + 'uploads/productos/' + prod.imagen) : (base_url + 'view/img/luna.png');
                    const nombre = prod.nombre || '';
                    const categoria = prod.categoria || '';
                    const precio = prod.precio !== undefined ? parseFloat(prod.precio).toFixed(2) : '';
                    return `
                        <div class="col-6 col-md-3">
                            <div class="product-card">
                                <img src="${imagen}" alt="${nombre}" onerror="this.onerror=null;this.src='${base_url}view/img/luna.png'">
                                <div class="product-name">${nombre}</div>
                                <div class="product-cat">${categoria}</div>
                                <div class="product-price">S/ ${precio}</div>
                                <a href="${base_url}productos-edit/${prod.id}" class="btn btn-sm btn-outline-primary mt-2">Ver / Comprar</a>
                            </div>
                        </div>`;
                }).join('');
                container.innerHTML = items;
            } catch (err) {
                console.error('Error al cargar productos cliente:', err);
                container.innerHTML = '<div class="col-12">Error al cargar productos</div>';
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            // load products when the client view loads
            cargarProductosCliente();
        });
    </script>
    <!-- mobile toggle handled above -->
    <script src="<?php echo BASE_URL; ?>view/function/vistaC.js"></script>
    <script src="<?php echo BASE_URL; ?>view/Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html> 
