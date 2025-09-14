
function validar_form(tipo) {// Inicia la función que se encargará de verificar que todos los campos estén llenos antes de enviar el formulario.
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

    if (nro_documento == "" || razon_social == "" || telefono == "" || correo == "" || departamento == "" || provincia == "" || distrito == "" || cod_postal == "" || direccion == "" || rol == "") {//Obtiene el valor de cada campo del formulario por su ID
        alert("Error: Existen campos vacios");//Si al menos uno lo está, muestra un alert() y no deja continuar.
        return;
    }
    if (tipo=="nuevo") {
        registrarUsuario();//si todo está lleno, llama a la función que enviará los datos
    }
     if (tipo=="actualizar") {
        actualizarUsuario();//si todo está lleno, llama a la función que enviará los datos
    }
   
}

// Evita que se envie el formulario xd

if (document.querySelector('#frm_user')) { //Verifica si existe un formulario con el ID
    let frm_user = document.querySelector('#frm_user');//Guarda ese formulario en una variable
    frm_user.onsubmit = function (e) {//cancela el envío automático del formulario HTML usando e.preventDefault() y en su lugar llama a validar_form() 
        e.preventDefault();
        validar_form("nuevo");//Esto permite validar primero en JS antes de mandar los datos al servidor.
    }

}

async function registrarUsuario() {//Declara una función asíncrona para enviar los datos al backend (PHP) usando fetch.
    try {
        // capturar campos de formulario(HTML) crea un objeto FormData con todos los datos del formulario.Esto se usa para enviar datos tipo formulario por POST.
        const datos = new FormData(frm_user);
        //enviar datos al controlador Envía los datos al archivo PHP (UsuarioController.php) usando método POST.
        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=registrar', {//Se usa ?tipo=registrar para indicar qué acción debe ejecutar el controlador PHP.
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json = await respuesta.json();// Espera la respuesta del servidor y la convierte en JSON.
        //validamos que json.status sea = true
        if (json.status) { //  Si json.status == true, muestra mensaje y resetea el formulario.
            alert(json.msg);
            document.getElementById('frm_user').reset();
        } else {
            alert(json.msg);//si hay un error (campos vacíos, usuario ya existe, etc.):
        }
    } catch (error) {
        console.log("Error al registrar usuario:" + error);
    } //Si falla el fetch, se captura el error y se muestra en la consola.
}
/*Revisa que todos los campos estén llenos
Bloquea el envío automático del formulario
Usa fetch() para enviar los datos al servidor vía AJAX  para hacer peticiones HTTP como GET o POST hacia un archivo PHP u otro servidor.
Empaqueta todos los campos para enviar al backend
Muestra el resultado (éxito o error)
*/




// inniciar sesion
async function iniciar_sesion() { //Declara una función asincrónica (usa async) llamada iniciar_sesion(). Esto permite usar await dentro de ella para esperar resultados sin bloquear la ejecución.
    let username = document.getElementById("username").value;//Obtiene el valor escrito en el input con id="username" (probablemente el número de identidad del usuario) y lo guarda en la variable username.
    let password = document.getElementById("password").value;
    if (username == "" || password == "") {//Comprueba si alguno de los dos campos está vacío.
        alert("Error, campos vacios!");//Si están vacíos, muestra un mensaje de error con alert() indicando que hay campos vacíos.
        return; //Detiene la ejecución de la función si hay campos vacíos.
    }
    try { //nicia un bloque try para capturar errores al realizar la solicitud al servidor.
        const datos = new FormData(frm_login); // Crea un objeto FormData llamado datos con todos los campos del formulario frm_login
        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=iniciar_sesion', { //Usa fetch para hacer una petición POST al controlador PHP UsuarioController.php, con el parámetro tipo=iniciar_sesion.
            method: 'POST',
            MODE: 'cors',
            cache: 'no-cache',
            body: datos
        });

        //*----------------
        let json = await respuesta.json(); //Convierte la respuesta del servidor a formato JSON. El resultado se guarda en la variable json
        //validamos que json.status sea = true
        if (json.status) { // true


            location.replace(base_url + 'new-user'); //Si el login fue exitoso, redirige al usuario a una nueva ruta Usa location.replace para que no pueda volver atrás con el botón de retroceso.
        } else {
            alert(json.msg);
        }

    } catch (error) {
        console.log(error); //Si hubo algún error en la petición (por ejemplo, conexión fallida o error en el servidor), se captura aquí y se imprime en consola.



    }
}
/*Toma los datos del formulario (username y password).

Valida que no estén vacíos.

Envía los datos al backend (UsuarioController.php?tipo=iniciar_sesion) usando fetch().

Espera la respuesta del servidor en formato JSON.

Si el servidor dice que la sesión fue exitosa (status: true):

Redirige al usuario a otra página (new-user).

Si hubo error (credenciales incorrectas, etc.):

Muestra un alert() con el mensaje del servidor.

Si hay errores de red o ejecución:

Se muestran en la consola. */


/* ver usuarios registrados*/
async function view_users() {
    try {
        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=ver_usuarios', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });

        let json = await respuesta.json();
        let content_users = document.getElementById('content_user');
        content_users.innerHTML = ''; // limpiamos antes de insertar

        json.forEach((user, index) => {
            let fila = document.createElement('tr');
            fila.innerHTML = `
                <td>${index + 1}</td>
                <td>${user.nro_identidad}</td>
                <td>${user.razon_social}</td>
                <td>${user.correo}</td>
                <td>${user.rol}</td>
                <td>${user.estado}</td>
                <td>
                    <a href="`+ base_url + `edit-user/` + user.id + `" class="btn btn-success">Editar</a>
                    <br>
                    <button data-id="${user.id}" class="btn btn-eliminar btn-danger">Eliminar</button>
                </td>
                
            `;

            content_users.appendChild(fila);
        });

        // Agrega el evento click a los botones de eliminar
        document.querySelectorAll('.btn-eliminar').forEach(btn => {
            btn.addEventListener('click', async function () {
                if (confirm('¿Está seguro de eliminar este usuario?')) {
                    const datos = new FormData();
                    datos.append('id', this.getAttribute('data-id'));
                    let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=eliminar', {
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
        console.log('Error al obtener usuarios, No hay nada: ' + error);
    }
}
if (document.getElementById('content_user')) {
    view_users();
}





async function edit_user() {
    try {
        let id_persona = document. getElementById('id_persona').value;
        const datos = new FormData();
        datos.append('id_persona',id_persona);

       let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
       });
       let json = await respuesta.json();
       if (!json.status) {
            alert(json.msg);
            return;
       }
       document.getElementById('nro_identidad').value=json.data.nro_identidad;
       document.getElementById('razon_social').value=json.data.razon_social;
       document.getElementById('telefono').value=json.data.telefono;
       document.getElementById('correo').value=json.data.correo;
       document.getElementById('departamento').value=json.data.departamento;
       document.getElementById('provincia').value=json.data.provincia;
       document.getElementById('distrito').value=json.data.distrito;
       document.getElementById('cod_postal').value=json.data.cod_postal;
       document.getElementById('direccion').value=json.data.direccion;
       document.getElementById('rol').value=json.data.rol; 

    } catch (error) {
        console.log('ocurrio un error, especial' + error);
    }
}
if (document.querySelector('#frm_edit_user')) {
    let frm_user = document.querySelector('#frm_edit_user');
    frm_user.onsubmit= function(e){
        e.preventDefault();
        validar_form("actualizar");  
    }
    
}

async function actualizarUsuario() {
   const datos = new FormData(frm_edit_user);
   let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=actualizar', { //Usa fetch para hacer una petición POST al controlador PHP UsuarioController.php, con el parámetro tipo=iniciar_sesion.
            method: 'POST',
            MODE: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (!json.status) {
            alert("Ooops, ocurrio un error al actualizar, intentalo nuevamente");
            console.log(json.msg);
            return;
        }else{
            alert(json.msg);
        }
}

// producto y categoria tarrea



















// async function cerrar_sesion(){
//     try{
//         let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=cerrar_sesion',{
//             method: 'GET',
//             mode: 'cors',
//             cache: 'no-cache',
//         });
//         let json = await respuesta.json();
//         if(json.status){
//             location.replace(base_url + 'login');
//         }else{
//             alert("No Puede cerrar sesion: " + json.msg);
//         }
//     }catch (error){
//         console.log("Error al cerrar sesion especial:", error);
//     }
// }





































































