<style>
    .sales-container {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        min-height: 100vh;
        padding: 20px 0;
    }
    
    .sales-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        margin-bottom: 25px;
    }
    
    .sales-title {
        color: white;
        font-weight: 800;
        font-size: 2rem;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    
    .products-section {
        height: 85vh;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }
    
    .card-modern {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .search-box {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 20px;
        border-radius: 12px;
        margin-bottom: 20px;
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.2);
    }
    
    .search-box h5 {
        color: white !important;
        font-weight: 700;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .search-input {
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        padding: 12px 20px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    .search-input:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        outline: none;
    }
    
    .products-scroll {
        overflow-y: auto;
        overflow-x: hidden;
        flex: 1;
        padding-right: 10px;
    }
    
    .products-scroll::-webkit-scrollbar {
        width: 8px;
    }
    
    .products-scroll::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    .products-scroll::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 10px;
    }
    
    .product-card {
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        transition: all 0.3s ease;
        overflow: hidden;
        background: white;
        height: 100%;
    }
    
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(102, 126, 234, 0.2);
        border-color: #667eea;
    }
    
    .product-image {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-bottom: 2px solid #f0f0f0;
    }
    
    .product-info {
        padding: 15px;
    }
    
    .product-name {
        font-weight: 700;
        font-size: 1rem;
        color: #333;
        margin-bottom: 8px;
        min-height: 40px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .product-price {
        font-size: 1.3rem;
        font-weight: 800;
        color: #667eea;
        margin-bottom: 10px;
    }
    
    .product-stock {
        font-size: 0.85rem;
        padding: 4px 10px;
        border-radius: 15px;
        display: inline-block;
        margin-bottom: 10px;
    }
    
    .stock-available {
        background: #d4edda;
        color: #155724;
    }
    
    .stock-low {
        background: #fff3cd;
        color: #856404;
    }
    
    .btn-add-product {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        border: none;
        color: white;
        font-weight: 700;
        padding: 10px;
        border-radius: 8px;
        transition: all 0.3s ease;
        width: 100%;
    }
    
    .btn-add-product:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(56, 239, 125, 0.4);
    }
    
    .cart-section {
        height: 85vh;
        display: flex;
        flex-direction: column;
    }
    
    .cart-header {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        padding: 15px 20px;
        border-radius: 12px 12px 0 0;
        font-weight: 700;
        font-size: 1.3rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .cart-body {
        flex: 1;
        overflow-y: auto;
        padding: 15px;
    }
    
    .cart-table {
        font-size: 0.9rem;
    }
    
    .cart-table thead th {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 12px 8px;
        font-weight: 600;
        font-size: 0.85rem;
    }
    
    .cart-table tbody td {
        vertical-align: middle;
        padding: 12px 8px;
    }
    
    .quantity-input {
        width: 60px;
        text-align: center;
        border: 2px solid #e0e0e0;
        border-radius: 6px;
        padding: 5px;
    }
    
    .btn-remove {
        background: linear-gradient(135deg, #ef5350 0%, #e53935 100%);
        border: none;
        color: white;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 0.8rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .btn-remove:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(239, 83, 80, 0.4);
    }
    
    .cart-summary {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        padding: 20px;
        border-radius: 0 0 12px 12px;
        border-top: 3px solid #667eea;
    }
    
    .summary-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 12px;
        font-size: 1.1rem;
    }
    
    .summary-row.total {
        font-size: 1.5rem;
        font-weight: 800;
        color: #667eea;
        padding-top: 15px;
        border-top: 2px solid #667eea;
    }
    
    .btn-checkout {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        border: none;
        color: white;
        font-weight: 800;
        padding: 15px 30px;
        border-radius: 10px;
        font-size: 1.2rem;
        width: 100%;
        margin-top: 15px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(56, 239, 125, 0.3);
    }
    
    .btn-checkout:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(56, 239, 125, 0.4);
    }
    
    .empty-cart {
        text-align: center;
        padding: 50px 20px;
        color: #999;
    }
    
    .empty-cart svg {
        opacity: 0.3;
        margin-bottom: 20px;
    }
</style>

<div class="container-fluid sales-container">
    <div class="container-fluid">
        <div class="sales-header">
            <h2 class="sales-title text-center">🛒 Realizar Ventas</h2>
        </div>
        
        <div class="row">
            <!-- Sección de Productos -->
            <div class="col-lg-8 col-md-7 mb-3">
                <div class="card-modern">
                    <div class="card-body p-0 d-flex flex-column">
                        <div class="p-3">
                            <div class="search-box">
                                <h5>
                                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                    Búsqueda de Productos
                                </h5>
                                <input type="text" id="busqueda_venta" class="form-control search-input" placeholder="Buscar producto por nombre, código..." onkeyup="viewProductosClients();">
                                <input type="hidden" id="id_producto_venta">
                                <input type="hidden" id="producto_precio_venta">
                                <input type="hidden" id="producto_cantidad_venta" value="1">

                            </div>
                        </div>
                        
                        <div class="products-scroll px-3 pb-3">
                            <div class="row" id="productos-container">
                                <!-- Los productos se cargarán aquí dinámicamente -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sección de Carrito -->
            <div class="col-lg-4 col-md-5">
                <div class="card-modern cart-section">
                    <div class="cart-header">
                        <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        Lista de Compra
                    </div>
                    
                    <div class="cart-body">
                        <table class="table cart-table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cant.</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody id="lista_compra">
                                <!-- Los productos del carrito se cargarán aquí -->
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="cart-summary">
                        <div class="summary-row">
                            <span>Subtotal:</span>
                            <strong id="subtotal">S/ 0.00</strong>
                        </div>
                        <div class="summary-row">
                            <span>IGV (18%):</span>
                            <strong id="igv">S/ 0.00</strong>
                        </div>
                        <div class="summary-row total">
                            <span>Total:</span>
                            <strong id="total">S/ 0.00</strong>
                        </div>
                        <button class="btn-checkout" onclick="realizarVenta();">
                            💳 Realizar Venta
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= BASE_URL ?>view/function/products.js"></script>
<script src="<?= BASE_URL ?>view/function/venta.js"></script>
<script>
     let input = document.getElementById("busqueda_venta");
    input.addEventListener('keydown', (event)=>{
        if (event.key == 'Enter') {
            agregar_producto_temporal();
        }
    })

    document.addEventListener('DOMContentLoaded', function() {
        cargarCarrito();
    });
</script>

