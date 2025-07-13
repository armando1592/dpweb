

// innicias sesion
/*async function iniciar_sesion() {
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
}*/