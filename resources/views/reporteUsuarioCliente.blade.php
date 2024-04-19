<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reporte de Compras</title>
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
    <h1>Reporte de Compras</h1>
    <table class="purchases-table">
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <!-- Aquí se llenará dinámicamente con la información de compras con el codigo que haremos-->
        <tr>
          <td>2024-04-19</td>
          <td>Producto A</td>
          <td>2</td>
          <td>$50</td>
        </tr>
        <tr>
          <td>2024-04-20</td>
          <td>Producto B</td>
          <td>1</td>
          <td>$30</td>
        </tr>
        <tr>
          <td>2024-04-21</td>
          <td>Producto C</td>
          <td>3</td>
          <td>$80</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
