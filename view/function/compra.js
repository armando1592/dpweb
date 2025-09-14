function validar_form() {
    let codigo = document.getElementById("codigo").value;
    let nombre = document.getElementById("nombre").value;
    let detalle = document.getElementById("detalle").value;
    let precio = document.getElementById("precio").value;
    let stock = document.getElementById("stock").value;
    let id_categoria = document.getElementById("id_categoria").value;
    let imagen = document.getElementById("imagen").value;
    let id_proveedor = document.getElementById("id_proveedor").value;
    ;

    if (codigo == "" || nombre == "" || detalle == "" || precio == "" || stock == "" || id_categoria == "" || imagen == "" || id_proveedor == "") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            background: "#fff url(view/img/cat.gif) center top 20% no-repeat",
            text: "Error: Campos Vacios!",
            footer: '<a> Es necesario rellenar todos los campos </a>'
        });
        return;
    }
    registrarProducto();


}

if (document.querySelector('#frm_products')) {
    //Evita que se envíe el formulario
    let frm_products = document.querySelector('#frm_products');
    frm_products.onsubmit = function (e) {
        e.preventDefault();
        validar_form();
    }
}

async function registrarProducto() {
    try {
        // capturar campos de formulario(HTML)
        const datos = new FormData(frm_products);
        //enviar datos al controlador
        let respuesta = await fetch(base_url + 'control/ProductoController.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json = await respuesta.json();
        if (json.status) {
            alert(json.msg);
            document.getElementById('frm_products').reset();
        } else {
            alert(json.msg);
        }

    } catch (error) {
        console.log("Error al registrar producto:" + error);
    }
}

 // Mostrar productos
async function view_products() {
    try {
        let respuesta = await fetch(base_url + 'control/ProductoController.php?tipo=ver_productos', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });

        let json = await respuesta.json();
        let content_users = document.getElementById('content_products');
        content_users.innerHTML = ''; // limpiamos antes de insertar

        json.forEach((products, index) => {
            let fila = document.createElement('tr');
            fila.innerHTML = `
                <td>${index + 1}</td>
                <td>${products.codigo}</td>
                <td>${products.nombre}</td>
                <td>${products.detalle}</td>
                <td>${products.precio}</td>
                <td>${products.stock}</td>
                <td>${products.fecha_vencimiento}</td>
                <td>
                    <a href="`+ base_url + `edit-product/` + user.id + `" class="btn btn-success">Editar</a>
                    <br>
                    <button data-id="${user.id}" class="btn btn-eliminar btn-danger">Eliminar</button>
                </td>
                
            `;

            content_users.appendChild(fila);
        });

        // Agrega el evento click a los botones de eliminar
        document.querySelectorAll('.btn-eliminar').forEach(btn => {
            btn.addEventListener('click', async function () {
                if (confirm('¿Está seguro de eliminar este producto?')) {
                    const datos = new FormData();
                    datos.append('id', this.getAttribute('data-id'));
                    let respuesta = await fetch(base_url + 'control/ProductoController.php?tipo=eliminar', {
                        method: 'POST',
                        mode: 'cors',
                        cache: 'no-cache',
                        body: datos
                    });
                    let json = await respuesta.json();
                    alert(json.msg);
                    if (json.status) {
                        view_users(); // Recarga la lista
                    }
                }
            });
        });

    } catch (error) {
        console.log('Error al obtener productos, No hay nada: ' + error);
    }
}
if (document.getElementById('content_products')) {
    view_products();
}
