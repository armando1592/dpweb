function validar_Form(){
    let nro_documento = document.getElementById("nombre").value;
    let razon_social = document.getElementById("detalle").value;
}
if (nombre=="" || detalle=="")  {
    alert("Error: Existen campos vacios");
    return;
    registrarCategoria();
   }

if (document.querySelector('#categoriaForm')) {
    let frm_user = document.querySelector('#categoriaForm');
    frm_user.onsubmit = function(e){
        e.preventDefault();
        validar_Form();
    }
    }

async function registrarCategoria() {
    try {
        // capturar campos de formulario(HTML)
        const datos = new FormData(categoriaForm);
        //enviar datos al controlador
        let respuesta = await fetch(base_url + 'control/categoriaController.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json =await respuesta.json();
        //validamos que json.status sea = true
        if (json.status) { // true
            alert(json.msg);
            document.getElementById ('categoriaForm').reset();
        }else{
            alert(json.msg);
        }
    } catch (error) {
        console.log("Error al registrar categoria:" + error);
    }
}


