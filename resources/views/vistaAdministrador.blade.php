<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tienda en Línea</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
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

  .container {
    max-width: 600px; 
    padding: 50px 20px;
    color: #C0D0EF;
    text-align: center;
    position: relative;
    align-items: center; 
  }

  h1 {
    color: #668DC0;
    font-size: 36px;
    
    margin-top: -25px; 
    margin-bottom: 120px; 
  }

  h2 { /* Nuevo estilo para el título */
    color: #fff;
    font-size: 24px;
    margin-bottom: 20px;
  }

  p {
    font-size: 18px;
    margin-bottom: 30px;
  }

  .btn {
    background-color: #668DC0;
    color: #fff;
    padding: 16px 32px; 
    border: none;
    border-radius: 8px; 
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-decoration: none;
    font-size: 20px; 
    display: block;
    margin: 10px auto; 
  }

  .btn:hover {
    background-color: #304A6E;
  }

  .btn-container {
    display: flex;
    justify-content: space-between; 
    margin-bottom: 20px;
    align-items: center; 
  }

  .btn-vertical-container {
    display: flex;
    flex-direction: column;  
    align-items: center; 
  }

  .btn-container .btn {
    margin: 0 10px;
  }

  .login-btn {
    margin-right: 10px; 
  }

  .register-btn {
    margin-left: 10px; 
  }

  .admin-options {
    display: none; 
  }

</style>
</head>
<body>
<div class="container">
  <h1 style="margin-top: 50px;">AgoraMarket</h1>
  <h1>Bienvenido Administrador</h1>
  <h2>¿Qué desea hacer?</h2> <!-- Nuevo título encima de los botones -->
  <div class="btn-container">
    <a href="#" class="btn admin-btn">Agregar Vendedor</a>
    <a href="#" class="btn admin-btn" style="margin-bottom: 10px;">Agregar Producto a Vendedor</a>
  </div>
  <!-- Botones adicionales -->
  <h2>Desea generar reportes?</h2>
  <div class="btn-vertical-container">
    <a href="#" class="btn admin-btn">Reporte Compras Usuario</a>
    <a href="#" class="btn admin-btn">Reporte ventas por Categoria</a>
    <a href="#" class="btn admin-btn">Reporte Ventas por Vendedor</a>
  </div> 
</div>
</body>
</html>
