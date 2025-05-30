<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla de Producto</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .product-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .product-image-container {
            width: 100%;
            height: 200px;
            overflow: hidden;
            background-color: #eee; /* Placeholder para la imagen */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-info {
            padding: 15px;
        }

        .product-title {
            font-size: 1.5em;
            margin-bottom: 5px;
            color: #333;
        }

        .product-price {
            color: #d32f2f;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-description {
            color: #555;
            font-size: 0.9em;
            margin-bottom: 15px;
        }

        .product-actions {
            display: flex;
            gap: 10px;
        }

        .add-to-cart-button,
        .view-details-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 0.9em;
            text-align: center;
            flex-grow: 1;
        }

        .view-details-button {
            background-color: #6c757d;
        }

        .add-to-cart-button:hover,
        .view-details-button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <h1>Nuestros Productos</h1>

    <div class="product-grid">
        <div class="product-card">
            <div class="product-image-container">
                <img src="https://via.placeholder.com/300x200/cccccc/999999?Text=Producto+1" alt="Producto 1" class="product-image">
            </div>
            <div class="product-info">
                <h2 class="product-title">Producto Asombroso 1</h2>
                <p class="product-price">$19.99</p>
                <p class="product-description">Una breve descripción de este increíble producto. Detalles sobre sus características y beneficios.</p>
                <div class="product-actions">
                    <a href="#" class="add-to-cart-button">Añadir al carrito</a>
                    <a href="#" class="view-details-button">Ver detalles</a>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image-container">
                <img src="https://via.placeholder.com/300x200/aaaaaa/666666?Text=Producto+2" alt="Producto 2" class="product-image">
            </div>
            <div class="product-info">
                <h2 class="product-title">Otro Producto Genial</h2>
                <p class="product-price">$29.50</p>
                <p class="product-description">Descripción concisa del segundo producto. Menciona sus puntos fuertes y usos principales.</p>
                <div class="product-actions">
                    <a href="#" class="add-to-cart-button">Añadir al carrito</a>
                    <a href="#" class="view-details-button">Ver detalles</a>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image-container">
                <img src="https://via.placeholder.com/300x200/bbbbbb/333333?Text=Producto+3" alt="Producto 3" class="product-image">
            </div>
            <div class="product-info">
                <h2 class="product-title">El Mejor Producto 3</h2>
                <p class="product-price">$9.99</p>
                <p class="product-description">Una descripción más larga para el tercer producto, resaltando sus características únicas y ventajas competitivas.</p>
                <div class="product-actions">
                    <a href="#" class="add-to-cart-button">Añadir al carrito</a>
                    <a href="#" class="view-details-button">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>