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

async function agregar_producto_temporal() {
    let id = document.getElementById('id_producto_venta').value;
    let precio = document.getElementById('producto_precio_venta').value;
    let cantidad = document.getElementById('producto_cantidad_venta').value;
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
        }

    } catch (error) {
        console.log("error en agregar producto temporal " + error);
    }
}

async function agregar_producto_venta(id_producto) {
    const datos = new FormData();
    datos.append('id_producto', id_producto);

    try {
        let res = await fetch(base_url + 'control/productosController.php?tipo=ver', {
            method: 'POST',
            body: datos
        });
        let json = await res.json();

        if (json.status) {
            // Verificamos si los elementos existen antes de intentar asignarles valor
            const idElement = document.getElementById('id_producto_venta');
            const precioElement = document.getElementById('producto_precio_venta');
            
            if (idElement && precioElement) {
                idElement.value = json.data.id;
                precioElement.value = json.data.precio;
                await agregar_producto_temporal();
            } else {
                console.error("Elementos del formulario no encontrados");
                alert("Error: no se encontraron los elementos del formulario");
            }
        } else {
            console.error("Error al obtener el producto:", json.msg);
            alert("Error al obtener el producto: " + json.msg);
        }
    } catch (error) {
        console.error("Error en agregar_producto_venta:", error);
        alert("Error al agregar el producto al carrito");
    }
}

// Función para agregar producto temporal al carrito
async function agregar_producto_temporal() {
    try {
        let id_producto = document.getElementById("id_producto_venta")?.value;
        let precio = document.getElementById("producto_precio_venta")?.value;
        
        if (!id_producto || !precio) {
            console.error("Faltan datos del producto");
            return;
        }

        const datos = new FormData();
        datos.append('id_producto', id_producto);
        datos.append('precio', precio);
        datos.append('cantidad', 1);

        await fetch(base_url + 'control/ventaController.php?tipo=registrarTemporal', {
            method: 'POST',
            body: datos
        });

        cargarCarrito(); // recargamos
    } catch (error) {
        console.error("Error en agregar_producto_temporal:", error);
    }
}

async function cargarCarrito() {
    let res = await fetch(base_url + 'control/ventaController.php?tipo=listarTemporales', {
        method: 'POST'
    });
    let json = await res.json();

    let tbody = document.getElementById('lista_compra');
    tbody.innerHTML = '';
    let subtotal = 0;

    if (json.status && json.data.length > 0) {
        json.data.forEach(item => {
            let sub = parseFloat(item.precio) * parseInt(item.cantidad);
            subtotal += sub;

            tbody.innerHTML += `
                <tr>
                    <td>${item.nombre}</td>
                    <td>
                        <button class="btn btn-sm btn-outline-secondary" onclick="cambiarCant(${item.id_producto}, 'disminuir')">-</button>
                        ${item.cantidad}
                        <button class="btn btn-sm btn-outline-secondary" onclick="cambiarCant(${item.id_producto}, 'aumentar')">+</button>
                    </td>
                    <td>S/ ${parseFloat(item.precio).toFixed(2)}</td>
                    <td>S/ ${sub.toFixed(2)}</td>
                    <td><button class="btn btn-sm btn-danger" onclick="eliminarItem(${item.id})">X</button></td>
                </tr>
            `;
        });
    }

    let igv = subtotal * 0.18;
    let total = subtotal + igv;

    document.getElementById('subtotal_total').innerText = 'S/ ' + subtotal.toFixed(2);
    document.getElementById('igv_total').innerText = 'S/ ' + igv.toFixed(2);
    document.getElementById('total_final').innerText = 'S/ ' + total.toFixed(2);
}

// + o - cantidad
async function cambiarCant(id_producto, accion) {
    const datos = new FormData();
    datos.append('id_producto', id_producto);
    datos.append('accion', accion);

    await fetch(base_url + 'control/ventaController.php?tipo=cambiarCantidad', {
        method: 'POST',
        body: datos
    });
    cargarCarrito();
}

async function eliminarItem(id_temporal) {
    const datos = new FormData();
    datos.append('id', id_temporal);

    await fetch(base_url + 'control/ventaController.php?tipo=eliminarDelCarrito', {
        method: 'POST',
        body: datos
    });
    cargarCarrito();
}

// Al cargar la página
window.addEventListener('load', () => {
    cargarProductosTienda();
    cargarCarrito();
});