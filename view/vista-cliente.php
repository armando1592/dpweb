<!-- Productos -->
 <p>LISTA DE PRODUCTOS</p>
    <div class="container">
      <div class="row" id="productos-container"></div>
    </div>
    <link rel="stylesheet" href="view/css/cliente.css">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🛒Catálogo de Productos</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>view/css/cliente.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
    <?php
    if (isset($_GET["views"])) {
        $ruta = explode("/", $_GET["views"]);
        //echo $ruta[1];
    }
    ?>
    
</head>

<!--estilos de fondo (imagen )-->
<body  style="background-image:url(https://static.vecteezy.com/system/resources/previews/013/023/800/non_2x/a-black-sale-price-tag-on-black-background-for-shopping-and-discount-on-black-friday-concept-free-photo.jpg);">>
    
</body>

<script src="<?php echo BASE_URL; ?>view/function/vistacliente.js"></script>
    <script src="<?php echo BASE_URL; ?>view/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?php echo BASE_URL; ?>view/function/vistaC.js"></script>


   
<script src="view/js/cliente.js"></script>


