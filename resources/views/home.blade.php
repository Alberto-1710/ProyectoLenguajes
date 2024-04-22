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
    position: absolute;
    top: 80px; /* Ajustado para dejar espacio entre el botón y el título */
    right: 20px;
  }

  .cart-btn {
    margin-left: 5px;
  }

  .products {
    margin-top: 100px; /* Ajustado para dejar espacio para el botón en la parte superior */
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
    display: flex; /* Cambia el comportamiento del contenedor a flex */
  }

  .product img {
    width: 150px; /* Ajusta el ancho de la imagen según tu preferencia */
    border-radius: 8px;
    margin-right: 20px; /* Ajusta el margen derecho para separar la imagen del texto */
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

  .add-to-cart-container {
    margin-left: auto; /* Mueve el contenedor al extremo derecho */
    margin-top: auto; /* Mueve el contenedor al extremo inferior */
  }

  .add-to-cart-btn {
    color: #fff;
    background-color: #668DC0;
    border: none;
    border-radius: 5px;
    padding: 10px 20px; /* Ajustamos el padding para que el botón sea más grande */
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
  }

  .add-to-cart-btn i {
    margin-right: 5px;
  }

  .add-to-cart-btn:hover {
    background-color: #304A6E;
  }

 .imagen {
      width: 20px; /* Ajusta el ancho de la imagen según tu preferencia */
      float: left; /* Coloca la imagen a la izquierda */
      margin-right: 10px; /* Ajusta el margen derecho para separar la imagen del texto */
 }

 .product-info {
    flex: 1; /* El texto ocupa todo el espacio restante */
 }
</style>
</head>
<body>
<div class="container">
  <div class="btn-container">
    <a href="{{ route('carrito.home') }}" class="btn cart-btn">Carrito de Compra</a> <!-- Botón de carrito movido a la parte superior derecha y un poco más abajo -->
    <a href="{{ route('tipousuario.home') }}" class="btn login-btn">Iniciar Sesión</a>
    <a href="{{ route('crear.home') }}" class="btn register-btn">Crear Usuario</a> <!-- Nuevo botón -->
  </div> 

  <a href="https://ibb.co/RpK3sW0"><img src="https://i.ibb.co/RpK3sW0/logo2.png" alt="logo2" border="0"></a>
  <h1>AgoraMarket</h1>
  <p>Descubre una variedad de productos de alta calidad a precios increíbles.</p>

  <div class="products">
    <div class="product">
      <img class="imagen" src="https://static.vecteezy.com/system/resources/previews/021/104/109/non_2x/white-t-shirt-free-png.png">
      <div class="product-info">
        <h2>Categoria: Ropa</h2>
        <p>Camiseta</p>
        <p2 class="price">L100.00</p2>
      </div>
      <div class="btnAgregarCarrito" data-producto="{'nombre': 'Producto A', 'precio': 10.99}">
        <a href="{{ route('carrito.home') }}" class="add-to-cart-btn" title="Agregar al carrito">
          <i class="fas fa-shopping-cart"></i>
          Agregar al carrito
        </a>
      </div>
    </div>
    <div class="product">
      <img class="imagen" src="https://rojocanela.com.mx/cdn/shop/products/75-9376-3_20BLANCO_1_600x.png?v=1695251673">
      <div class="product-info">
        <h2>Categoria: Calzado</h2>
        <p>Tenis</p>
        <p class="price">L800.00</p>
      </div>
      <div class="btnAgregarCarrito" data-producto="{'nombre': 'Producto A', 'precio': 10.99}">
        <a href="{{ route('carrito.home') }}" class="add-to-cart-btn" title="Agregar al carrito">
          <i class="fas fa-shopping-cart"></i>
          Agregar al carrito
        </a>
      </div>
    </div>
    <div class="product">
      <img class="imagen" src="https://media.glamour.es/photos/6233c2c7ba8a9f506b6dd0cd/master/w_320%2Cc_limit/LANCOME-FRAGRANCE-OUI-LVEB2022-30ML-000-3614273687485-CLOSED.png">
      <div class="product-info">
        <h2>Categoria: Perfumes</h2>
        <p>Loción para dama</p>
        <p class="price">L.720.00</p>
      </div>
      <div class="btnAgregarCarrito" data-producto="{'nombre': 'Producto A', 'precio': 10.99}">
        <a href="{{ route('carrito.home') }}" class="add-to-cart-btn" title="Agregar al carrito">
          <i class="fas fa-shopping-cart"></i>
          Agregar al carrito
        </a>
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
   // Verifica si hay productos en el localStorage y obtén la lista de productos
   var productosEnCarrito = JSON.parse(localStorage.getItem('productosEnCarrito')) || [];
    
    // Selecciona todos los elementos con la clase .add-to-cart
    var addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
  
    // Itera sobre cada botón "Agregar al carrito"
    addToCartButtons.forEach(function(button) {
      // Agrega un evento de clic a cada botón
      button.addEventListener('click', function() {
        // Obtén el nombre del producto del elemento padre (.product)
        var categoriaProducto = this.parentNode.parentNode.querySelector('h2').innerText;
        var nombreProducto = this.parentNode.parentNode.querySelector('p').innerText;
        var precioProducto = this.parentNode.parentNode.querySelector('p2').innerText;
        
        
        
        // Muestra el nombre del producto en la consola
        console.log("Producto agregado al carrito: ");

        var producto = {
          categoria: categoriaProducto,
          nombre: nombreProducto,
          precio: precioProducto
        };
        
        // Agrega el nombre del producto a la lista de productos en el carrito
        productosEnCarrito.push(producto);
        
        // Guarda la lista actualizada de productos en el localStorage
        localStorage.setItem('productosEnCarrito', JSON.stringify(productosEnCarrito));

      
        // Recupera los datos del localStorage


// Envia los datos al servidor a través de una solicitud AJAX
fetch('/carrito', {
  method: 'POST',
  headers: {
      'Content-Type': 'application/json'
  },
  body: JSON.stringify(productosEnCarrito) // Solo envía el arreglo directamente
})
.then(response => {
    // Maneja la respuesta del servidor si es necesario
})
.catch(error => {
    // Maneja errores si ocurren durante la solicitud AJAX
});
      });
    });
  });
    
</script>


</body>
</html>
