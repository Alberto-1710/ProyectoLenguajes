<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Proceder al Pago</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Agregamos la hoja de estilos de Font Awesome -->
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #0F1C30;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .payment-container {
    max-width: 400px;
    background-color: #C0D0EF;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  h2 {
    color: #668DC0;
    margin-top: 0;
    margin-bottom: 20px;
  }

  .input-group {
    margin-bottom: 20px;
    text-align: left;
  }

  .input-group label {
    display: block;
    color: #304A6E;
    margin-bottom: 5px;
  }

  .input-group input {
    width: calc(100% - 20px);
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #304A6E;
  }

  .btn {
    background-color: #668DC0;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .btn:hover {
    background-color: #304A6E;
  }
</style>
</head>
<body>
<div class="payment-container">
  <h2>Proceder al Pago</h2>
  <div class="input-group">
    <label for="nombre">Nombre Completo</label>
    <input type="text" id="nombre" placeholder="Ingrese su nombre completo">
  </div>
  <div class="input-group">
    <label for="tarjeta">Número de Tarjeta</label>
    <input type="text" id="tarjeta" placeholder="Ingrese el número de su tarjeta">
  </div>
  <div class="input-group">
    <label for="exp">Fecha de Expiración</label>
    <input type="text" id="exp" placeholder="MM/AA">
  </div>
  <div class="input-group">
    <label for="cvv">CVV</label>
    <input type="text" id="cvv" placeholder="Ingrese el código de seguridad">
  </div>
  <button class="btn">Pagar</button>
</div>
</body>
</html>
