/*async function registrar_compra(){
    let id_producto = document.getElementById('id_producto').value; // solo id
    let cantidad = document.getElementById('cantidad').value;
    let precio = document.getElementById('precio').value;
    let id_trabajador = document.getElementById('id_trabajador').value; // solo id
    
    if (id_producto=="" || cantidad=="" || precio=="" || id_trabajador=="") { // = para asignar valor == para preguntar que valor tiene
        alert("error, campos vacios");
        return;
    }
try {
    const datos = new FormData(formCompra); // datos del formlario
    //enviar datos al controlador
    let respuesta = await fetch(base_url+'controller/Compra.php?tipo=registrar',{
        method:'POST',
        mode : 'cors',
        cache: 'no-cache',
        body :datos
    });
    json = await respuesta.json();
    if (json.status) {
        swal("Registro", json.mensaje,"success");
    }else{
        swal("Registro", json.mensaje,"error");
    }

} catch (e) {
    console.log("Oops, ocurrio un error" + e);
}
}*/