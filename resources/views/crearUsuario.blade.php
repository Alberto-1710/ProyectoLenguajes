<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Usuario</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #0F1C30;
      color: #C2C6CE;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #C0D0EF;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #668DC0;
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #0F1C30; 
    }

    .form-group input {
      width: calc(100% - 12px);
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #304AGE;
    }

    .btn-container {
      display: flex;
      justify-content: space-between;
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
      background-color: #304AGE;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Crear Nuevo Usuario</h2>
    <form id="formulario" method="POST" action="{{ route('usuario.home')}}">
      @csrf
      <div class="form-group">
        <label for="username">Usuario</label>
        <input type="text" id="username" name="usuario" placeholder="Ingrese el nombre de usuario">
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="contrasenia" placeholder="Ingrese la contraseña">
      </div>
      <div class="btn-container">
        <!-- Aqui en el boton crear se puede mandar la ruta para crear el usuario  -->
        <button type="submit" class="btn" onclick="mostrarAlerta()">Crear</button>
        <button type="button" class="btn" onclick="volver()">Volver</button>
      </div>
    </form>
    <script>
      // Función para mostrar la alerta y redireccionar
      function mostrarAlerta() {
          // Muestra la alerta
          alert("Usuario creado exitosamente\nRetornando a la página principal." );
      }
  </script>
  </div>
</body>
</html>
