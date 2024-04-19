<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reporte de Compras por Usuario</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #0F1C30;
      color: #C2C6CE;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      background-color: #C0D0EF;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #668DC0;
      text-align: center;
    }

    .purchases-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .purchases-table th, .purchases-table td {
      padding: 10px;
      border-bottom: 1px solid #304AGE;
    }

    .purchases-table th {
      background-color: #668DC0;
      color: #C2C6CE;
      text-align: left;
    }

    .purchases-table tbody tr:nth-child(even) {
      background-color: #304AGE;
    }

    .purchases-table tbody tr:hover {
      background-color: #668DC0;
    }

    .purchases-table td {
      color: #0F1C30;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Reporte de Compras por Usuario</h1>
    <table class="purchases-table">
      <thead>
        <tr>
          <th>Usuario</th>
          <th>Cantidad de Compras</th>
        </tr>
      </thead>
      <tbody>
        <!-- Aquí se llenará dinámicamente con la información de compras del código que implementemos -->
        <tr>
          <td>Usuario 1</td>
          <td>5</td>
        </tr>
        <tr>
          <td>Usuario 2</td>
          <td>8</td>
        </tr>
        <tr>
          <td>Usuario 3</td>
          <td>12</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
