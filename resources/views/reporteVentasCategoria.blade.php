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
      max-width: 800px;
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
    <h1>Reporte de Ventas</h1>
    <table class="sales-table">
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <!-- Aquí se llenará dinámicamente con la información de ventas del codigo que haremos -->
        <tr>
          <td>2024-04-19</td>
          <td>Producto A</td>
          <td>10</td>
          <td>L1000</td>
        </tr>
        <tr>
          <td>2024-04-19</td>
          <td>Producto B</td>
          <td>8</td>
          <td>L800</td>
        </tr>
        <tr>
          <td>2024-04-19</td>
          <td>Producto C</td>
          <td>15</td>
          <td>L1500</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
