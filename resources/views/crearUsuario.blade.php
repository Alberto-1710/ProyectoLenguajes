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
      max-width: 800px;
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

    .form-group.direccion {
      border-top: 2px solid #304AGE;
      padding-top: 20px;
      margin-top: 20px;
      margin-bottom: 20px; /* Añadimos margen inferior al grupo de dirección */
    }

    .form-group.direccion h3 {
      color: #304AGE; 
      margin-bottom: 10px; /* Ajustamos el margen inferior del título */
    }

    .form-row {
      display: flex;
      justify-content: space-between;
    }

    .form-col {
      width: 48%; /* Reducimos el ancho para dejar espacio para la separación blanca */
    }

    .form-col:nth-child(odd) {
      margin-right: 4%; /* Añadimos un margen derecho para la separación */
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
    
    .form-group.direccion h3 {
      color: black;     
    }
    
  </style>
</head>
<body>
  <div class="container">
    <h2>Crear Nuevo Usuario</h2>
    <form id="formulario" method="POST" action="{{ route('usuario.home')}}">
      @csrf
      <div class="form-group">
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="usuario" placeholder="Ingrese el nombre de usuario">
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="contrasenia" name="contrasenia" placeholder="Ingrese la contraseña">
      </div>
      <div class="form-row">
        <div class="form-col">
          <div class="form-group">
            <label for="primerNombre">Primer Nombre</label>
            <input type="text" id="primerNombre" name="primerNombre" placeholder="Ingrese el primer nombre">
          </div>
          <div class="form-group">
            <label for="segundoNombre">Segundo Nombre</label>
            <input type="text" id="segundoNombre" name="segundoNombre" placeholder="Ingrese el segundo nombre">
          </div>
          <div class="form-group">
            <label for="primerApellido">Primer Apellido</label>
            <input type="text" id="primerApellido" name="primerApellido" placeholder="Ingrese el primer apellido">
          </div>
          <div class="form-group">
            <label for="segundoApellido">Segundo Apellido</label>
            <input type="text" id="segundoApellido" name="segundoApellido" placeholder="Ingrese el segundo apellido">
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Ingrese el teléfono">
          </div>
          <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" id="email" name="correo" placeholder="Ingrese el correo electrónico">
          </div>
          <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" id="dni" name="dni" placeholder="Ingrese el DNI">
          </div>
          <div class="form-group">
            <label for="genero">Género:</label>
            <select id="genero" name="genero">
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
            </select>
          </div>
          <div class="form-group">
            <label for="fechaNacimiento">Fecha de Nacimiento</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento">
          </div>
        </div>
        <div class="form-col">
          <div class="form-group direccion">
            <h3 style="color: #304AGE;">Dirección</h3> 
            <label for="country">País</label>
            <input type="text" id="pais" name="pais" placeholder="Ingrese el país">
          </div>
          <div class="form-group direccion">
            <label for="department">Departamento</label>
            <input type="text" id="departamento" name="departamento" placeholder="Ingrese el departamento">
          </div>
          <div class="form-group direccion">
            <label for="city">Municipio</label>
            <input type="text" id="municipio" name="municipio" placeholder="Ingrese el municipio">
          </div>
          <div class="form-group direccion">
            <label for="village">Aldea</label>
            <input type="text" id="aldea" name="aldea" placeholder="Ingrese la aldea">
          </div>
          <div class="form-group direccion">
            <label for="neighborhood">Colonia</label>
            <input type="text" id="colonia" name="colonia" placeholder="Ingrese la colonia">
          </div>
          <div class="form-group direccion">
            <label for="reference">Referencia</label>
            <input type="text" id="referencia" name="referencia" placeholder="Ingrese una referencia">
          </div>
        </div>
      </div>
      <div class="btn-container">
        <!-- Aquí en el botón crear se puede mandar la ruta para crear el usuario  -->
        <button type="submit" class="btn" onclick="mostrarAlerta()">Crear</button>
        <a href="{{ route('home') }}" class="btn register-btn">Volver</a>
      </div>
    </form>
    <script>
      // Función para mostrar la alerta y redireccionar
      function mostrarAlerta() {
        // Muestra la alerta
        alert("Usuario creado exitosamente\nRetornando a la página principal.");
      }
    </script>
  </div>
</body>
</html>
