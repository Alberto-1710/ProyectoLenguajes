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
    margin-bottom: 10px;
  }

  .login-btn {
    margin-right: 5px; 
  }

  .register-btn {
    margin-left: 5px; 
  }

  .cart-btn {
    margin-left: 5px;
  }

  .products {
    margin-top: 50px;
    text-align: center;
  }

  .product {
    background-color: #C0D0EF;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: left;
    position: relative;
  }

  .product img {
    width: 100%;
    border-radius: 8px;
    margin-bottom: 10px;
  }

  .product h2 {
    color: #668DC0;
    font-size: 20px;
    margin-bottom: 10px;
  }

  .product p {
    color: #304A6E;
    font-size: 16px;
    margin-bottom: 10px;
  }

  .product .price {
    color: #668DC0;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .add-to-cart {
    position: absolute;
    bottom: 10px;
    right: 10px;
    color: #668DC0;
    cursor: pointer;
  }

  .add-to-cart:hover {
    color: #304A6E;
  }
</style>
</head>
<body>
<div class="container">
  <div class="btn-container">
    <a href="{{ route('login.home') }}" class="btn login-btn">Iniciar Sesión</a>
    <a href="{{ route('crear.home') }}" class="btn register-btn">Crear Usuario</a> <!-- Nuevo botón -->
    <a href="#" class="btn cart-btn">Carrito de Compra</a> 
  </div> 
  

  <h1>Tienda en Línea: AgoraMarket</h1>
  <p>Descubre una variedad de productos de alta calidad a precios increíbles.</p>
  <a href="#" class="btn">Ver todos los productos</a>

  <div class="products">
    <div class="product">
      
      <h2>Producto 1</h2>
      <p>Descripción del Producto 1</p>
      <p class="price">L50.00</p>
      <i class="fas fa-shopping-cart add-to-cart" title="Agregar al carrito"></i>
    </div>
    <div class="product">
     
      <h2>Producto 2</h2>
      <p>Descripción del Producto 2</p>
      <p class="price">L30.00</p>
      <i class="fas fa-shopping-cart add-to-cart" title="Agregar al carrito"></i>
    </div>
    <div class="product">
      
      <h2>Producto 3</h2>
      <p>Descripción del Producto 3</p>
      <p class="price">420.00</p>
      <i class="fas fa-shopping-cart add-to-cart" title="Agregar al carrito"></i>
    </div>
  </div>
</div>
</body>
</html>
