function validar_form(tipo) {
    let nro_documento = document.getElementById("nro_identidad").value;
    let razon_social = document.getElementById("razon_social").value;
    let telefono = document.getElementById("telefono").value;
    let correo = document.getElementById("correo").value;
    let departamento = document.getElementById("departamento").value;
    let provincia = document.getElementById("provincia").value;
    let distrito = document.getElementById("distrito").value;
    let cod_postal = document.getElementById("cod_postal").value;
    let direccion = document.getElementById("direccion").value;
    let rol = document.getElementById("rol").value;

    if (
        nro_documento == "" ||
        razon_social == "" ||
        telefono == "" ||
        correo == "" ||
        departamento == "" ||
        provincia == "" ||
        distrito == "" ||
        cod_postal == "" ||
        direccion == "" ||
        rol == ""
    ) {
        Swal.fire({
            title: "Error campos vacíos!",
            icon: "error",
            draggable: true
        });
        return;
    }

    if (tipo == "nuevo") {
        registrarProveedor();
    }
    if (tipo == "actualizar") {
        actualizarProveedor();
    }
}

if (document.querySelector('#frm_proveedor')) {
    let frm_proveedor = document.querySelector('#frm_proveedor');
    frm_proveedor.onsubmit = function (e) {
        e.preventDefault();
        validar_form("nuevo");
    }
}

async function registrarProveedor() {
    try {
        const frm = document.querySelector('#frm_proveedor');
        const datos = new FormData(frm);
        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let text = await respuesta.text();
        let json = {};
        try {
            json = JSON.parse(text);
        } catch (e) {
            console.error('Respuesta no JSON al registrar proveedor:', text);
            alert('Error en la respuesta del servidor al registrar proveedor');
            return;
        }
        if (json.status) {
            alert(json.msg);
            if (frm) frm.reset();
        } else {
            alert(json.msg);
        }
    } catch (e) {
        console.log("Error al registrar proveedor: " + e);
    }
}

async function view_proveedores() {
    try {
        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=ver_proveedores', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });
        json = await respuesta.json();
        contenidot = document.getElementById('content_proveedores');
        if (json.status) {
            let cont = 1;
            json.data.forEach(proveedor => {
                let estado = proveedor.estado == 1 ? "activo" : "inactivo";
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila" + proveedor.id;
                nueva_fila.className = "filas_tabla";
                nueva_fila.innerHTML = `
                    <td>${cont}</td>
                    <td>${proveedor.nro_identidad}</td>
                    <td>${proveedor.razon_social}</td>
                    <td>${proveedor.correo}</td>
                    <td>${proveedor.rol}</td>
                    <td>${estado}</td>
                    <td>
                        <a href="` + base_url + `edit-proveedor/` + proveedor.id + `">Editar</a>
                        <button class="btn btn-danger" onclick="fn_eliminar(` + proveedor.id + `);">Eliminar</button>
                    </td>
                `;
                cont++;
                contenidot.appendChild(nueva_fila);
            });
        }
    } catch (error) {
        console.log('Error al mostrar proveedores: ' + error);
    }
}

if (document.getElementById('content_proveedores')) {
    view_proveedores();
}

async function edit_proveedor() {
    try {
        let id_proveedor = document.getElementById('id_proveedor').value;
        const datos = new FormData();
        datos.append('id_proveedor', id_proveedor);

        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();

        if (!json.status) {
            alert(json.msg);
            return;
        }

        document.getElementById('nro_identidad').value = json.data.nro_identidad;
        document.getElementById('razon_social').value = json.data.razon_social;
        document.getElementById('telefono').value = json.data.telefono;
        document.getElementById('correo').value = json.data.correo;
        document.getElementById('departamento').value = json.data.departamento;
        document.getElementById('provincia').value = json.data.provincia;
        document.getElementById('distrito').value = json.data.distrito;
        document.getElementById('cod_postal').value = json.data.cod_postal;
        document.getElementById('direccion').value = json.data.direccion;
        document.getElementById('rol').value = json.data.rol;

    } catch (error) {
        console.log('Oops, ocurrió un error: ' + error);
    }
}

if (document.querySelector('#frm_edit_proveedor')) {
    let frm_edit_proveedor = document.querySelector('#frm_edit_proveedor');
    frm_edit_proveedor.onsubmit = function (e) {
        e.preventDefault();
        validar_form("actualizar");
    }
}

async function actualizarProveedor() {
    const datos = new FormData(frm_edit_proveedor);
    let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=actualizar', {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos
    });
    json = await respuesta.json();
    if (!json.status) {
        alert("Ocurrió un error al actualizar el proveedor. Inténtelo nuevamente.");
        console.log(json.msg);
        return;
    } else {
        alert(json.msg);
    }
}

async function fn_eliminar(id) {
    if (window.confirm("¿Confirmar eliminación del proveedor?")) {
        eliminar(id);
    }
}

async function eliminar(id) {
    let datos = new FormData();
    datos.append('id_proveedor', id);
    let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=eliminar', {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos
    });
    json = await respuesta.json();
    if (!json.status) {
        alert("Ocurrió un error al eliminar el proveedor. Inténtelo más tarde.");
        console.log(json.msg);
        return;
    } else {
        alert(json.msg);
        location.replace(base_url + 'proveedores');
    }
}
