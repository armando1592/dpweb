// Helper: parse JSON defensively and return null on failure
async function safeParseJSON(response) {
    const text = await response.text();
    try {
        return JSON.parse(text);
    } catch (e) {
        console.error('safeParseJSON (clients): response not JSON', text);
        return null;
    }
}

function validar_form(tipo) {
    const getVal = id => {
        const el = document.getElementById(id);
        return el ? (typeof el.value === 'string' ? el.value.trim() : el.value) : '';
    };

    let nro_documento = getVal('nro_identidad');
    let razon_social = getVal('razon_social');
    let telefono = getVal('telefono');
    let correo = getVal('correo');
    let departamento = getVal('departamento');
    let provincia = getVal('provincia');
    let distrito = getVal('distrito');
    let cod_postal = getVal('cod_postal');
    let direccion = getVal('direccion');
    let rol = getVal('rol');

    if (nro_documento == '' || razon_social == '' || telefono == '' || correo == '' || departamento == '' || provincia == '' || distrito == '' || cod_postal == '' || direccion == '' || rol == '') {
        Swal.fire({
            title: 'Error campos vacios!',
            icon: 'error',
            draggable: true
        });
        return;
    }
    if (tipo == 'nuevo') registrarCliente();
    if (tipo == 'actualizar') actualizarCliente();
}

if (document.querySelector('#frm_client')) {
    // evita que se envie el formulario
    const frm_client = document.querySelector('#frm_client');
    frm_client.onsubmit = function (e) {
        e.preventDefault();
        validar_form('nuevo');
    }
}

async function registrarCliente() {
    try {
        const frm = document.getElementById('frm_client');
        if (!frm) {
            console.warn('registrarCliente: form #frm_client not found');
            return;
        }
        const datos = new FormData(frm);
        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json = await safeParseJSON(respuesta);
        if (!json) {
            alert('Respuesta inválida del servidor al registrar cliente');
            return;
        }
        // validamos que json.status sea = True
        if (json.status) { //true
            alert(json.msg);
            frm.reset();
        } else {
            alert(json.msg);
        }
    } catch (e) {
        console.log('Error al registrar Cliente:' + e);
    }
}

async function view_clients() {
    try {
        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=ver_clients', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });
        const json = await safeParseJSON(respuesta);
        const contenidot = document.getElementById('content_clients');
        if (!contenidot) {
            console.warn('view_clients: container #content_clients not found');
            return;
        }
        contenidot.innerHTML = '';
        if (json && json.status && Array.isArray(json.data)) {
            let cont = 1;
            json.data.forEach(usuario => {
                const estado = usuario.estado == 1 ? 'activo' : 'inactivo';
                let nueva_fila = document.createElement('tr');
                nueva_fila.id = 'fila' + usuario.id;
                nueva_fila.className = 'filas_tabla';
                nueva_fila.innerHTML = `
                            <td>${cont}</td>
                            <td>${usuario.nro_identidad}</td>
                            <td>${usuario.razon_social}</td>
                            <td>${usuario.correo}</td>
                            <td>${usuario.rol}</td>
                            <td>${estado}</td>
                            <td>
                                <a href="${base_url}edit-client/${usuario.id}">Editar</a>
                                <button class="btn btn-danger" onclick="fn_eliminar(${usuario.id});">Eliminar</button>
                            </td>
                `;
                cont++;
                contenidot.appendChild(nueva_fila);
            });
        } else {
            contenidot.innerHTML = '<tr><td colspan="7">No hay clientes</td></tr>';
        }
    } catch (error) {
        console.log('error en mostrar usuario', error);
    }
}
if (document.getElementById('content_clients')) {
    view_clients();
}

async function edit_client() {
    try {
        const id_el = document.getElementById('id_persona');
        if (!id_el) {
            console.warn('edit_client: #id_persona not found');
            return;
        }
        let id_persona = (id_el.value || '').toString().trim();
        const datos = new FormData();
        datos.append('id_persona', id_persona);

        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        const json = await safeParseJSON(respuesta);
        if (!json || !json.status) {
            alert((json && json.msg) || 'Error al obtener datos del cliente');
            return;
        }
        const data = json.data || {};
        const setField = (id, val) => {
            const el = document.getElementById(id);
            if (!el) return;
            try { el.value = val || ''; } catch (e) { /* ignore */ }
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
        console.log('oops, ocurrió un error ' + error);
    }
}
if (document.querySelector('#frm_edit_user')) {
    // evita que se envie el formulario
    let frm_user = document.querySelector('#frm_edit_user');
    frm_user.onsubmit = function (e) {
        e.preventDefault();
        validar_form("actualizar");
    }
}

async function actualizarCliente() {
    try {
        const frm = document.getElementById('frm_edit_user');
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
        const json = await safeParseJSON(respuesta);
        if (!json) {
            alert('Respuesta inválida del servidor al actualizar cliente');
            return;
        }
        if (!json.status) {
            alert('Oooooops, ocurrio un error al actualizar, intentelo nuevamente');
            console.log(json.msg);
            return;
        } else {
            alert(json.msg);
        }
    } catch (error) {
        console.error('Error en actualizarCliente', error);
    }
}
async function fn_eliminar(id) {
    if (window.confirm("Confirmar eliminar?")) {
        eliminar(id);
    }
}

async function eliminar(id) {
    try {
        let datos = new FormData();
        // some callers post 'id', others 'id_persona' — controller accepts both
        datos.append('id_persona', id);
        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=eliminar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        const json = await safeParseJSON(respuesta);
        if (!json || !json.status) {
            alert('Oooooops, ocurrio un error al eliminar persona, intentelo mas tarde');
            console.log(json && json.msg);
            return;
        } else {
            alert(json.msg);
            location.replace(base_url + 'clients');
        }
    } catch (error) {
        console.error('Error en eliminar cliente', error);
    }
}