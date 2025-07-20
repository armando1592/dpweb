<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tienda de Bicicletas</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <header>
    <div class="logo">🚴‍♂️ BikeStore</div>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Bicicletas</a></li>
        <li><a href="#">Accesorios</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h1>Explora el mundo en dos ruedas</h1>
      <p>Las mejores bicicletas al mejor precio</p>
      <a href="#productos" class="btn">Ver bicicletas</a>
    </div>
  </section>

  <section id="productos" class="productos">
    <h2>Bicicletas Destacadas</h2>
    <div class="grid-productos">
      <div class="producto">
        <img src="https://media.falabella.com/falabellaCL/123907019_01/public?wid=200&hei=200&qlt=70&fmt=webp" alt="Bicicleta 1" />
        <h3>Mountain Bike X100</h3>
        <p>$899.00</p>
        <button onclick="comprar('Mountain Bike X100')">Comprar</button>
      </div>
      <div class="producto">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJRvBRY_KkHfK53jg1m60-z5uo7NJ6uMa5KQ&s" alt="Bicicleta 2" />
        <h3>bmx fiend</h3>
        <p>$749.00</p>
        <button onclick="comprar('Urban Cruiser 500')">Comprar</button>
      </div>
      <div class="producto">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTepCtFtHoGzMmxz4r0YDASARfFyA9IE1hHWg&s" alt="Bicicleta 3" />
        <h3>Speedster Road 300</h3>
        <p>$999.00</p>
        <button onclick="comprar('Speedster Road 300')">Comprar</button>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 BikeStore. Todos los derechos reservados.</p>
  </footer>
<style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

body {
  color: #333;
  background-color: #f5f5f5;
}

header {
  background: #1a1a1a;
  color: #fff;
  padding: 15px 30px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-size: 1.8em;
  font-weight: bold;
}

nav ul {
  list-style: none;
  display: flex;
  gap: 20px;
}

nav a {
  color: #fff;
  text-decoration: none;
  font-weight: 500;
}

.hero {
  background: url('https://images.unsplash.com/photo-1518972559570-5cc84ef0f23f?auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
  height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: white;
}

.hero-text {
  background-color: rgba(0, 0, 0, 0.5);
  padding: 30px;
  border-radius: 10px;
}

.hero h1 {
  font-size: 3em;
  margin-bottom: 10px;
}

.hero p {
  font-size: 1.2em;
}

.btn {
  display: inline-block;
  margin-top: 15px;
  padding: 10px 20px;
  background-color: #00a859;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  transition: background 0.3s;
}

.btn:hover {
  background-color: #007f46;
}

.productos {
  padding: 60px 30px;
  background-color: white;
  text-align: center;
}

.productos h2 {
  margin-bottom: 40px;
  font-size: 2.2em;
}

.grid-productos {
  display: grid;
  gap: 30px;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
}

.producto {
  background: #fafafa;
  padding: 20px;
  border-radius: 8px;
  transition: box-shadow 0.3s;
}

.producto:hover {
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.producto img {
  width: 100%;
  border-radius: 5px;
}

.producto h3 {
  margin: 15px 0 5px;
}

.producto p {
  color: #00a859;
  font-weight: bold;
  margin-bottom: 10px;
}

.producto button {
  padding: 10px 15px;
  background-color: #00a859;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.producto button:hover {
  background-color: #007f46;
}

footer {
  text-align: center;
  padding: 20px;
  background-color: #1a1a1a;
  color: white;
}

</style>
  <script>
    function comprar(producto) {
  alert(`¡Has añadido "${producto}" al carrito!`);
}

  </script>
</body>
</html>
