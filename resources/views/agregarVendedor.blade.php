<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Producto a Usuario</title>
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
      width: 90%;
      max-width: 800px;
      background-color: #C0D0EF;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      display: flex;
      flex-direction: column; /* Alinear elementos verticalmente */
      justify-content: center; /* Centrar elementos horizontalmente */
      align-items: center; /* Centrar elementos verticalmente */
    }

    .input-group {
      margin-bottom: 20px;
      display: flex;
      align-items: center; /* Centrar verticalmente */
      width: 100%; /* Ajustar al 100% del contenedor */
    }

    .input-group label {
      color: #668DC0;
      text-align: left;
      width: 30%; /* Ancho del nombre */
      margin-right: 10px; /* Espacio entre el nombre y el campo de entrada */
    }

    .input-group input,
    .input-group select,
    .input-group textarea {
      flex: 1; /* Hace que el campo de entrada ocupe todo el espacio restante */
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #304A6E;
      font-family: Arial, sans-serif;
      max-width: 100%;
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
  <div class="container">
    <h1>Agregar Producto a Vendedor</h1>
    <div class="input-group">
      <label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="usuario" placeholder="Ingrese el nombre de usuario">
    </div>
    <div class="input-group">
      <label for="nombre">Nombre del Producto:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Nombre del producto">
    </div>
    <div class="input-group">
      <label for="precio">Precio del Producto:</label>
      <input type="number" id="precio" name="precio" placeholder="Precio del producto">
    </div>
    <div class="input-group">
      <label for="descripcion">Descripción del Producto:</label>
      <textarea id="descripcion" name="descripcion" placeholder="Descripción del producto"></textarea>
    </div>
    <div class="input-group">
      <label for="stock">Cantidad en Stock:</label>
      <input type="number" id="stock" name="stock" placeholder="Cantidad en stock">
    </div>
    <div class="input-group">
      <label for="categoria">Categoría:</label>
      <select id="categoria" name="categoria">
        <option value="ropa">Ropa</option>
        <option value="perfume">Perfume</option>
        <option value="calzado">Calzado</option>
      </select>
    </div>
    <button class="btn">Agregar Producto</button>
  </div>
</body>
</html>
