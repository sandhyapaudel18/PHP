<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./day03.php" method="post">
<label>Quantity</label>
<input type="text" name="quantity" placeholder="Enter the quantity">
</br>
<input type="submit" value="total">

    </form>
</body>
</html>

<?php
 
   $cost=100;
   $quantity=$_POST["quantity"];
   $total=$quantity * $cost;
   echo"Total is \${$total}";

?>