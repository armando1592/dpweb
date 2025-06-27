<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LunaTec - Tu tienda de tecnología</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="container header-content">
            <a class="logo" href="#"><img src="https://logopond.com/logos/ed0f647072c2187bd75f55bf4301c2ed.png"alt="logo" width="80px" height="80px"  margin-left="0" alt=""> </a>    
            <nav class="nav">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Ofertas</a></li>
                    <li><a href="#">Celulares</a></li>
                    <li><a href="#">Laptops</a></li>
                    <li><a href="#">Accesorios</a></li>
                </ul>
            </nav>
            <div class="header-icons">
                <i class="fas fa-search"></i>
                                     <i class="fas fa-user"></i>
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
    </header>

    <main>
        <section class="hero-section">
            <div class="container hero-content">
                <div class="hero-text">
                    <h1>Súper precios en tus artículos favoritos</h1>
                    <p>Encuentra todo lo que buscas y más.</p>
                    <button class="btn primary-btn">Comprar ahora</button>
                </div>
                <div class="hero-image"> <img src="https://cloudfront-us-east-1.images.arcpublishing.com/semana/5J2P52X3FBF4TJNKQGLGKH7ELA.jpg" width="780px" height="400px"  alt="">
                    </div>
            </div>
        </section>

        <section class="featured-sections">
            <div class="container featured-grid">
                <div class="featured-item red-bg"> <img src="https://itusers.today/wp-content/uploads/2024/04/aprovecha-grandes-descuentos-en-laptop-lenovo-televisores-y-celulares-samsung-1024x640.jpg" width="100%" height="400px" alt="">
                    <h3>Hasta 30% menos</h3>
                    <p>Ofertas por tiempo limitado</p>
                    <button class="btn secondary-btn">Ver más</button>
                </div>
                <div class="featured-item purple-bg"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRF0VNF7BU_O2NIyg0g1wl4CJ-CaRE0kM6X5W9AEWxkF-mijJQSw1updfnG7IltowEqY78&usqp=CAU" width="100%" height="400px" alt="">
                    <h3>Sonido portátil</h3>
                    <p>Audífonos desde S/ 49.90</p>
                    <button class="btn secondary-btn">Comprar</button>
                </div>
            </div>
        </section>

        <section class="info-banners">
            <div class="container info-grid">
                <div class="info-item">
                    <i class="fas fa-truck"></i>
                    <p>Envíos gratis</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-credit-card"></i>
                    <p>Pagos seguros</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-headset"></i>
                    <p>Soporte 24/7</p>
                </div>
            </div>
        </section>

        <section class="most-sold-section">
            <div class="container">
                <h2>Más vendidos</h2>
                <div class="product-grid">
                    <div class="product-card">
                        <span class="badge new-badge">Nuevo</span>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiz6Qe3Edh95cKiHXOAVNVNPrva2dDX9VyHQ&s" alt="Smartwatch Pro">
                        <h3>Smartwatch Pro</h3>
                        <button class="btn add-to-cart-btn">Agregar al carrito</button>
                    </div>
                    <div class="product-card">
                        <span class="badge new-badge">Nuevo</span>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2_VgYI7trlDBm95IflL0w1HNIz0GDNXBCDA&s" alt="Laptop X290">
                        <h3>Laptop X290</h3>
                        <button class="btn add-to-cart-btn">Agregar al carrito</button>
                    </div>
                    <div class="product-card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_oVTXTdkEUPGZuGA7gwG0T1SKX1Ow1BrPLA&s" alt="Drone HD">
                        <h3>Drone HD</h3>
                        <button class="btn add-to-cart-btn">Agregar al carrito</button>
                    </div>
                    <div class="product-card">
                        <img src="https://oechsle.vteximg.com.br/arquivos/ids/13389336-1000-1000/2291765-01.jpg?v=638091393937070000" alt="Celular Nova">
                        <h3>Celular Nova</h3>
                        <button class="btn add-to-cart-btn">Agregar al carrito</button>
                    </div>
                    <div class="product-card">
                        <span class="badge new-badge">Nuevo</span>
                        <img src="https://http2.mlstatic.com/D_NQ_NP_896193-MLA78048221180_082024-O.webp" alt="Audífonos Wireless">
                        <h3>Audífonos Wireless</h3>
                        <button class="btn add-to-cart-btn">Agregar al carrito</button>
                    </div>
                    <div class="product-card">
                        <img src="https://cdn.mos.cms.futurecdn.net/u5cggJUjzeNhRQnAo2bdtm.jpg" alt="VR Glasses">
                        <h3>VR Glasses</h3>
                        <button class="btn add-to-cart-btn">Agregar al carrito</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <style>
        /* General Styles */
:root {
    --primary-color: #6C5CE7; /* A purple tone */
    --secondary-color: #E84393; /* A red/pink tone */
    --text-color: #333;
    --light-text-color: #fff;
    --background-light: #f8f8f8;
    --background-dark: #eee;
    --border-color: #ddd;
    --red-promo: #E74C3C;
    --purple-promo: #8e44ad;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: var(--text-color);
    background-color: var(--background-light);
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Header */
.header {
    background-color: var(--light-text-color);
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    padding: 15px 0;
    position: sticky;
    top: 0;
    z-index: 1000;
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 1.8rem;
    font-weight: bold;
    color: var(--primary-color);
}

.nav ul {
    list-style: none;
    display: flex;
}

.nav ul li {
    margin-left: 30px;
}

.nav ul li a {
    text-decoration: none;
    color: var(--text-color);
    font-weight: 500;
    transition: color 0.3s ease;
}

.nav ul li a:hover {
    color: var(--primary-color);
}

.header-icons {
    display: flex;
    gap: 20px;
}

.header-icons i {
    font-size: 1.2rem;
    cursor: pointer;
    color: var(--text-color);
    transition: color 0.3s ease;
}

.header-icons i:hover {
    color: var(--primary-color);
}

/* Buttons */
.btn {
    display: inline-block;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 600;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn.primary-btn {
    background-color: var(--primary-color);
    color: var(--light-text-color);
}

.btn.primary-btn:hover {
    background-color: #5a4acb;
    transform: translateY(-2px);
}

.btn.secondary-btn {
    background-color: var(--light-text-color);
    color: var(--text-color);
    border: 1px solid var(--border-color);
}

.btn.secondary-btn:hover {
    background-color: var(--background-dark);
    transform: translateY(-2px);
}

.btn.add-to-cart-btn {
    background-color: var(--primary-color);
    color: var(--light-text-color);
    width: 100%;
    margin-top: 15px;
}

.btn.add-to-cart-btn:hover {
    background-color: #5a4acb;
    transform: none; /* No translateY for cart buttons for a different feel */
}

/* Hero Section */
.hero-section {
    background-color: var(--background-light); /* Base for content, image will overlay/complement */
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

.hero-content {
    display: flex;
    align-items: center;
    gap: 40px;
}

.hero-text {
    flex: 1;
    z-index: 1;
}

.hero-text h1 {
    font-size: 3rem;
    margin-bottom: 15px;
    line-height: 1.2;
}

.hero-text p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    color: #666;
}

.hero-image {
    flex: 1;
    min-height: 350px;
    background-image: url('https://via.placeholder.com/600x400/8e44ad/ffffff?text=Tecnologia'); /* Placeholder, replace with your image */
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    position: relative;
    z-index: 0;
}

/* Featured Sections */
.featured-sections {
    padding: 50px 0;
    background-color: var(--background-light);
}

.featured-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
    gap: 30px;
}

.featured-item {
    padding: 40px;
    border-radius: 10px;
    color: var(--light-text-color);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    min-height: 250px;
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.featured-item h3 {
    font-size: 2rem;
    margin-bottom: 10px;
}

.featured-item p {
    font-size: 1.1rem;
    margin-bottom: 20px;
}

.featured-item .btn.secondary-btn {
    background-color: rgba(255, 255, 255, 0.9);
    color: var(--text-color);
    font-weight: 600;
}

.featured-item .btn.secondary-btn:hover {
    background-color: var(--light-text-color);
}

.red-bg {
    background-color: var(--red-promo);
    background-image: url('https://via.placeholder.com/500x300/E74C3C/ffffff?text=Ofertas'); /* Replace with your image */
}

.purple-bg {
    background-color: var(--purple-promo);
    background-image: url('https://via.placeholder.com/500x300/8e44ad/ffffff?text=Sonido'); /* Replace with your image */
}


/* Info Banners */
.info-banners {
    background-color: var(--light-text-color);
    padding: 40px 0;
    box-shadow: 0 -2px 5px rgba(0,0,0,0.05);
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    text-align: center;
}

.info-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    border-radius: 8px;
    border: 1px solid var(--border-color);
    background-color: var(--light-text-color);
}

.info-item i {
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 15px;
}

.info-item p {
    font-size: 1.1rem;
    font-weight: 500;
}

/* Most Sold Section */
.most-sold-section {
    padding: 60px 0;
    background-color: var(--background-light);
}

.most-sold-section h2 {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 40px;
    color: var(--text-color);
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 30px;
}

.product-card {
    background-color: var(--light-text-color);
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    padding: 20px;
    text-align: center;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.12);
}

.product-card .badge {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: var(--red-promo);
    color: var(--light-text-color);
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 0.8rem;
    font-weight: bold;
}

.product-card img {
    max-width: 100%;
    height: 150px; /* Fixed height for product images */
    object-fit: contain; /* Ensures the image fits without distortion */
    margin-bottom: 15px;
}

.product-card h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: var(--text-color);
    flex-grow: 1; /* Allows title to take available space */
}

/* Responsive Design */
@media (max-width: 992px) {
    .header-content {
        flex-wrap: wrap;
        justify-content: center;
    }

    .nav ul {
        margin-top: 15px;
        justify-content: center;
        width: 100%;
    }

    .header-icons {
        margin-top: 15px;
        width: 100%;
        justify-content: center;
    }

    .hero-content {
        flex-direction: column-reverse;
        text-align: center;
    }

    .hero-image {
        margin-bottom: 30px;
    }

    .hero-text h1 {
        font-size: 2.5rem;
    }

    .featured-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .nav ul li {
        margin: 0 15px;
    }

    .hero-text h1 {
        font-size: 2rem;
    }

    .product-grid {
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    }
}

@media (max-width: 480px) {
    .logo {
        font-size: 1.5rem;
    }

    .nav ul {
        flex-direction: column;
        align-items: center;
    }

    .nav ul li {
        margin: 10px 0;
    }

    .hero-text h1 {
        font-size: 1.8rem;
    }

    .hero-text p {
        font-size: 1rem;
    }

    .featured-item {
        padding: 30px 20px;
    }

    .featured-item h3 {
        font-size: 1.5rem;
    }

    .product-grid {
        grid-template-columns: 1fr;
    }
}
    </style>
    <script>document.addEventListener('DOMContentLoaded', () => {
    console.log('NovoTec website loaded!');

    // Example of a simple interactive element:
    // Adding a click listener to the "Add to Cart" buttons (for demonstration)
    const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            const productName = event.target.closest('.product-card').querySelector('h3').textContent;
            alert(`"${productName}" ha sido agregado al carrito! (Esta es una función de demostración)`);
            // In a real application, you'd add logic here to update a cart icon,
            // send data to a backend, etc.
        });
    });

    // Optional: Scroll to top button (uncomment HTML if you want to use this)
    /*
    const scrollToTopBtn = document.createElement('button');
    scrollToTopBtn.classList.add('scroll-to-top');
    scrollToTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
    document.body.appendChild(scrollToTopBtn);

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.add('show');
        } else {
            scrollToTopBtn.classList.remove('show');
        }
    });

    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    */
});</script>
    


</body>
</html>