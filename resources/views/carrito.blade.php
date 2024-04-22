¿<!DOCTYPE html>
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

    /* Estilos para los botones */
    .btn-container {
      margin-top: 20px;
      display: flex;
      justify-content: space-between;
    }

    .btn-wrapper {
      display: inline-block;
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

    /* Añadimos margen entre los botones */
    .btn-wrapper:first-child {
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1><a href="#"><i class="fas fa-solid fa-cart-shopping"></i></a></h1> <!-- Utilizamos la clase de icono -->
    </header>
    <main>
      <div class="productos-carrito">
        @if($productosEnCarrito!=null)
        @foreach($productosEnCarrito as $producto)
            <div class="producto">
                <h2>{{ $producto['nombre'] }}</h2>
                <p>Precio: {{ $producto['precio'] }}</p>
                <!-- Otros detalles del producto según sea necesario -->
            </div>
        @endforeach
    @else
        <p>No hay productos en el carrito.</p>
    @endif
    </div>


      </div>
      <!-- Añadir más productos aquí -->
      <!-- Botones -->
      <div class="btn-container">
        <div class="btn-wrapper">
          <a class="btn" onclick="procederCompra()">Proceder a compra</a>
        </div>
        <div class="btn-wrapper">
          <a href="{{ route('home') }}" class="btn">Volver</a>
        </div>
      </div>
    </main>
  </div>

  <script>
    function procederCompra() {
      // Aquí puedes agregar la lógica para proceder a la compra
      alert("Debes seleccionar un metodo de pago...");
    }
  </script>


</body>
</html>
