<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agregar Producto</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Agregamos la hoja de estilos de Font Awesome -->
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #0F1C30;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width: 600px; /* Ajustado el ancho del contenedor */
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

  .input-group {
    margin-bottom: 20px;
    text-align: left;
  }

  .input-group label {
    display: block;
    color: #668DC0;
    font-size: 18px;
    margin-bottom: 5px;
  }

  .input-group input, .input-group select, .input-group textarea {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #304A6E;
    color: #C0D0EF;
    margin-top: 5px;
  }

  .input-group select {
    color: #C0D0EF;
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
</style>
</head>
<body>
<div class="container">
  <h1>Agregar Producto</h1>
  <form action="#" method="POST">
    <div class="input-group">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>
      <label for="usuario">Usuario Vendedor:</label>
      <input type="text" id="usuario" name="usuario" placeholder="Ingrese el nombre de usuario">
    </div>
    <div class="input-group">
      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="precio" min="0.01" step="0.01" required>
    </div>
    <div class="input-group">
      <label for="descripcion">Descripción:</label>
      <textarea id="descripcion" name="descripcion" rows="8" required></textarea> <!-- Ajustado el número de filas -->
    </div>
    <div class="input-group">
      <label for="categoria">Categoría:</label>
      <select id="categoria" name="categoria" required>
        <option value="" disabled selected>Selecciona una categoría</option>
        <option value="ropa">Ropa</option>
        <option value="perfume">Perfume</option>
        <option value="calzado">Calzado</option>
      </select>
    </div>
    <button type="submit" class="btn">Agregar Producto</button>
  </form>
</div>
</body>
</html>
