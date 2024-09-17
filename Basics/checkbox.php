<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>


    <form action="day06.php" method="POST">
        <label for="">X:</label>
        <input type="text" name="x" placeholder="Enter the number X:"/>


</br>
</br>

        <label for="">Y:</label>
        <input type="text" name="y" placeholder="Enter the number Y:"/>

</br>
</br>

<label for="">Select Type:</label></br>
<input type="checkbox" name="add">1:Addition </br>
<input type="checkbox" name="sub">2:Subtraction</br>
<input type="checkbox" name="multi">3:Multiply</br>
<input type="checkbox" name="div">4:Division</br>

</br>
</br>

<input type="submit" value="Result" />  
<input type="submit" value="Refresh" />  

    </form>
</body>
</html>

<?php 

$x=$_POST['x'];
$y=$_POST['y'];

 if(isset($_POST['add'])){
    $result= $x + $y;
    echo $result;
}

 if(isset($_POST['sub'])){
    
    $result=$x-$y;
    echo $result;
}

 if(isset($_POST['multi'])){
    $result= $x*$y;
    echo $result;
}

 if(isset($_POST['div'])){

    $result= $x / $y;
    echo $result;
}

?>