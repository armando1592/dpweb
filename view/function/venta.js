let productos_venta = {};
let id = 2;
let id2 = 4;
let producto = {};
producto.nombre = "Producto A";
producto.precio = 100;
producto.cantidad = 2;

let producto2 = {};
producto2.nombre = "Producto B";
producto2.precio = 200;
producto2.cantidad = 1;
//productos_venta.push(producto);

productos_venta[id] = producto;
productos_venta[id2] = producto2;
console.log(productos_venta);

async function agregar_producto_temporal(id = null, precio = null, cantidad = null) {
    // Si no se pasan parámetros, usar los valores de los inputs ocultos
    if (id === null) {
        id = document.getElementById('id_producto_venta').value;
    }
    if (precio === null) {
        precio = document.getElementById('producto_precio_venta').value;
    }
    if (cantidad === null) {
        cantidad = document.getElementById('producto_cantidad_venta').value;
    }

    const datos = new FormData();
    datos.append('id_producto', id);
    datos.append('precio', precio);
    datos.append('cantidad', cantidad);
    try {
        let respuesta = await fetch(base_url + 'control/VentaController.php?tipo=registrarTemporal', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            if (json.msg == "registrado") {
                alert("el producto fue registrado");
            } else {
                alert("el producto fue actualizado");
            }
            // Recargar el carrito después de agregar
            cargarCarrito();
        }

    } catch (error) {
        console.log("error en agregar producto temporal " + error);
    }
}

async function cargarCarrito() {
    try {
        let respuesta = await fetch(base_url + 'control/VentaController.php?tipo=listarTemporales', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });
        let json = await respuesta.json();
        let tbody = document.getElementById('lista_compra');
        tbody.innerHTML = '';
        let subtotal = 0;
        if (json.status && json.data.length > 0) {
            json.data.forEach(t_venta => {
                let total = t_venta.precio * t_venta.cantidad;
                subtotal += total;
                let fila = document.createElement('tr');
                fila.innerHTML = `
                    <td>${t_venta.nombre_producto}</td>
                    <td><input type="number" class="quantity-input" value="${t_venta.cantidad}" onchange="actualizarCantidad(${t_venta.id}, this.value)" onkeyup="actualizarCantidadTemporal(${t_venta.id})"></td>
                    <td>S/ ${t_venta.precio}</td>
                    <td>S/ ${total.toFixed(2)}</td>
                    <td><button class="btn-remove" onclick="eliminarDelCarrito(${t_venta.id})">×</button></td>
                `;
                tbody.appendChild(fila);
            });
        } else {
            tbody.innerHTML = '<tr><td colspan="5" class="empty-cart">El carrito está vacío</td></tr>';
        }
        // Actualizar totales
        document.getElementById('subtotal').textContent = 'S/ ' + subtotal.toFixed(2);
        let igv = subtotal * 0.18;
        document.getElementById('igv').textContent = 'S/ ' + igv.toFixed(2);
        let total = subtotal + igv;
        document.getElementById('total').textContent = 'S/ ' + total.toFixed(2);
    } catch (error) {
        console.log('Error al cargar carrito: ' + error);
    }
}

async function actualizarCantidad(id, cantidad) {
    const datos = new FormData();
    datos.append('id', id);
    datos.append('cantidad', cantidad);
    try {
        let respuesta = await fetch(base_url + 'control/VentaController.php?tipo=actualizarCantidadTemporal', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json = await respuesta.json();
        if (json.status) {
            cargarCarrito(); // Recargar carrito
        } else {
            alert('Error al actualizar cantidad');
        }
    } catch (error) {
        console.log('Error al actualizar cantidad: ' + error);
    }
}

async function eliminarDelCarrito(id) {
    if (confirm('¿Estás seguro de eliminar este producto del carrito?')) {
        const datos = new FormData();
        datos.append('id', id);
        try {
            let respuesta = await fetch(base_url + 'control/VentaController.php?tipo=eliminarTemporal', {
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                body: datos
            });
            let json = await respuesta.json();
            if (json.status) {
                cargarCarrito(); // Recargar carrito
            } else {
                alert('Error al eliminar producto');
            }
        } catch (error) {
            console.log('Error al eliminar producto: ' + error);
        }
    }
}
 
//