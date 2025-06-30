document.getElementById("loginForm").addEventListener("submit", async function(e) {
      e.preventDefault();

      const formData = new FormData(this);

      try {
        const res = await fetch("../control/loginController.php", {
          method: "POST",
          body: formData
        });

        const data = await res.json();

        if (data.status) {
          Swal.fire("Éxito", data.msg, "success").then(() => {
            window.location.href = "../index.php"; // Redirige si deseas
          });
        } else {
          Swal.fire("Error", data.msg, "error");
        }
      } catch (error) {
        console.error("Error al hacer login:", error);
        Swal.fire("Error", "No se pudo procesar la solicitud", "error");
      }
    });