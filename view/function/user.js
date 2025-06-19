function validar_form() {
    let nro_identidad = document.getElementById("nro_identidad").value;
    let razon_social = document.getElementById("razon_social").value;
    let telefono = document.getElementById("telefono").value;
    let correo = document.getElementById("correo").value;
    let departamento = document.getElementById("departamento").value;
    let provincia = document.getElementById("provincia").value;
    let distrito = document.getElementById("distrito").value;
    let cod_postal = document.getElementById("cod_postal").value;
    let direccion = document.getElementById("direccion").value;
    let rol = document.getElementById("rol").value;

    if (nro_identidad == "" || razon_social == "" || telefono == "" || correo == "" || departamento == "" || provincia == "" || distrito == "" || cod_postal == "" || direccion == "" || rol == "") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error: Campos Vacios!",
            footer: '<a> Es necesario rellenar todos los campos </a>'
        });
        return;
    }
    Swal.fire({
        title: "Bien , vamos a registrar.",
        width: 600,
        padding: "3em",
        color: "purple",
        background: "#fff url(/images/trees.png)",
        backdrop: `rgba(0,0,123,0.4)
        url("view/img/cat.gif") center top 100px no-repeat` 
    });
}

if (document.querySelector('#frm_user')) {
    //Evita que se envíe el formulario
    let frm_user = document.querySelector('#frm_user');
    frm_user.onsubmit = function (e) {
        e.preventDefault();
        validar_form();
    }
}





