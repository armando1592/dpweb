<!-- INICIO DE CUERPO DE PÁGINA -->
<style>
    .container-fluid {
        padding: 30px;
        max-width: 100%;
    }

    .registration-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        max-width: 1000px;
        margin: 0 auto;
    }

    .registration-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 25px 35px;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .registration-header i {
        font-size: 28px;
    }

    .registration-header h5 {
        margin: 0;
        font-size: 24px;
        font-weight: 700;
    }

    .registration-body {
        padding: 40px;
        background: #f8f9fa;
    }

    .form-section {
        background: white;
        padding: 25px;
        border-radius: 15px;
        margin-bottom: 25px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .section-title {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 18px;
        font-weight: 700;
        color: #667eea;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 2px solid #e8e8e8;
    }

    .section-title i {
        width: 35px;
        height: 35px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }

    .form-row-custom {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group-custom {
        display: flex;
        flex-direction: column;
    }

    .form-group-custom label {
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 8px;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .form-group-custom label i {
        color: #667eea;
        font-size: 14px;
    }

    .input-wrapper-custom {
        position: relative;
    }

    .input-icon-custom {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #95a5a6;
        font-size: 15px;
        z-index: 2;
    }

    .form-control-custom {
        width: 100%;
        padding: 12px 15px 12px 45px;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        font-size: 14px;
        color: #2c3e50;
        transition: all 0.3s ease;
        background: #f8f9fa;
        outline: none;
    }

    .form-control-custom:focus {
        border-color: #667eea;
        background: white;
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.15);
    }

    .form-control-custom::placeholder {
        color: #bdc3c7;
    }

    select.form-control-custom {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23667eea' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 15px center;
        cursor: pointer;
    }

    .full-width {
        grid-column: 1 / -1;
    }

    .button-container {
        display: flex;
        gap: 12px;
        justify-content: center;
        margin-top: 30px;
        flex-wrap: wrap;
    }

    .btn-custom {
        padding: 12px 35px;
        border: none;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        position: relative;
        overflow: hidden;
    }

    .btn-custom::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.5s;
    }

    .btn-custom:hover::before {
        left: 100%;
    }

    .btn-success-custom {
        background: linear-gradient(135deg, #00b894 0%, #00cec9 100%);
        color: white;
        box-shadow: 0 8px 20px rgba(0, 184, 148, 0.3);
    }

    .btn-success-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(0, 184, 148, 0.4);
    }

    .btn-info-custom {
        background: linear-gradient(135deg, #74b9ff 0%, #0984e3 100%);
        color: white;
        box-shadow: 0 8px 20px rgba(9, 132, 227, 0.3);
    }

    .btn-info-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(9, 132, 227, 0.4);
    }

    .btn-danger-custom {
        background: linear-gradient(135deg, #ff7675 0%, #d63031 100%);
        color: white;
        box-shadow: 0 8px 20px rgba(214, 48, 49, 0.3);
    }

    .btn-danger-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(214, 48, 49, 0.4);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .container-fluid {
            padding: 15px;
        }

        .registration-body {
            padding: 20px;
        }

        .form-section {
            padding: 20px;
        }

        .form-row-custom {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .button-container {
            flex-direction: column;
        }

        .btn-custom {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .registration-header {
            padding: 20px;
        }

        .registration-header h5 {
            font-size: 20px;
        }

        .registration-body {
            padding: 15px;
        }

        .form-section {
            padding: 15px;
        }
    }
</style>

<div class="container-fluid">
    <div class="registration-card">
        <div class="registration-header">
            <i class="fas fa-user-plus"></i>
            <h5>Registro de Usuario</h5>
        </div>
        
        <form id="frm_user" action="" method="">
            <div class="registration-body">
                <!-- Información Personal -->
                <div class="form-section">
                    <div class="section-title">
                        <i class="fas fa-id-card"></i>
                        <span>Información Personal</span>
                    </div>

                    <div class="form-row-custom">
                        <div class="form-group-custom">
                            <label for="nro_identidad">
                                <i class="fas fa-hashtag"></i>
                                Nro de Documento
                            </label>
                            <div class="input-wrapper-custom">
                                <i class="fas fa-id-badge input-icon-custom"></i>
                                <input type="number" class="form-control-custom" id="nro_identidad" name="nro_identidad" placeholder="Ej: 12345678" required>
                            </div>
                        </div>

                        <div class="form-group-custom">
                            <label for="razon_social">
                                <i class="fas fa-building"></i>
                                Razón Social
                            </label>
                            <div class="input-wrapper-custom">
                                <i class="fas fa-briefcase input-icon-custom"></i>
                                <input type="text" class="form-control-custom" id="razon_social" name="razon_social" placeholder="Nombre de la empresa" required>
                            </div>
                        </div>

                        <div class="form-group-custom">
                            <label for="telefono">
                                <i class="fas fa-phone"></i>
                                Teléfono
                            </label>
                            <div class="input-wrapper-custom">
                                <i class="fas fa-mobile-alt input-icon-custom"></i>
                                <input type="number" class="form-control-custom" id="telefono" name="telefono" placeholder="Ej: 987654321" required>
                            </div>
                        </div>

                        <div class="form-group-custom">
                            <label for="correo">
                                <i class="fas fa-envelope"></i>
                                Correo Electrónico
                            </label>
                            <div class="input-wrapper-custom">
                                <i class="fas fa-at input-icon-custom"></i>
                                <input type="email" class="form-control-custom" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ubicación -->
                <div class="form-section">
                    <div class="section-title">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ubicación</span>
                    </div>

                    <div class="form-row-custom">
                        <div class="form-group-custom">
                            <label for="departamento">
                                <i class="fas fa-map"></i>
                                Departamento
                            </label>
                            <div class="input-wrapper-custom">
                                <i class="fas fa-globe input-icon-custom"></i>
                                <input type="text" class="form-control-custom" id="departamento" name="departamento" placeholder="Ej: Lima" required>
                            </div>
                        </div>

                        <div class="form-group-custom">
                            <label for="provincia">
                                <i class="fas fa-city"></i>
                                Provincia
                            </label>
                            <div class="input-wrapper-custom">
                                <i class="fas fa-map-signs input-icon-custom"></i>
                                <input type="text" class="form-control-custom" id="provincia" name="provincia" placeholder="Ej: Lima" required>
                            </div>
                        </div>

                        <div class="form-group-custom">
                            <label for="distrito">
                                <i class="fas fa-location-arrow"></i>
                                Distrito
                            </label>
                            <div class="input-wrapper-custom">
                                <i class="fas fa-map-pin input-icon-custom"></i>
                                <input type="text" class="form-control-custom" id="distrito" name="distrito" placeholder="Ej: Miraflores" required>
                            </div>
                        </div>

                        <div class="form-group-custom">
                            <label for="cod_postal">
                                <i class="fas fa-mail-bulk"></i>
                                Código Postal
                            </label>
                            <div class="input-wrapper-custom">
                                <i class="fas fa-barcode input-icon-custom"></i>
                                <input type="number" class="form-control-custom" id="cod_postal" name="cod_postal" placeholder="Ej: 15074" required>
                            </div>
                        </div>

                        <div class="form-group-custom full-width">
                            <label for="direccion">
                                <i class="fas fa-home"></i>
                                Dirección Completa
                            </label>
                            <div class="input-wrapper-custom">
                                <i class="fas fa-map-marked-alt input-icon-custom"></i>
                                <input type="text" class="form-control-custom" id="direccion" name="direccion" placeholder="Av. Principal 123, Urb. Los Jardines" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Configuración de Cuenta -->
                <div class="form-section">
                    <div class="section-title">
                        <i class="fas fa-user-cog"></i>
                        <span>Configuración de Cuenta</span>
                    </div>

                    <div class="form-row-custom">
                        <div class="form-group-custom full-width">
                            <label for="rol">
                                <i class="fas fa-user-tag"></i>
                                Rol del Usuario
                            </label>
                            <div class="input-wrapper-custom">
                                <i class="fas fa-shield-alt input-icon-custom"></i>
                                <select class="form-control-custom" name="rol" id="rol" required>
                                    <option value="" disabled selected>Seleccione un rol</option>
                                    <option value="Administrador">👑 Administrador</option>
                                    <option value="cliente">👤 Cliente</option>
                                    <option value="Proveedor">📦 Proveedor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botones -->
                <div class="button-container">
                    <button type="submit" class="btn-custom btn-success-custom">
                        <i class="fas fa-save"></i>
                        Registrar
                    </button>
                    <button type="reset" class="btn-custom btn-info-custom">
                        <i class="fas fa-eraser"></i>
                        Limpiar
                    </button>
                    <a href="<?= BASE_URL ?>users" class="btn-custom btn-danger-custom">
                        <i class="fas fa-times-circle"></i>
                        Cancelar
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- FIN DE CUERPO DE PÁGINA -->

<script src="<?php echo BASE_URL; ?>view/function/user.js"></script>