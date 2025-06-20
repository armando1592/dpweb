<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi vida. Mi blog.</title>
  
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="container header-content">
            <div class="logo">Mi Blog Creativo</div>
            <nav class="nav">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Sobre Mí</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero-section">
            <div class="hero-grid">
                <div class="hero-image main-image" style="background-image: url('https://placehold.co/600x400/D0B8A8/FFFFFF?text=Escritorio');"></div>
                <div class="hero-image side-image-top" style="background-image: url('https://placehold.co/300x200/D0B8A8/FFFFFF?text=Persona');"></div>
                <div class="hero-image side-image-bottom" style="background-image: url('https://placehold.co/300x200/D0B8A8/FFFFFF?text=Planta');"></div>
            </div>
            <div class="hero-text-overlay">
                <h1>Mi vida. Mi blog.</h1>
            </div>
        </section>

        <section class="content-section container">
            <div class="blog-main-content">
                <div class="blog-entries">
                    <article class="blog-post-card">
                        <div class="post-image" style="background-image: url('https://placehold.co/300x200/B56576/FFFFFF?text=Pinceles');"></div>
                        <div class="post-info">
                            <span class="post-date">10 DICIEMBRE 2023</span>
                            <h3>Transforma tu trabajo con creatividad invernal</h3>
                            <p>Descubre cómo la creatividad puede impulsar tu trabajo y hacer que cada día sea más interesante...</p>
                            <a href="#" class="read-more">Leer más &rarr;</a>
                        </div>
                    </article>
                    <article class="blog-post-card">
                        <div class="post-image" style="background-image: url('https://placehold.co/300x200/98C1D9/FFFFFF?text=Laptop');"></div>
                        <div class="post-info">
                            <span class="post-date">05 DICIEMBRE 2023</span>
                            <h3>Despierta a tus Lunes articulares</h3>
                            <p>Consejos para una semana productiva y con buena energía desde el blog que realmente te inspira...</p>
                            <a href="#" class="read-more">Leer más &rarr;</a>
                        </div>
                    </article>
                    <article class="blog-post-card">
                        <div class="post-image" style="background-image: url('https://placehold.co/300x200/F0B9B9/FFFFFF?text=Silla');"></div>
                        <div class="post-info">
                            <span class="post-date">28 NOVIEMBRE 2023</span>
                            <h3>Cómo el desorden visual te ayuda</h3>
                            <p>Aprende a transformar el caos visual en una fuente de inspiración para tu próxima idea creativa...</p>
                            <a href="#" class="read-more">Leer más &rarr;</a>
                        </div>
                    </article>
                    <button class="btn load-more-btn">Todas las entradas</button>
                </div>

                <aside class="sidebar">
                    <div class="subscribe-widget">
                        <h3>Recibe todas las entradas.</h3>
                        <form>
                            <input type="email" placeholder="Email*" required>
                            <button type="submit" class="btn subscribe-btn">Enviar</button>
                        </form>
                    </div>

                    <div class="instagram-widget">
                        <h3>Búscame en Instagram</h3>
                        <div class="instagram-grid">
                            <img src="https://placehold.co/120x120/E0BBE4/FFFFFF?text=Insta1" alt="Instagram Post 1">
                            <img src="https://placehold.co/120x120/957DAD/FFFFFF?text=Insta2" alt="Instagram Post 2">
                            <img src="https://placehold.co/120x120/D291BC/FFFFFF?text=Insta3" alt="Instagram Post 3">
                            <img src="https://placehold.co/120x120/A8DADC/FFFFFF?text=Insta4" alt="Instagram Post 4">
                            <img src="https://placehold.co/120x120/46B0C4/FFFFFF?text=Insta5" alt="Instagram Post 5">
                            <img src="https://placehold.co/120x120/556270/FFFFFF?text=Insta6" alt="Instagram Post 6">
                        </div>
                        <div class="instagram-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        <section class="contact-section">
            <div class="container contact-content">
                <h2>Dime lo que te pasa por tu mente</h2>
                <form class="contact-form">
                    <div class="form-row">
                        <input type="text" placeholder="Nombre*" required>
                        <input type="email" placeholder="Email*" required>
                    </div>
                    <textarea placeholder="Déjanos un mensaje*" rows="6" required></textarea>
                    <button type="submit" class="btn contact-btn">Enviar</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer-content">
            <div class="footer-links">
                <a href="#">Cookies y Condiciones</a>
                <a href="#">Términos de Privacidad</a>
            </div>
            <p>&copy; 2023 Mi Blog Creativo. Todos los derechos reservados.</p>
        </div>
    </footer>

    <style>
        :root {
    --primary-color: #D291BC; /* Tono rosado/malva */
    --secondary-color: #B56576; /* Tono rosa más oscuro */
    --text-dark: #333;
    --text-light: #555;
    --background-light: #F8F4F1; /* Fondo muy claro, casi blanco */
    --background-accent: #EFE0E3; /* Un tono más oscuro para contraste */
    --border-color: #ddd;
    --button-bg: #8e44ad; /* Tono morado para botones */
    --button-text: #fff;
    --footer-bg: #A07855; /* Tono marrón para pie de página */
}

/* Estilos generales */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Open Sans', sans-serif;
    line-height: 1.6;
    color: var(--text-dark);
    background-color: var(--background-light);
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Tipografía */
h1, h2, h3 {
    font-family: 'Playfair Display', serif;
    color: var(--text-dark);
    margin-bottom: 15px;
}

h1 { font-size: 3.5rem; }
h2 { font-size: 2.5rem; }
h3 { font-size: 1.8rem; }

p {
    font-size: 1rem;
    line-height: 1.8;
    color: var(--text-light);
}

a {
    text-decoration: none;
    color: var(--primary-color);
    transition: color 0.3s ease;
}

a:hover {
    color: var(--secondary-color);
}

/* Botones */
.btn {
    display: inline-block;
    padding: 12px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 600;
    transition: background-color 0.3s ease, transform 0.2s ease;
    background-color: var(--button-bg);
    color: var(--button-text);
}

.btn:hover {
    background-color: #6C3483; /* Un tono más oscuro del morado */
    transform: translateY(-2px);
}

.btn.load-more-btn {
    background-color: var(--footer-bg);
    color: var(--button-text);
    margin-top: 30px;
    width: fit-content;
    display: block; /* Para centrarlo con margin: auto */
    margin-left: auto;
    margin-right: auto;
}

.btn.load-more-btn:hover {
    background-color: #8E6542; /* Tono más oscuro del marrón */
}


/* Header */
.header {
    background-color: var(--background-light);
    box-shadow: 0 1px 5px rgba(0,0,0,0.05);
    padding: 20px 0;
    position: relative;
    z-index: 1000;
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    font-weight: bold;
    color: var(--text-dark);
}

.nav ul {
    list-style: none;
    display: flex;
    gap: 30px;
}

.nav ul li a {
    color: var(--text-dark);
    font-weight: 600;
}

.social-icons a {
    margin-left: 20px;
    font-size: 1.1rem;
    color: var(--text-light);
}

/* Hero Section */
.hero-section {
    position: relative;
    width: 100%;
    overflow: hidden;
    margin-bottom: 50px;
}

.hero-grid {
    display: grid;
    grid-template-columns: 2fr 1fr; /* Columna principal más grande, columna lateral más pequeña */
    grid-template-rows: repeat(2, 1fr);
    height: 500px; /* Altura fija para el grid de imágenes */
}

.hero-image {
    background-size: cover;
    background-position: center;
    border-radius: 8px; /* Bordes redondeados para las imágenes */
    overflow: hidden;
}

.main-image {
    grid-column: 1 / 2;
    grid-row: 1 / 3;
}

.side-image-top {
    grid-column: 2 / 3;
    grid-row: 1 / 2;
}

.side-image-bottom {
    grid-column: 2 / 3;
    grid-row: 2 / 3;
}

.hero-text-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    text-align: center;
    padding: 20px;
    color: var(--text-dark);
    background-color: rgba(255, 255, 255, 0.85); /* Fondo semitransparente */
    box-shadow: 0 -5px 15px rgba(0,0,0,0.05);
}

.hero-text-overlay h1 {
    margin: 0;
    font-size: 2.8rem;
}

/* Content Section (Blog Entries + Sidebar) */
.content-section {
    padding: 40px 20px;
}

.blog-main-content {
    display: grid;
    grid-template-columns: 2.5fr 1fr; /* Blog entries on left, sidebar on right */
    gap: 60px;
}

.blog-entries {
    display: flex;
    flex-direction: column;
    gap: 40px;
}

.blog-post-card {
    display: flex;
    gap: 30px;
    background-color: var(--background-accent);
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.post-image {
    min-width: 250px; /* Ancho mínimo para la imagen */
    height: 200px;
    background-size: cover;
    background-position: center;
    border-radius: 8px 0 0 8px;
}

.post-info {
    padding: 25px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.post-date {
    font-size: 0.85rem;
    color: var(--text-light);
    margin-bottom: 5px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.post-info h3 {
    margin-bottom: 10px;
    font-size: 1.5rem;
    line-height: 1.3;
}

.read-more {
    margin-top: 15px;
    font-weight: 600;
}

/* Sidebar */
.sidebar {
    background-color: var(--background-accent);
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.sidebar h3 {
    text-align: center;
    margin-bottom: 25px;
    font-size: 1.6rem;
    color: var(--text-dark);
}

.subscribe-widget form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-bottom: 40px;
}

.subscribe-widget input[type="email"] {
    padding: 12px;
    border: 1px solid var(--border-color);
    border-radius: 5px;
    font-size: 1rem;
    width: 100%;
}

.subscribe-widget .btn.subscribe-btn {
    width: 100%;
}

.instagram-widget {
    text-align: center;
}

.instagram-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    margin-top: 20px;
    margin-bottom: 30px;
}

.instagram-grid img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 5px;
}

.instagram-social a {
    margin: 0 10px;
    font-size: 1.2rem;
    color: var(--text-dark);
}

/* Contact Section */
.contact-section {
    background-color: var(--primary-color);
    color: var(--button-text);
    padding: 60px 0;
    text-align: center;
    margin-top: 50px;
}

.contact-content h2 {
    color: var(--button-text);
    margin-bottom: 30px;
}

.contact-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
    max-width: 700px;
    margin: 0 auto;
}

.contact-form .form-row {
    display: flex;
    gap: 20px;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 15px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    background-color: rgba(255, 255, 255, 0.9);
    color: var(--text-dark);
}

.contact-form textarea {
    resize: vertical; /* Permite redimensionar verticalmente */
    min-height: 120px;
}

.contact-form .btn.contact-btn {
    width: fit-content;
    margin: 0 auto;
    background-color: var(--secondary-color);
}

.contact-form .btn.contact-btn:hover {
    background-color: #A04A5C; /* Tono más oscuro del rosa */
}

/* Footer */
.footer {
    background-color: var(--footer-bg);
    color: var(--button-text);
    padding: 25px 0;
    text-align: center;
    font-size: 0.9rem;
}

.footer-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

.footer-links a {
    color: var(--button-text);
    margin: 0 15px;
}

.footer-links a:hover {
    text-decoration: underline;
}


/* Responsive Design */
@media (max-width: 992px) {
    .header-content {
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
    }

    .nav ul {
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .social-icons {
        margin-top: 10px;
        width: 100%;
        text-align: center;
    }

    .hero-grid {
        grid-template-columns: 1fr; /* Apila las imágenes */
        grid-template-rows: auto;
        height: auto;
    }

    .main-image, .side-image-top, .side-image-bottom {
        grid-column: 1 / 2;
        grid-row: auto;
        min-height: 250px; /* Altura mínima para imágenes apiladas */
    }

    .hero-text-overlay h1 {
        font-size: 2.2rem;
    }

    .blog-main-content {
        grid-template-columns: 1fr; /* Apila el contenido principal y la barra lateral */
        gap: 40px;
    }

    .blog-post-card {
        flex-direction: column; /* Apila imagen y texto en tarjetas */
        text-align: center;
    }

    .post-image {
        min-width: 100%;
        height: 250px;
        border-radius: 8px 8px 0 0;
    }

    .post-info {
        padding: 20px;
    }

    .post-info h3 {
        font-size: 1.3rem;
    }

    .contact-form .form-row {
        flex-direction: column;
        gap: 15px;
    }

    .footer-links {
        flex-direction: column;
        gap: 5px;
    }
}

@media (max-width: 576px) {
    h1 { font-size: 2.8rem; }
    h2 { font-size: 2rem; }
    h3 { font-size: 1.5rem; }

    .header .logo {
        font-size: 1.5rem;
    }

    .nav ul {
        gap: 15px;
    }

    .post-info h3 {
        font-size: 1.2rem;
    }

    .subscribe-widget h3, .instagram-widget h3 {
        font-size: 1.4rem;
    }
}
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
    console.log('Blog page loaded successfully!');

    // Smooth scroll for navigation links (optional, for better UX)
    document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Example for the subscribe form (client-side validation and simple message)
    const subscribeForm = document.querySelector('.subscribe-widget form');
    if (subscribeForm) {
        subscribeForm.addEventListener('submit', (e) => {
            e.preventDefault(); // Prevent actual form submission
            const emailInput = subscribeForm.querySelector('input[type="email"]');
            if (emailInput.value) {
                // In a real application, you would send this email to a server
                alert('¡Gracias por suscribirte! Recibirás nuestras últimas entradas.');
                emailInput.value = ''; // Clear the input field
            } else {
                alert('Por favor, ingresa un correo electrónico válido.');
            }
        });
    }

    // Example for the contact form (client-side validation and simple message)
    const contactForm = document.querySelector('.contact-section .contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault(); // Prevent actual form submission
            const nameInput = contactForm.querySelector('input[type="text"]');
            const emailInput = contactForm.querySelector('input[type="email"]');
            const messageTextarea = contactForm.querySelector('textarea');

            if (nameInput.value && emailInput.value && messageTextarea.value) {
                // In a real application, you would send this data to a server
                alert('¡Tu mensaje ha sido enviado! Nos pondremos en contacto contigo pronto.');
                nameInput.value = ''; // Clear fields
                emailInput.value = '';
                messageTextarea.value = '';
            } else {
                alert('Por favor, completa todos los campos obligatorios.');
            }
        });
    }

    // You could add more dynamic content loading here, e.g., for "Todas las entradas" button
    const loadMoreBtn = document.querySelector('.load-more-btn');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', () => {
            // Simulate loading more posts
            console.log('Cargando más entradas de blog...');
            // In a real scenario, you'd fetch more data from an API
            alert('Esta es una demostración. Aquí se cargarían más entradas del blog.');
        });
    }
});

    </script>
</body>
</html>