let productos_venta = {};
let id = 2;
let id2 = 5;

let producto={};
producto.nombre = "Producto A";
producto.precio = 100;
producto.cantidad = 2;

let producto2={};
producto2.nombre = "Producto B";
producto2.precio = 700;
producto2.cantidad = 5;
// productos_venta.push(producto);
productos_venta [id2] = producto2;
productos_venta [id] = producto;
console.log(productos_venta);

productos_venta.splice(id,1);
console.log(productos_venta);
