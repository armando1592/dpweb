<!-- INICIO CUERPO DE LA PAGINA-->
<div class="container my-5">
  <div class="card shadow-lg border-0 rounded-4" style="max-width: 800px; margin: auto;">
    <!-- ENCABEZADO -->
    <div class="card-header bg-gradient bg-primary text-white text-center py-4 rounded-top-4">
      <h4 class="mb-0 fw-bold">
        <i class="fas fa-user-plus me-2"></i> Registrarse
      </h4>
    </div>

    <!-- FORMULARIO -->
    <form id="frm_user" action="" method="">
      <div class="card-body p-4">
        <div class="row g-4">
          <!-- COLUMNA IZQUIERDA -->
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input type="number" class="form-control shadow-sm" id="nro_identidad" name="nro_identidad" placeholder="Documento" required>
              <label for="nro_identidad"><i class="fas fa-id-card me-2 text-primary"></i>Nro Documento</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control shadow-sm" id="razon_social" name="razon_social" placeholder="Razón Social" required>
              <label for="razon_social"><i class="fas fa-building me-2 text-primary"></i>Razón Social</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" class="form-control shadow-sm" id="telefono" name="telefono" placeholder="Teléfono" required>
              <label for="telefono"><i class="fas fa-phone me-2 text-success"></i>Teléfono</label>
            </div>

            <div class="form-floating mb-3">
              <input type="email" class="form-control shadow-sm" id="correo" name="correo" placeholder="Correo" required>
              <label for="correo"><i class="fas fa-envelope me-2 text-danger"></i>Correo</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control shadow-sm" id="departamento" name="departamento" placeholder="Departamento" required>
              <label for="departamento"><i class="fas fa-map me-2 text-warning"></i>Departamento</label>
            </div>
          </div>

          <!-- COLUMNA DERECHA -->
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input type="text" class="form-control shadow-sm" id="provincia" name="provincia" placeholder="Provincia" required>
              <label for="provincia"><i class="fas fa-map-marker-alt me-2 text-danger"></i>Provincia</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control shadow-sm" id="distrito" name="distrito" placeholder="Distrito" required>
              <label for="distrito"><i class="fas fa-location-dot me-2 text-info"></i>Distrito</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" class="form-control shadow-sm" id="cod_postal" name="cod_postal" placeholder="Código Postal" required>
              <label for="cod_postal"><i class="fas fa-mail-bulk me-2 text-secondary"></i>Código Postal</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control shadow-sm" id="direccion" name="direccion" placeholder="Dirección" required>
              <label for="direccion"><i class="fas fa-home me-2 text-primary"></i>Dirección</label>
            </div>

            <div class="mb-3">
              <label for="rol" class="form-label fw-bold">
                <i class="fas fa-user-tag me-2 text-success"></i>Rol
              </label>
              <select class="form-select shadow-sm" id="rol" name="rol" required>
                <option value="" disabled selected>Seleccione</option>
                <option value="administrador">Administrador</option>
                <option value="vendedor">Vendedor</option>
              </select>
            </div>
          </div>
        </div>

        <!-- BOTONES -->
        <hr class="my-4">
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <button type="submit" class="btn btn-success btn-lg shadow-sm">
            <i class="fas fa-save me-2"></i>Registrar
          </button>
          <button type="reset" class="btn btn-warning btn-lg shadow-sm text-white">
            <i class="fas fa-eraser me-2"></i>Limpiar
          </button>
          <button type="button" class="btn btn-danger btn-lg shadow-sm" onclick="window.location.href = base_url;">
            <i class="fas fa-times me-2"></i>Cancelar
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- FIN DE CUERPO DE PAGINA-->

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<script src="<?php echo BASE_URL; ?>view/function/user.js"></script>

<style>
  .form-control:focus, .form-select:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.2rem rgba(13,110,253,.25);
  }
  .btn:hover {
    transform: scale(1.05);
    transition: 0.2s ease-in-out;
  }
</style>
