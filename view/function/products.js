function validar_form() {
    let codigo = document.getElementById("codigo").value;
    let nombre = document.getElementById("nombre").value;
    let detalle = document.getElementById("detalle").value;
    let precio = document.getElementById("precio").value;
    let stock = document.getElementById("stock").value;
    let id_categoria = document.getElementById("id_categoria").value;
    let imagen = document.getElementById("imagen").value;
    let id_proveedor = document.getElementById("id_proveedor").value;
    ;

    if (codigo == "" || nombre == "" || detalle == "" || precio == "" || stock == "" || id_categoria == "" || imagen == "" || id_proveedor == "") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            background: "#fff url(view/img/cat.gif) center top 20% no-repeat",
            text: "Error: Campos Vacios!",
            footer: '<a> Es necesario rellenar todos los campos </a>'
        });
        return;
    }
    registrarProducto();


}

if (document.querySelector('#frm_products')) {
    //Evita que se envíe el formulario
    let frm_products = document.querySelector('#frm_products');
    frm_products.onsubmit = function (e) {
        e.preventDefault();
        validar_form();
    }
}

async function registrarProducto() {
    try {
        // capturar campos de formulario(HTML)
        const datos = new FormData(frm_products);
        //enviar datos al controlador
        let respuesta = await fetch(base_url + 'control/productsController.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json = await respuesta.json();
        if (json.status) {
            alert(json.msg);
            document.getElementById('frm_products').reset();
        } else {
            alert(json.msg);
        }

    } catch (error) {
        console.log("Error al registrar usuario:" + error);
    }
}