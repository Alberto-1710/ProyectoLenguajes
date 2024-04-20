<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
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

    .login-container {
      max-width: 400px;
      background-color: #C0D0EF;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h1 {
      color: #668DC0;
      margin-top: 0;
    }

    .input-group {
      margin-bottom: 20px;
      position: relative;
    }

    .input-group input {
      width: calc(100% - 40px); 
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #304A6E;
      padding-left: 40px; 
    }

    .input-group i {
      position: absolute;
      color: #304A6E;
      top: 50%;
      transform: translateY(-50%);
      left: 10px;
    }

    .input-group label {
      display: none; 
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

    .forgot-password {
      color: #304A6E;
      text-decoration: none;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h1>Login</h1>
    <div class="input-group">
      <i class="fas fa-user"></i>
      <label for="usuario" class="input-label">Usuario</label>
      <input type="text" id="usuario" placeholder="Usuario">
    </div>
    <div class="input-group">
      <i class="fas fa-lock"></i>
      <label for="contrasenia" class="input-label">Contraseña</label>
      <input type="password" id="contrasenia" placeholder="Contraseña">
    </div>
    <a href="{{ route('validar.home') }}" class="btn">Ingresar</a>
    <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
  </div>
</body>
</html>
