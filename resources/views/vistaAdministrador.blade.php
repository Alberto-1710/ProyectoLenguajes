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
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 50px 20px;
    color: #C0D0EF;
    text-align: center;
    position: relative;
  }

  h1 {
    color: #668DC0;
    font-size: 36px;
    margin-bottom: 20px;
  }

  p {
    font-size: 18px;
    margin-bottom: 30px;
  }

  .btn {
    background-color: #668DC0;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-decoration: none;
  }

  .btn:hover {
    background-color: #304A6E;
  }

  .btn-container {
    display: flex;
    justify-content: right;
    margin-bottom: 20px;
  }

  .btn-container .btn {
    margin-right: 10px;
  }

  .login-btn {
    margin-right: 10px; 
  }

  .register-btn {
    margin-left: 10px; 
  }

  .admin-options {
    margin-top: 20px;
  }

  .admin-options a {
    color: #668DC0;
    margin: 0 10px;
    text-decoration: none;
  }

  .admin-options a:hover {
    color: #304A6E;
  }

</style>
</head>
<body>
<div class="container">
  <div class="btn-container">
    <a href="#" class="btn admin-btn">Agregar Vendedores</a>
    <a href="#" class="btn admin-btn">Agregar Productos a Vendedores</a>
  </div> 
  
  <h1>Tienda en Línea: AgoraMarket</h1>
  <p>Bienvenido Administrador</p>

  <div class="admin-options">
    <a href="#">Opción 1</a>
    <a href="#">Opción 2</a>
    <a href="#">Opción 3</a>
  </div>
</div>
</body>
</html>
