

function validar_form() {// Inicia la función que se encargará de verificar que todos los campos estén llenos antes de enviar el formulario.
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
    registrarUsuario();//si todo está lleno, llama a la función que enviará los datos
}

// Evita que se envie el formulario xd

if (document.querySelector('#frm_user')) { //Verifica si existe un formulario con el ID
    let frm_user = document.querySelector('#frm_user');//Guarda ese formulario en una variable
    frm_user.onsubmit = function (e) {//cancela el envío automático del formulario HTML usando e.preventDefault() y en su lugar llama a validar_form() 
        e.preventDefault();
        validar_form();//Esto permite validar primero en JS antes de mandar los datos al servidor.
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


/*usuarios*/
async function view_users() {
    try {
        let respuesta = await fetch(base_url + 'control/usuarioController.php?tipo=mostrar_usuarios', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });
        let json = await respuesta.json();
        if (json && json.length > 0) {
            let html = '';
            json.forEach((user, index) => {
                html += `<tr>
                    <td>${index + 1}</td>
                    <td>${user.nro_identidad || ''}</td>
                    <td>${user.razon_social|| ''}</td>
                    <td>${user.correo ||''}</td> 
                    <td>${user.rol ||''}</td> 
                    <td>${user.estado || ''}</td>
                </tr>`;
            });
            document.getElementById('content_users').innerHTML = html;
        } else {
            document.getElementById('content_users').innerHTML = '<tr><td colspan="6">No hay usuarios disponibles</td></tr>';
        }
    } catch (error) {
        console.log(error);
        document.getElementById('content_users').innerHTML = '<tr><td colspan="6">Error al cargar los usuarios</td></tr>';
    }
}

if (document.getElementById('content_users')) {
    view_users();
}




































































