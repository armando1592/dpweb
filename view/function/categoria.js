function validar_Form() { //Declara una función llamada validar_Form, que se va a encargar de validar los datos del formulario antes de enviarlos.
    let nombre = document.getElementById("nombre").value.trim();  //usca el input con id="nombre" y guarda su valor (sin espacios al inicio o final) en la variable nombre.
    let detalle = document.getElementById("detalle").value.trim();

    if (nombre === "" || detalle === "") { //Comprueba si alguno de los dos campos está vacío.
        Swal.fire("Error", "Campos vacíos", "warning"); //Si al menos un campo está vacío, lanza un alerta emergente con SweetAlert indicando "Campos vacíos" con ícono de advertencia.
        return; // termina la función aquí para evitar que continúe si los campos no están llenos.
    }
    registrarCategoria(); //Si los campos están correctos, llama a la función registrarCategoria() para enviar los datos al servidor.
}

if (document.querySelector('#categoriaForm')) { //Verifica si existe un formulario en el HTML con id="categoriaForm". Si no existe, no hace nada.
    let frm_user = document.querySelector('#categoriaForm'); // Crea una variable frm_user que apunta al formulario HTML encontrado.
    frm_user.onsubmit = function (e) { //Define lo que pasará cuando se intente enviar el formulario (evento onsubmit).
        e.preventDefault(); //Evita que el formulario se envíe de forma tradicional (y recargue la página).


        validar_Form(); //En lugar de enviarse, llama a la función validar_Form() para verificar los campos.
    }
}

async function registrarCategoria() {//Declara una función asincrónica llamada registrarCategoria. Esto permite usar await para esperar respuestas sin bloquear el navegador.
    try { //Inicia un bloque try para atrapar errores si algo falla al enviar los datos.

        const datos = new FormData(document.getElementById('categoriaForm'));//Crea un objeto FormData que captura automáticamente todos los campos del formulario con id="categoriaForm" (incluyendo nombre y detalle).

        let respuesta = await fetch(base_url + 'control/categoriaController.php?tipo=registrar', { //Realiza una petición HTTP con fetch hacia el controlador PHP categoriaController.php, agregando ?tipo=registrar en la URL.await hace que JS espere la respuesta antes de seguir.
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        let json = await respuesta.json(); //Convierte la respuesta del servidor a formato JSON y lo guarda en la variable json

        if (json.status) { //Si el servidor responde con status: true, significa que el registro fue exitoso.
            Swal.fire("Éxito", json.msg, "success");
            document.getElementById('categoriaForm').reset();//Limpia el formulario, dejándolo en blanco después del registro exitoso.
        } else {
            Swal.fire("Error", json.msg, "error");//Si status no es true, significa que hubo un error (por ejemplo, categoría ya existe).
        }
    } catch (error) { //Si ocurre cualquier error (fallo de red, JSON malformado, etc.), se captura aquí.
        Swal.fire("Error", "Fallo al enviar datos", "error");
        console.error("Error al registrar categoría: " + error); //Muestra el error técnico en la consola del navegador para que el desarrollador lo vea.
    }
}

/*Valida campos del formulario
Evita recargar la página
Envía datos con fetch()
*/














