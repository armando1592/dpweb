<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dulce Arte - Pastelería Artesanal</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            color: #333;
            overflow-x: hidden;
        }

        .hero {
            height: 100vh;
            background: linear-gradient(135deg, #fff5f7 0%, #ffe8ec 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255,182,193,0.3) 0%, transparent 70%);
            border-radius: 50%;
            top: -200px;
            right: -200px;
            animation: float 6s ease-in-out infinite;
        }

        .hero::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255,218,224,0.3) 0%, transparent 70%);
            border-radius: 50%;
            bottom: -150px;
            left: -150px;
            animation: float 8s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-30px) scale(1.05); }
        }

        .hero-content {
            text-align: center;
            z-index: 2;
            padding: 20px;
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            font-size: 4.5rem;
            color: #d63384;
            margin-bottom: 20px;
            font-weight: 300;
            letter-spacing: 2px;
        }

        .subtitle {
            font-size: 1.5rem;
            color: #666;
            margin-bottom: 40px;
            font-style: italic;
        }

        .cta-button {
            background: linear-gradient(135deg, #d63384 0%, #ff6b9d 100%);
            color: white;
            padding: 18px 50px;
            border: none;
            border-radius: 50px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(214, 51, 132, 0.3);
            text-decoration: none;
            display: inline-block;
        }

        .cta-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(214, 51, 132, 0.4);
        }

        .products {
            padding: 100px 20px;
            background: white;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            color: #d63384;
            margin-bottom: 60px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .product-card {
            background: linear-gradient(135deg, #fff 0%, #fff5f7 100%);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(214, 51, 132, 0.2);
        }

        .product-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            display: block;
        }

        .product-title {
            font-size: 1.8rem;
            color: #d63384;
            margin-bottom: 15px;
        }

        .product-description {
            color: #666;
            line-height: 1.6;
            font-size: 1.1rem;
        }

        .contact {
            background: linear-gradient(135deg, #d63384 0%, #ff6b9d 100%);
            padding: 80px 20px;
            text-align: center;
            color: white;
        }

        .contact h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .contact-button {
            background: white;
            color: #d63384;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        .contact-button:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(255,255,255,0.3);
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 3rem;
            }
            
            .subtitle {
                font-size: 1.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <section class="hero">
        <div class="hero-content">
            <h1>Dulce Arte</h1>
            <p class="subtitle">Pastelería Artesanal con Amor</p>
            <button class="cta-button" onclick="document.querySelector('.products').scrollIntoView({behavior: 'smooth'})">
                Ver Productos
            </button>
        </div>
    </section>

    <section class="products">
        <h2 class="section-title">Nuestras Especialidades</h2>
        <div class="product-grid">
            <div class="product-card">
                <span class="product-icon">🎂</span>
                <h3 class="product-title">Tortas Personalizadas</h3>
                <p class="product-description">Diseños únicos para tus celebraciones más especiales. Cada torta es una obra de arte comestible.</p>
            </div>
            
            <div class="product-card">
                <span class="product-icon">🧁</span>
                <h3 class="product-title">Cupcakes Gourmet</h3>
                <p class="product-description">Deliciosos cupcakes con sabores innovadores y decoraciones encantadoras para cualquier ocasión.</p>
            </div>
            
            <div class="product-card">
                <span class="product-icon">🍰</span>
                <h3 class="product-title">Pasteles Clásicos</h3>
                <p class="product-description">Recetas tradicionales con el toque casero que te hará sentir en casa con cada bocado.</p>
            </div>
        </div>
    </section>

    <section class="contact">
        <h2>¿Listo para endulzar tu día?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 30px;">Contáctanos y crea tu pedido personalizado</p>
        <button class="contact-button" onclick="alert('¡Gracias por tu interés! Contáctanos al WhatsApp o redes sociales.')">
            Hacer un Pedido
        </button>
    </section>
</body>
</html>