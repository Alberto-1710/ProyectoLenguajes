<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Factura</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #0F1C30;
    }
    .invoice {
        background-color: #C0D0EF;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
        max-width: 500px;
        text-align: center;
        color: #304A6E;
    }
    .invoice h2 {
        color: #668DC0;
        margin-bottom: 20px;
    }
    .invoice p {
        margin: 10px 0;
    }
    .invoice .user-info {
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid #668DC0;
    }
    .invoice .order-details {
        text-align: left;
        margin-bottom: 30px;
    }
    .invoice .order-details p {
        margin: 5px 0;
    }
    .invoice .total {
        font-size: 18px;
        font-weight: bold;
        color: #304A6E;
    }
</style>
</head>
<body>

<div class="invoice">
    <h2>Factura</h2>
    <div class="user-info">
        <p><strong>Usuario:</strong> Juan Pérez</p>
    </div>
    <div class="order-details">
        <h3>Detalles del Pedido:</h3>
        <p>Producto 1 - $50.00</p>
        <p>Producto 2 - $30.00</p>
        <p>Producto 3 - $20.00</p>
    </div>
    <p class="total">Total: $100.00</p>
</div>

</body>
</html>
