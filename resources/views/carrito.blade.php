<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrito de Compras</title>
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

    .container {
      max-width: 800px;
      background-color: #C0D0EF;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    header {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    h1 {
      color: #668DC0;
      margin: 0;
      padding: 0;
    }

    a {
      text-decoration: none;
      color: #668DC0;
    }

    main {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      grid-gap: 20px;
    }

    .producto {
      background-color: #C2C6CE;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .producto img {
      width: 100%;
      border-radius: 8px;
    }

    .producto h2 {
      margin-top: 10px;
      margin-bottom: 5px;
      color: #304A6E;
    }

    .producto p {
      color: #304A6E;
      margin-bottom: 10px;
    }

    .producto span {
      font-weight: bold;
      color: #304A6E;
      display: block;
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1><a href="#"><i class="fas fa-solid fa-cart-shopping"></i></a></h1> <!-- Utilizamos la clase de icono -->
    </header>
    <main>
      <div class="producto">
      <i class="fa-solid fa-check"></i>
        <h2>Nombre del Producto 1</h2>
        <p>Descripción del Producto 1</p>
        <span>$20.00</span>
      </div>
      <div class="producto">
      <i class="fa-solid fa-check"></i>
        <h2>Nombre del Producto 2</h2>
        <p>Descripción del Producto 2</p>
        <span>$30.00</span>
      </div>
      <!-- Añadir más productos aquí -->
    </main>
  </div>
</body>
</html>
