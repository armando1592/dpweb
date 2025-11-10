<div class="container-custom">
    <h3 class="title-custom">👤 Lista de Usuarios</h3>
    
    <a href="<?php echo BASE_URL; ?>new-user" class="btn btn-primary btn-new-user">
        + Nuevo Usuario
    </a>

    <div class="table-responsive-custom">
        <table class="table table-hover table-striped table-custom">
            <thead>
                <tr>
                    <th>Nro</th>
                    <th>DNI</th>
                    <th>Nombres y Apellidos</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="content_users">
                </tbody>
        </table>
    </div>
</div>

<style>
/* --- VARIABLES DE COLOR --- */
:root {
    --primary-blue: #007bff; /* Azul vibrante (para botones/énfasis) */
    --header-bg: #2c3e50;    /* Gris oscuro elegante (para encabezados) */
    --light-bg: #ffffff;     /* Blanco limpio */
    --shadow-color: rgba(0, 0, 0, 0.1);
}

/* --- ESTILOS DEL CONTENEDOR PRINCIPAL --- */
.container-custom {
    background: var(--light-bg);
    padding: 30px;
    border-radius: 12px;
    /* Sombra más suave y moderna */
    box-shadow: 0 4px 20px var(--shadow-color);
    margin: 20px auto;
    max-width: 90%; /* Ajuste para mejor visualización en pantallas grandes */
}

/* --- ESTILOS DEL TÍTULO --- */
.title-custom {
    color: var(--header-bg);
    font-weight: 700;
    font-size: 1.8rem;
    margin-bottom: 25px;
    padding-bottom: 10px;
    /* Línea sutil y moderna */
    border-bottom: 3px solid var(--primary-blue);
    display: inline-block; /* Asegura que la línea se ajuste al texto */
}

/* --- ESTILOS DEL BOTÓN --- */
.btn-new-user {
    /* Usamos la clase nativa de Bootstrap 'btn-primary' y la personalizamos ligeramente */
    background-color: var(--primary-blue); 
    border-color: var(--primary-blue);
    color: white;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 8px; /* Bordes más redondeados */
    margin-bottom: 20px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 4px rgba(0, 123, 255, 0.3);
}

.btn-new-user:hover {
    background-color: #0056b3; /* Tono más oscuro al pasar el ratón */
    border-color: #0056b3;
    transform: translateY(-1px); /* Efecto de "levantamiento" sutil */
    box-shadow: 0 4px 8px rgba(0, 123, 255, 0.4);
}

/* --- ESTILOS DE LA TABLA --- */
.table-custom {
    border-collapse: separate;
    border-spacing: 0; /* Asegura que los estilos se apliquen limpiamente */
}

/* Encabezado de la tabla (más elegante) */
.table-custom thead th {
    background-color: var(--header-bg); /* Fondo gris oscuro */
    color: white;
    text-align: left; /* Alineación a la izquierda más profesional */
    font-weight: 600;
    padding: 12px 15px;
    border: none;
    /* Redondeo de las esquinas del encabezado (solo para las esquinas exteriores) */
}

.table-custom thead tr th:first-child {
    border-top-left-radius: 8px;
}
.table-custom thead tr th:last-child {
    border-top-right-radius: 8px;
}


/* Cuerpo de la tabla (filas) */
.table-custom tbody tr {
    transition: background-color 0.3s ease;
}

/* Efecto hover en filas */
.table-custom tbody tr:hover {
    background-color: #f1f1f1; /* Resaltado sutil */
    cursor: pointer;
}

/* Bordes en las celdas (elimina los bordes rígidos) */
.table-custom td {
    border-top: 1px solid #dee2e6; /* Solo borde inferior */
    padding: 12px 15px;
}

/* Fondo de las filas impares de Bootstrap */
.table-striped > tbody > tr:nth-of-type(odd) {
    background-color: #f8f9fa; /* Color de banda más suave */
}

</style>

<script src="<?= BASE_URL ?>view/function/user.js"></script>    