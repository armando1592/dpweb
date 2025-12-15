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

async function agregar_producto_temporal(idArg, precioArg, cantidadArg) {
    let id = (typeof idArg !== 'undefined') ? idArg : document.getElementById('id_producto_venta').value;
    let precio = (typeof precioArg !== 'undefined') ? precioArg : document.getElementById('producto_precio_venta').value;
    let cantidad = (typeof cantidadArg !== 'undefined') ? cantidadArg : document.getElementById('producto_cantidad_venta').value;
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
        let json = await respuesta.json();
        if (json.status) {
            if (json.msg == "registrado") {
                alert("El producto fue agregado al carrito");
            } else {
                alert("Cantidad actualizada en el carrito");
            }
            listar_temporales();
            act_subt_general();
        }

    } catch (error) {
        console.log("error en agregar producto temporal " + error);
    }
}
async function listar_temporales() {
    try {
        let respuesta = await fetch(base_url + 'control/VentaController.php?tipo=listar_venta_temporal', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });
        json = await respuesta.json();
        if (json.status) {
            let lista_temporal = '';
            json.data.forEach(t_venta => {
                const subItem = (t_venta.cantidad * t_venta.precio).toFixed(2);
                lista_temporal += `<tr>
                                    <td>${t_venta.nombre}</td>
                                    <td><input type="number" min="1" id="cant_${t_venta.id}" value="${t_venta.cantidad}" style="width: 60px;" onkeyup="actualizar_subtotal(${t_venta.id}, ${t_venta.precio});" onchange="actualizar_subtotal(${t_venta.id}, ${t_venta.precio});"></td>
                                    <td>S/. ${Number(t_venta.precio).toFixed(2)}</td>
                                    <td id="subtotal_${t_venta.id}">S/. ${subItem}</td>
                                    <td><button class="btn btn-danger btn-sm" onclick="eliminar_temporal(${t_venta.id});">Eliminar</button></td>
                                </tr>`
            });
            document.getElementById('lista_compra').innerHTML = lista_temporal;
            act_subt_general();
        }
    } catch (error) {
        console.log("error al cargar productos temporales " + error);
    }
}

async function eliminar_temporal(id) {
    if (!confirm('¿Confirmar eliminar este item del carrito?')) return;
    try {
        const datos = new FormData();
        datos.append('id', id);
        let respuesta = await fetch(base_url + 'control/VentaController.php?tipo=eliminar_temporal', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json = await respuesta.json();
        if (json.status) {
            listar_temporales();
            act_subt_general();
        } else {
            alert('Error al eliminar item');
        }
    } catch (error) {
        console.log('error al eliminar temporal: ' + error);
    }
}
async function actualizar_subtotal(id, precio) {
    let cantidad = document.getElementById('cant_' + id).value;
    try {
        const datos = new FormData();
        datos.append('id', id);
        datos.append('cantidad', cantidad);
        let respuesta = await fetch(base_url + 'control/VentaController.php?tipo=actualizar_cantidad', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json = await respuesta.json();
        if (json.status) {
            let subtotal = (Number(cantidad) * Number(precio));
            document.getElementById('subtotal_' + id).innerHTML = 'S/. ' + subtotal.toFixed(2);
            act_subt_general();
        }
    } catch (error) {
        console.log("error al actualizar cantidad : " + error);
    }
}

async function act_subt_general() {
    try {
        let respuesta = await fetch(base_url + 'control/VentaController.php?tipo=listar_venta_temporal', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });
        json = await respuesta.json();
        if (json.status) {
                let subtotal_general = 0;
                json.data.forEach(t_venta => {
                    subtotal_general += (t_venta.precio * t_venta.cantidad);
                });
                let igv = subtotal_general * 0.18;
                let total = subtotal_general + igv;
                document.getElementById('subtotal').innerHTML = 'S/. ' + subtotal_general.toFixed(2);
                document.getElementById('igv').innerHTML = 'S/. ' + igv.toFixed(2);
                document.getElementById('total').innerHTML = 'S/. ' + total.toFixed(2);
            }
    } catch (error) {
        console.log("error al cargar productos temporales " + error);
    }
}

function cargarCarrito() {
    // Compatibilidad con llamadas desde la vista
    listar_temporales();
    act_subt_general();
}

// Abre modal y carga resumen de la venta
async function abrirModalVenta() {
    try {
        let respuesta = await fetch(base_url + 'control/VentaController.php?tipo=listar_venta_temporal', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });
        let json = await respuesta.json();
        let body = '';
        if (json.status && json.data.length > 0) {
            body += `<table class="table">
                        <thead><tr><th>Producto</th><th>Cant.</th><th>Precio</th><th>Subtotal</th></tr></thead><tbody>`;
            let subtotal_general = 0;
            json.data.forEach(item => {
                let sub = Number(item.precio) * Number(item.cantidad);
                subtotal_general += sub;
                body += `<tr>
                            <td>${item.nombre}</td>
                            <td>${item.cantidad}</td>
                            <td>S/. ${Number(item.precio).toFixed(2)}</td>
                            <td>S/. ${sub.toFixed(2)}</td>
                         </tr>`;
            });
            let igv = subtotal_general * 0.18;
            let total = subtotal_general + igv;
            body += `</tbody></table>
                     <div class="d-flex justify-content-end">
                        <div style="min-width:220px;">
                           <div class="d-flex justify-content-between"><strong>Subtotal:</strong><span>S/. ${subtotal_general.toFixed(2)}</span></div>
                           <div class="d-flex justify-content-between"><strong>IGV (18%):</strong><span>S/. ${igv.toFixed(2)}</span></div>
                           <div class="d-flex justify-content-between"><strong>Total:</strong><span>S/. ${total.toFixed(2)}</span></div>
                        </div>
                     </div>
                     <div class="mt-3 text-end">
                       <button class="btn btn-success" onclick="realizarVenta();">Confirmar Venta</button>
                     </div>`;
        } else {
            body = '<p>El carrito está vacío.</p>';
        }
        const modalBody = document.getElementById('venta_resumen');
        if (modalBody) modalBody.innerHTML = body;
    } catch (error) {
        console.log('error al cargar modal de venta: ' + error);
    }
}

    // Buscar cliente por DNI desde modal de venta
    async function buscar_cliente_venta() {
        const dniElem = document.getElementById('cliente_dni');
        const nombreElem = document.getElementById('cliente_nombre');
        if (!dniElem) return;
        const dni = dniElem.value.trim();
        if (dni === '') {
            alert('Ingrese un DNI');
            return;
        }
        try {
            const datos = new FormData();
            datos.append('dni', dni);
            let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=buscar_por_dni', {
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                body: datos
            });
            let json = await respuesta.json();
            if (json.status) {
                if (nombreElem) nombreElem.value = json.data.razon_social || '';
                const idElem = document.getElementById('cliente_id');
                if (idElem) idElem.value = json.data.id || '';
            } else {
                if (nombreElem) nombreElem.value = '';
                const idElem = document.getElementById('cliente_id');
                if (idElem) idElem.value = '';
                alert('Cliente no encontrado');
            }
        } catch (error) {
            console.log('Error al buscar cliente: ' + error);
        }
    }

    // Ejecutar búsqueda con Enter en el campo DNI dentro del modal
    document.addEventListener('DOMContentLoaded', function() {
        const dniElem = document.getElementById('cliente_dni');
        if (dniElem) {
            dniElem.addEventListener('keydown', function(event) {
                if (event.key === 'Enter') {
                    event.preventDefault();
                    buscar_cliente_venta();
                }
            });
        }
    });

    // Registrar venta al confirmar desde el modal
    async function realizarVenta() {
        const idClienteElem = document.getElementById('cliente_id');
        const id_cliente = idClienteElem ? idClienteElem.value : 0;
        const fecha_venta = new Date().toISOString().slice(0, 19).replace('T', ' ');
        try {
            const datos = new FormData();
            datos.append('id_cliente', id_cliente || 0);
            datos.append('fecha_venta', fecha_venta);
            let response = await fetch(base_url + 'control/VentaController.php?tipo=registrar_venta', {
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                body: datos
            });
            let text = await response.text();
            try {
                let json = JSON.parse(text);
                if (json.status) {
                    alert('Venta registrada con éxito');
                    // Cerrar modal
                    const modalEl = document.getElementById('staticBackdrop');
                    if (modalEl) {
                        const modalInstance = bootstrap.Modal.getInstance(modalEl);
                        if (modalInstance) modalInstance.hide();
                    }
                    listar_temporales();
                    act_subt_general();
                } else {
                    alert(json.msg);
                }
            } catch (e) {
                console.error('Respuesta no JSON al registrar venta:', text);
                alert('Error en servidor al registrar venta. Revisa la consola para más detalles.');
            }
        } catch (error) {
            console.log('error al registrar venta: ' + error);
        }
    }
//ir ala venta y buscar por id delc liente y vendedor
// comprobante de pago de buscar todo losdatos y 
    //     // Cuando se abra el modal, enfocar el DNI y si ya tiene valor, buscar automáticamente
    //     const modalEl = document.getElementById('staticBackdrop');
    //     if (modalEl) {
    //         modalEl.addEventListener('show.bs.modal', function() {
    //             const d = document.getElementById('cliente_dni');
    //             if (d) {
    //                 d.focus();
    //                 if (d.value && d.value.trim().length >= 6) buscar_cliente_venta();
    //             }
    //             // Cargar resumen de la venta al abrir el modal
    //             abrirModalVenta();
    //         });
    //     }
    // });

// // Simula finalizar venta y limpia el carrito temporal
// async function realizarVenta() {
//     if (!confirm('¿Confirmar y finalizar la venta?')) return;
//     try {
//         let respuesta = await fetch(base_url + 'control/VentaController.php?tipo=finalizar_venta', {
//             method: 'POST',
//             mode: 'cors',
//             cache: 'no-cache'
//         });
//         let json = await respuesta.json();
//         if (json.status) {
//             alert('Venta registrada (simulada). Carrito limpiado.');
//             // Cerrar modal
//             const modalEl = document.getElementById('staticBackdrop');
//             if (modalEl) {
//                 const modalInstance = bootstrap.Modal.getInstance(modalEl);
//                 if (modalInstance) modalInstance.hide();
//             }
//             listar_temporales();
//             act_subt_general();
//         } else {
//             alert('Error al finalizar venta');
//         }
//     } catch (error) {
//         console.log('error en realizarVenta: ' + error);
//     }
// }

// // Vincular evento al mostrar modal si existe Bootstrap
// document.addEventListener('DOMContentLoaded', function() {
//     const modalEl = document.getElementById('staticBackdrop');
//     if (modalEl) {
//         modalEl.addEventListener('show.bs.modal', abrirModalVenta);
//     }
// });