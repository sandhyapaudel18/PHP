
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form action="./day08.php" method="post">
<label for="">X:</label>
    <input type="text" name="x" placeholder="Enter the number "/>

    <br><br>
    <input type="submit" value="Calculate">
</form>
</body>
</html>

<?php 

$X=$_POST['x'];
$sum=0;
  while($X!=0){ 
    
    $rem = $X % 10;
    $sum= $sum * 10 + $rem;
    $X = (int)($X / 10);


}
  echo $sum;
?>

