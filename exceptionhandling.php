<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./exceptionhandling.php" method="post">
        <label for="">X:</label>
        <input type="text" name="x"/><br><br>

        <label for="">Y:</label>
        <input type="text" name="y"/><br><br>

        <input type="submit" value="submit">

    </form>
</body>
</html>
<?php 
$x=$_POST['x'];
$y=$_POST['y'];

try{
    checknum($y);
    echo"Number should be less than 0";
}
catch(Exception $e ){
 echo "Message:".$e -> getMessage();
}

function checknum($y){
     if($y < 0 ){
        throw new Exception("Value must be greater  than 0");
     
     }
     return true;
}
?>