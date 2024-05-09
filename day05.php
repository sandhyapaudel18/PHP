<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="./day05.php" method="post">
        <label for="">X:</label>
        <input type="text" name="x" placeholder="Enter the number X">

    </br>
    </br>
    
        <label for="">Y:</label>
        <input type="text" name="y" placeholder="Enter the number Y">


        </br>
        </br>


        <label for="">Z:</label>
        <input type="text" name="z" placeholder="Enter the number Z">

</br>
</br>
    <label for="">Click for Result:</label>
</br>


<!-- <input type="radio" id="add" name="addition" value="add"  />
    <label for="">Addition</label>

<input type="radio" id="subt" name="subtraction" value="sub"  />
    <label for="">Subtraction</label>


<input type="radio" id="multiply" name="multiply" value="multiply"/>
    <label for="">Multiply</label>

<input type="radio" id="division" name="division" value="division"/>
    <label for="">Division</label>   -->

</br>

    
    <input type="submit" value="Result" />  
    <input type="submit" name="refresh"value="Refresh" />   



    </form>
</body>
</html>

<?php

  $x=$_POST['x'];
  $y=$_POST['y'];
  $z=$_POST['z'];
  
 if($x>$y && $x>$z){
    echo"x is greatest of all:";
}
 else if($y>$x && $y>$z){
    echo"y is greatest of all:";
}
else{
    echo"z is greatest of all:";
}

//   else if($x<)
// if($x<0 || $x==null){
//     echo"Invalid value of X";

// }
// else if($y<0 || $y==null){
//     echo"Invalid value of Y";
// }

// else{


//   $addition=$x+$y;
//   echo $addition;
// }





//   $subtraction=$x-$y;
//   echo $subtraction;

//   $multiply=$x*$y;
//   echo $multiply;

//   $division=$X/$Y;
//   echo $division;
  
?>