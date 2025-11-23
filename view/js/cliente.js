// Script básico para mostrar productos de ejemplo
document.addEventListener('DOMContentLoaded', () => {
  const productos = [
    { nombre: 'Producto 1', precio: 25.50, imagen: 'https://via.placeholder.com/200' },
    { nombre: 'Producto 2', precio: 18.99, imagen: 'https://via.placeholder.com/200' },
    { nombre: 'Producto 3', precio: 32.00, imagen: 'https://via.placeholder.com/200' },
    { nombre: 'Producto 4', precio: 10.75, imagen: 'https://via.placeholder.com/200' }
  ];

  const contenedor = document.getElementById('productos-container');

  productos.forEach(prod => {
    const card = document.createElement('div');
    card.classList.add('card');
    card.innerHTML = `
      <img src="${prod.imagen}" alt="${prod.nombre}">
      <h3>${prod.nombre}</h3>
      <p>Precio: $${prod.precio.toFixed(2)}</p>
      <button>Agregar al carrito</button>
    `;
    contenedor.appendChild(card);
  });
});