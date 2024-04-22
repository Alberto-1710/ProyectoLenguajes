<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tienda en Línea</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Agregamos la hoja de estilos de Font Awesome -->
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #0F1C30;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center; /* Centrar horizontalmente */
    align-items: center; /* Centrar verticalmente */
    height: 100vh; /* Altura completa de la ventana */
  }

  .container {
    max-width: 600px; /* Reducir el ancho para centrarlo mejor */
    padding: 50px 20px;
    color: #C0D0EF;
    text-align: center;
    position: relative;
    align-items: center; /* Alinear los elementos al centro */
  }

  h1 {
    color: #668DC0;
    font-size: 36px;
    
    margin-top: -25px; /* Ajusta el margen superior */
    margin-bottom: 120px; /* Ajusta el margen inferior */
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
    padding: 16px 32px; /* Aumento del tamaño del botón */
    border: none;
    border-radius: 8px; /* Aumento del radio del borde */
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-decoration: none;
    font-size: 20px; /* Aumento del tamaño del texto */
  }

  .btn:hover {
    background-color: #304A6E;
  }

  .btn-container {
    display: flex;
    justify-content: center; /* Ajuste para centrar los botones */
    margin-bottom: 20px;
  }

  .btn-container .btn {
    margin: 0 10px; /* Ajuste de margen para los botones */
    margin-bottom: 300px;
  }

  .login-btn {
    margin-right: 10px; 
  }

  .register-btn {
    margin-left: 10px; 
  }

  .admin-options {
    display: none; /* Ocultar las opciones */
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
    <a href="{{ route('agregar.producto') }}" class="btn admin-btn">Agregar Producto a Vendedor</a>

  </div> 
</div>
</body>
</html>
