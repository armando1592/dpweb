function validar_form(tipo) {
    const getVal = id => {
        const el = document.getElementById(id);
        return el ? (typeof el.value === 'string' ? el.value.trim() : el.value) : '';
    };
    let nro_documento = getVal("nro_identidad");
    let razon_social = getVal("razon_social");
    let telefono = getVal("telefono");
    let correo = getVal("correo");
    let departamento = getVal("departamento");
    let provincia = getVal("provincia");
    let distrito = getVal("distrito");
    let cod_postal = getVal("cod_postal");
    let direccion = getVal("direccion");
    let rol = getVal("rol");

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
        // The edit page uses a hidden input named id_persona
        const id_persona_el = document.getElementById('id_persona');
        if (!id_persona_el) {
            console.warn('id_persona element not found on page');
            return;
        }
        let id_persona = (id_persona_el.value || '').toString().trim();
        if (!id_persona) {
            console.warn('edit_proveedor: id_persona is empty');
            alert('ID de proveedor no especificado. Vuelva a la lista de proveedores e inténtelo de nuevo.');
            return;
        }
        const datos = new FormData();
        datos.append('id_persona', id_persona);

        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();

        if (!json.status) {
            console.error('edit_proveedor: controller returned failure', json);
            alert(json.msg || 'Error al obtener datos del proveedor');
            return;
        }

        // Mirror clients.js behavior but set fields defensively so we don't read/set .value on null
        const data = json.data || {};
        const setField = (id, val) => {
            const el = document.getElementById(id);
            if (!el) {
                console.warn('edit_proveedor: missing element', id);
                return;
            }
            try {
                el.value = val || '';
            } catch (e) {
                console.warn('Could not set value for', id, e);
            }
        };

        setField('nro_identidad', data.nro_identidad);
        setField('razon_social', data.razon_social);
        setField('telefono', data.telefono);
        setField('correo', data.correo);
        setField('departamento', data.departamento);
        setField('provincia', data.provincia);
        setField('distrito', data.distrito);
        setField('cod_postal', data.cod_postal);
        setField('direccion', data.direccion);
        setField('rol', data.rol);

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
    try {
        const frm = document.querySelector('#frm_edit_proveedor');
        if (!frm) {
            alert('Formulario de edición no encontrado');
            return;
        }
        const datos = new FormData(frm);
        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=actualizar', {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos
    });
    json = await respuesta.json();
    if (!json.status) {
        console.error('actualizarProveedor: server responded with failure', json);
        alert(json.msg || "Ocurrió un error al actualizar el proveedor. Inténtelo nuevamente.");
        return;
    } else {
        alert(json.msg);
    }
    } catch (err) {
        console.error('Error al actualizar proveedor:', err);
    }
}

async function fn_eliminar(id) {
    if (window.confirm("¿Confirmar eliminación del proveedor?")) {
        eliminar(id);
    }
}

async function eliminar(id) {
    try {
        let datos = new FormData();
        // The controller expects 'id' as the POST key for deletion
        datos.append('id', id);
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
        location.replace(base_url + 'proveedor');
    }
    } catch (err) {
        console.error('Error al eliminar proveedor:', err);
    }
}
