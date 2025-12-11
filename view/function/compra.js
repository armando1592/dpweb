async function verCompra(id_compra) {
  const formData = new FormData();
  formData.append("idCompra", id_compra);
  try {
    let respuesta = await fetch(
      `${base_url}controllers/Controller_compras.php?tipo=ver_compra&t=${new Date().getTime()}`,
      {
        method: "POST",
        mode: "cors",
        cache: "no-cache",
        body: formData,
      }
    );
    let json = await respuesta.json();
    if (json.status) {
      let compra = json.datos;
      document.getElementById("id_compra").value = compra.id;
      document.getElementById("producto").value = compra.id_producto;
      document.getElementById("cantidad").value = compra.cantidad;
      document.getElementById("precio").value = compra.precio;
      document.getElementById("trabajador").value = compra.id_trabajador;
    } else {
      window.location.base_url = "/views/admin/compras.php";
      Swal.fire("Error", "Compra no encontrada: " + json.mensaje, "error");
    }
    console.log(json);
  } catch (error) {
    console.error("Oops, ocurrió un error:", error);
    Swal.fire("Error", "Ocurrió un error al ver la compra.", "error");
  }
}
async function listar_compras() {
  try {
    let respuesta = await fetch(
      base_url + "/controllers/Controller_compras.php?tipo=listar"
    );
    let json = await respuesta.json();

    if (json.status) {
      let datos = json.contenido;
      let cont = 0;

      datos.forEach((element) => {
        let fila = document.createElement("tr");
        cont += 1;
        // Calcular el total
        let total = element.cantidad * element.precio;
        fila.innerHTML = `
                                <th scope="row" class="text-center">${cont}</th>
                                <td class="text-center">${element.producto.nombre}</td>
                                <td class="text-center">${element.cantidad}</td>
                                <td class="text-center">${element.precio}</td>
                                <td class="text-center">${total.toFixed(2)}</td>
                                <td class="text-center">${element.fecha_compra}</td>
                                <td class="text-center">${element.trabajador.razon_social}</td>
                                <td class="text-center">${element.options}</td>
                `;
        document.getElementById("tabla_compras").appendChild(fila);
      });
    } else {
      Swal.fire("No se encontraron compras.");
    }
    console.log(json);

    if (document.getElementById("tablaCompras")) {
    }
  } catch (error) {
    console.error("Oops, ocurrió un error: " + error);
    Swal.fire(
      "Error al listar compras.",
      "Ocurrió un error al procesar la solicitud.",
      "error"
    );
  }
}
async function registrar_compra() {
  let producto = document.getElementById("producto").value;
  let cantidad = document.getElementById("cantidad").value;
  let precio = document.getElementById("precio").value;
  let trabajador = document.getElementById("trabajador").value;

  if (
    producto === "" ||
    cantidad === "" ||
    precio === "" ||
    trabajador === ""
  ) {
    Swal.fire("Por favor, complete todos los campos.");
    return;
  }

  try {
    const datos = new FormData(document.getElementById("formCompra"));

    let respuesta = await fetch(
      base_url + "/controllers/Controller_compras.php?tipo=registrar",
      {
        method: "POST",
        mode: "cors",
        cache: "no-cache",
        body: datos,
      }
    );

    let json = await respuesta.json();
    console.log(json);

    if (json.status) {
      Swal.fire({
        title: "Compra registrada correctamente",
        text: json.mensaje,
        icon: "success",
        showConfirmButton: false,
        timer: 1000,
        timerProgressBar: true,
      }).then(() => {
        // Redirige a la página de compras
        window.location.href = `${base_url}?admin=compras`;
      });
      // Resetea el formulario después de mostrar la alerta
      document.getElementById("formCompra").reset();
    } else {
      Swal.fire(
        "Registro fallido",
        json.mensaje || "Hubo un problema al procesar la solicitud",
        "error"
      );
    }
  } catch (error) {
    console.error("Oops, ocurrió un error: " + error);
    Swal.fire(
      "Error en la solicitud",
      "Ocurrió un error al procesar la compra",
      "error"
    );
  }
}

async function listar_productos() {
  try {
    let respuesta = await fetch(
      `${base_url}controllers/Controller_productos.php?tipo=listar&t=${new Date().getTime()}`
    );
    let json = await respuesta.json();

    if (json.status) {
      let datos = json.contenido;
      datos.forEach((element) => {
        $("#producto").append(
          $("<option />", {
            text: `${element.nombre}`,
            value: `${element.id}`,
          })
        );
      });
    }
    console.log(respuesta);
  } catch (error) {
    console.error("Oops, ocurrió un error al listar productos: " + error);
  }
}

async function obtenerPrecioUnitario() {
  let ProductoId = document.getElementById("producto").value;
  if (ProductoId) {
    try {
      let response = await fetch(
        `${base_url}/controllers/Controller_compras.php?tipo=obtener_precio&producto_id=${ProductoId}`
      );
      let data = await response.json();
      if (data.status) {
        document.getElementById("precio").value = data.precio;
      } else {
        document.getElementById("precio").value = "Error al obtener precio";
      }
    } catch (error) {
      console.error("Error al obtener el precio unitario:", error);
    }
  } else {
    document.getElementById("precio").value = "";
  }
}

async function listar_trabajadores() {
  try {
    let respuesta = await fetch(
      `${base_url}controllers/Controller_persona.php?tipo=listarTrabajadores&t=${new Date().getTime()}`
    );
    let json = await respuesta.json();

    if (json.status) {
      let datos = json.contenido;
      datos.forEach((element) => {
        $("#trabajador").append(
          $("<option />", {
            text: `${element.razon_social}`,
            value: `${element.id}`,
          })
        );
      });
    }
    console.log(respuesta);
  } catch (error) {
    console.error("Oops, ocurrió un error al listar trabajadores: " + error);
  }
}

async function actualizar_compra() {
  const datos = new FormData(document.getElementById("formCompra"));
  try {
    let respuesta = await fetch(
      `${base_url}controllers/Controller_compras.php?tipo=editar&t=${new Date().getTime()}`,
      {
        method: "POST",
        mode: "cors",
        cache: "no-cache",
        body: datos,
      }
    );
    let json = await respuesta.json();
    console.log(json);
    if (json.status) {
      Swal.fire({
        title: "Actualización exitosa",
        text: json.mensaje,
        icon: "success",
        showConfirmButton: false,
        timer: 1000,
        timerProgressBar: true,
      }).then(() => {
        // Redirige a la página de compras al cerrar la alerta
        window.location.href = `${base_url}?admin=compras`;
      });
    } else {
      Swal.fire(
        "Error",
        "No se pudo actualizar la compra: " + json.mensaje,
        "error"
      );
    }
  } catch (error) {
    console.error("Oops, ocurrió un error: " + error);
    Swal.fire("Error", "Ocurrió un error al actualizar la compra.", "error");
  }
}

async function eliminar_compra(id) {
  const confirmacion = await Swal.fire({
    title: "¿Estás seguro?",
    text: "Esta acción eliminará permanentemente la compra.",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar",
    cancelButtonText: "Cancelar",
  });
  if (confirmacion.isConfirmed) {
    try {
      let respuesta = await fetch(
        `${base_url}/controllers/Controller_compras.php?tipo=eliminar&id=${id}&t=${new Date().getTime()}`,
        {
          method: "POST",
          mode: "cors",
          cache: "no-cache",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: `id=${id}`,
        }
      );
      let json = await respuesta.json();
      console.log(json);
      if (json.status) {
        Swal.fire({
          title: "Eliminación exitosa",
          text: json.mensaje,
          icon: "success",
          showConfirmButton: false,
          timer: 1000,
          timerProgressBar: true,
        }).then(() => {
          window.location.href = `${base_url}?admin=compras`;
        });
      } else {
        Swal.fire(
          "Error",
          "No se pudo eliminar la compra: " + json.mensaje,
          "error"
        );
      }
    } catch (error) {
      console.error("Oops, ocurrió un error al eliminar la compra." + error);
      Swal.fire("Error", "Ocurrió un error al eliminar la compra.", "error");
    }
  } else {
    // Canceló la eliminación
    Swal.fire("Cancelado", "La compra no fue eliminada.", "info");
  }
}