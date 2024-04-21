<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seleccionar Tipo de Usuario</title>
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
      max-width: 400px;
      background-color: #C0D0EF;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h1 {
      color: #668DC0;
      margin-bottom: 20px;
    }

    .btn-container {
      display: flex;
      justify-content: center;
    }

    .btn {
      background-color: #668DC0;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin: 0 10px; 
    }

    .btn:hover {
      background-color: #304A6E;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>¿Qué tipo de usuario eres?</h1>
    <div class="btn-container">
      <a href="{{ route('loginadmin.home') }}" class="btn">Usuario Administrador</a>
      <a href="{{ route('loginuser.home') }}" class="btn">Usuario Básico</a>
    </div>
  </div>
</body>
</html>
