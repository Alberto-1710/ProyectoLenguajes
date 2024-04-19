<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reporte de Ventas</title>
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

    .sales-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .sales-table th, .sales-table td {
      padding: 10px;
      border-bottom: 1px solid #304AGE;
    }

    .sales-table th {
      background-color: #668DC0;
      color: #C2C6CE;
      text-align: left;
    }

    .sales-table tbody tr:nth-child(even) {
      background-color: #304AGE;
    }

    .sales-table tbody tr:hover {
      background-color: #668DC0;
    }

    .sales-table td {
      color: #0F1C30;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Reporte de Ventas Por Categoría</h1>
    <table class="sales-table">
      <thead>
        <tr>
          <th>Categoría</th>
          <th>Cantidad Vendida</th>
        </tr>
      </thead>
      <tbody>
        <!-- Aquí se llenará dinámicamente con la información de ventas del código que haremos -->
        <tr>
          <td>Electrónica</td>
          <td>25</td>
        </tr>
        <tr>
          <td>Ropa</td>
          <td>40</td>
        </tr>
        <tr>
          <td>Libros</td>
          <td>15</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
