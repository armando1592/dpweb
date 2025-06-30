function validar_Form() {
    let nombre = document.getElementById("nombre").value.trim();
    let detalle = document.getElementById("detalle").value.trim();

    if (nombre === "" || detalle === "") {
        Swal.fire("Error", "Campos vacíos", "warning");
        return;
    }
    registrarCategoria();
}

if (document.querySelector('#categoriaForm')) {
    let frm_user = document.querySelector('#categoriaForm');
    frm_user.onsubmit = function (e) {
        e.preventDefault();
        validar_Form();
    }
}

async function registrarCategoria() {
    try {
        const datos = new FormData(document.getElementById('categoriaForm'));

        let respuesta = await fetch(base_url + 'control/categoriaController.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        let json = await respuesta.json();

        if (json.status) {
            Swal.fire("Éxito", json.msg, "success");
            document.getElementById('categoriaForm').reset();
        } else {
            Swal.fire("Error", json.msg, "error");
        }
    } catch (error) {
        Swal.fire("Error", "Fallo al enviar datos", "error");
        console.error("Error al registrar categoría: " + error);
    }
}