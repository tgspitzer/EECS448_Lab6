<?php
  $userName = $_POST["userName"];
  $passWord = $_POST["passWord"];
  $appleAmt = $_POST["apple"];
  $peachAmt = $_POST["peach"];
  $pearAmt = $_POST["pear"];
  $shippingOpt = $_POST["shipping"];

  $totAppCost = $appleAmt*1;
  $totPeachCost = $peachAmt*3;
  $totPearCost = $pearAmt*2.5;


//gets the shipping cost
  if($shippingOpt==7)
  {
    $shippingCost = 0;
    $shippingWord = "Free 7 day";
  }
  else if($shippingOpt==1)
  {
    $shippingCost = 50;
    $shippingWord = "Over night";
  }
  else if($shippingOpt==3)
  {
    $shippingCost = 5;
    $shippingWord = "Three day";
  }
  $totalCost = $totAppCost+$totPeachCost+$totPearCost+$shippingCost;

  echo "<link rel='stylesheet' type='text/css' href='Exercise3.css' />";

  echo "<h1>Welcome</h1>";
  echo "Your password is: $passWord";
  echo "<h3>Here is your reciept:</h3>";
//Builds Reciept
  echo "<table>";
  echo "<tr>
          <th><b>Item</th>
          <th><b>Quantity</th>
          <th><b>Cost per Item</th>
          <th><b>Sub total</th>
        </tr>";
  echo "<tr>
          <td><b>Apple</td>
          <td>$appleAmt</td>
          <td>$1.00</td>
          <td>$$totAppCost</td>
        </tr>";
  echo "<tr>
          <td><b>Peach</td>
          <td>$peachAmt</td>
          <td>$3.00</td>
          <td>$$totPeachCost</td>
        </tr>";
  echo "<tr>
          <td><b>Pear</td>
          <td>$pearAmt</td>
          <td>$2.50</td>
          <td>$$totPearCost</td>
        </tr>";
  echo "<tr>
          <td><b>Shipping</td>
          <td colspan='2'><center>$shippingWord</center></td>
          <td>$$shippingCost</td>
        </tr>";
  echo "<tr>
          <td colspan='3'><b><center>Total Cost</center></td>
          <td><b>$$totalCost</td>
        </tr>";
  echo "</table>";

?>
