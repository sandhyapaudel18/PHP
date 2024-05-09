<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./day04.php" method="post">
        <label for="">X:</label>
        <input type="text" name="x">
        <br>

        <label for="">Y:</label>
<br>
        <input type="submit" value="total">
        <br>
    </form>

</body>
</html>
<?php
$x=$_POST["x"];
$total=null;

//abs acts as a mode i.e -ve to +ve:
// $total= abs($x);
// echo $total;

//round to upper way
// $total=round($x);


//floor always round down:
// 


//ceiling=round up

// $total=ceil($x);
// echo $total;

?>