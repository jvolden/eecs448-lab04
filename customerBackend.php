<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Summary</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
</head>
<body style="padding: 30px">
<?php 

$email = $_POST["email"];
$password = $_POST["password"];
$apples = $_POST["apples"];
$oranges = $_POST["oranges"];
$bananas = $_POST["bananas"];
$shipping = $_POST["shipping"];
if ($shipping == "option1") {
  $shippingCost = 0.00;
  $shippingLabel = "Free 7 day";
} else if ($shipping == "option2") {
  $shippingCost = 50.00;
  $shippingLabel = "$50.00 over night";
} else {
  $shippingCost = 5.00;
  $shippingLabel = "$5.00 three day";
}

$cost = ($apples * 0.50) + ($oranges * 0.25) + ($bananas * 0.10);

?>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Order Summary</h4>
        Welcome, <b><?php echo $email; ?></b><br>
        Your password was: <b><?php echo $password; ?></b>
        </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th></th>
              <th>Quantity</th>
              <th>Cost Per Item</th>
              <th>Sub Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Apples</th>
              <td><?php echo $apples; ?></td>
              <td>$0.50</td>
              <td><?php echo money_format('%i', ($apples * 0.5)); ?></td>
            </tr>
            <tr>
              <th>Oranges</th>
              <td><?php echo $oranges; ?></td>
              <td>$0.25</td>
              <td><?php echo money_format('%i', ($oranges * 0.25)); ?></td>
            </tr>
            <tr>
              <th>Bananas</th>
              <td><?php echo $bananas; ?></td>
              <td>$0.10</td>
              <td><?php echo money_format('%i', ($bananas * 0.25)); ?></td>
            </tr>
            <tr>
              <th>Shipping</th>
              <td colspan="2" class="text-center"><?php echo $shippingLabel; ?></td>
              <td><?php echo money_format('%i', $shippingCost); ?></td>
            </tr>
            <tr>
              <th colspan="3" class="text-center">Total</th>
              <td><?php echo money_format('%i', ($cost + $shippingCost)); ?></td>
            </tr>
          </tbody>
        </table>
      </div> 
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
          crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
          crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
          crossorigin="anonymous"></script>
</body>
</html>
