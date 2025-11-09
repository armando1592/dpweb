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
    if (nro_documento == "" || razon_social == "" || telefono == "" || correo == "" || departamento == "" || provincia == "" || distrito == "" || cod_postal == "" || direccion == "" || rol == "") {
        Swal.fire({
            title: "Error campos vacios!",
            icon: "Error",
            draggable: true
        });
        return;
    }
    if (tipo == "nuevo") {
        registrarCliente();
    }
    if (tipo == "actualizar") {
        actualizarCliente();
    }

}

if (document.querySelector('#frm_cliente')) {
    // evita que se envie el formulario
    let frm_cliente = document.querySelector('#frm_cliente');
    frm_cliente.onsubmit = function (e) {
        e.preventDefault();
        validar_form("nuevo");
    }
}
async function registrarCliente() {
    try {
        //capturar campos de formulario (HTML)
        const datos = new FormData(frm_cliente);
        //enviar datos a controlador
        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json = await respuesta.json();
        // validamos que json.status sea = True
        if (json.status) { //true
            alert(json.msg);
            document.getElementById('frm_cliente').reset();
        } else {
            alert(json.msg);
        }
    } catch (e) {
        console.log("Error al registrar Cliente:" + e);
    }
}

// ver clientes
async function view_clientes() {
    try {
        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=ver_clientes', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });
        json = await respuesta.json();
        contenidot = document.getElementById('content_clientes');
        if (json.status) {
            let cont = 1;
            json.data.forEach(usuario => {
                if (usuario.estado == 1) {
                    estado = "activo";
                } else {
                    estado = "inactivo";
                }
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila" + usuario.id;
                nueva_fila.className = "filas_tabla";
                nueva_fila.innerHTML = `
                            <td>${cont}</td>
                            <td>${usuario.nro_identidad}</td>
                            <td>${usuario.razon_social}</td>
                            <td>${usuario.correo}</td>
                            <td>${usuario.rol}</td>
                            <td>${estado}</td>
                            <td>
                                <a class="btn btn-primary" href="`+ base_url + `edit-clients/` + usuario.id + `">Editar</a>
                                <button class="btn btn-danger" onclick="fn_eliminar(` + usuario.id + `);">Eliminar</button>
                            </td>
                `;
                cont++;
                contenidot.appendChild(nueva_fila);
            });
        }
    } catch (error) {
        console.log('error en mostrar Cliente ' + e);
    }
}
if (document.getElementById('content_clientes')) {
    view_clientes();
}


// editar cliente
async function edit_cliente() {
    try {
        let id_persona = document.getElementById('id_persona').value;
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
        console.log('oops, ocurrió un error ' + error);
    }
}
if (document.querySelector('#frm_edit_cliente')) {
    // evita que se envie el formulario
    let frm_user = document.querySelector('#frm_edit_cliente');
    frm_user.onsubmit = function (e) {
        e.preventDefault();
        validar_form("actualizar");
    }
}

async function actualizarCliente() {
    const datos = new FormData(frm_edit_cliente);
    let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=actualizar', {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos
    });
    json = await respuesta.json();
    if (!json.status) {
        alert("Oooooops, ocurrio un error al actualizar, intentelo nuevamente");
        console.log(json.msg);
        return;
    }else{
        alert(json.msg);
    }
}



// eliminar cliente
async function fn_eliminar(id) {
    if (window.confirm("Confirmar eliminar?")) {
        eliminar(id);
    }
}

async function eliminar(id) {
    let datos = new FormData();
    datos.append('id_persona', id);
    let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=eliminar', {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos
    });
    json = await respuesta.json();
    if (!json.status) {
        alert("Oooooops, ocurrio un error al eliminar persona, intentelo mas tarde");
        console.log(json.msg);
        return;
    }else{
        alert(json.msg);
        location.replace(base_url + 'clients');
    }
}