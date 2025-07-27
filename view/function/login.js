document.getElementById('togglePassword').addEventListener('click', function() {
    const password = document.getElementById('password');
    const icon = this.querySelector('i');
    if (password.type === 'password') {
        password.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        password.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
});

// innicias sesion
async function iniciar_sesion() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    if (username == "" || password == "") {
        alert("Error, campos vacios!");
        return;
    }
    try {
        const datos = new FormData(frm_login);
        let respuesta = await fetch(base_url + 'control/UsuarioController.php?tipo=iniciar_sesion', {
            method: 'POST',
            MODE: 'cors',
            cache: 'no-cache',
            body: datos
        });

        //*----------------
        let json = await respuesta.json();
        //validamos que json.status sea = true
        if (json.status) { // true
        
    
            location.replace(base_url + 'new-user');
        } else {
            alert(json.msg);
        }

    } catch (error) {
        console.log(error);

    }
}
async function cerrarSesion() {
    try {
        let respuesta = await fetch(base_url + 'controllers/Controller_login.php?tipo=cerrar_sesion', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });
        let json = await respuesta.json();
        if (json.status) {
            location.replace(base_url + "login");
        }
    } catch (error) {
        console.log('Ocurrió un error', error);
    }
}
