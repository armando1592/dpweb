
<div class="container">
<div class="titulo"><h3>lista de Usuarios</h3></div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nro</th>
            <th>DNI</th>
            <th>Apellidos y nombres</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody id="content_users">

    </tbody>
</table>
</div>

<style>
    .titulo {
      text-align: center;
      padding: 1rem;
      color: #fff;
     background: linear-gradient(90deg, #3aa17e, #ac5aa5);
      border-radius: 20px;
      margin: 1rem auto;
      max-width: 100%;
    }
</style>


<script src="<?php echo BASE_URL; ?>view/function/user.js"></script>

