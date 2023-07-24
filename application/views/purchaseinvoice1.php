<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Invoice</title>
  <style>
    /* Define your CSS styles here */
    body {
      font-family: Arial, sans-serif;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
    }
    
    .total {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>Invoice</h1>
  
  <table>
    <thead>
      <tr>
        <th>Description</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <!-- Replace the example rows with your invoice items -->
      <tr>
        <td>Item 1</td>
        <td>1</td>
        <td>$10.00</td>
        <td>$10.00</td>
      </tr>
      <tr>
        <td>Item 2</td>
        <td>2</td>
        <td>$5.00</td>
        <td>$10.00</td>
      </tr>
    </tbody>
    <tfoot>
      <!-- Replace the example totals with your invoice totals -->
      <tr>
        <td colspan="3" class="total">Subtotal</td>
        <td>$20.00</td>
      </tr>
      <tr>
        <td colspan="3" class="total">Tax (10%)</td>
        <td>$2.00</td>
      </tr>
      <tr>
        <td colspan="3" class="total">Grand Total</td>
        <td>$22.00</td>
      </tr>
    </tfoot>
  </table>
</body>
</html>