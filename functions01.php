<!-- block of code only once and use it many tmes -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <form action="./functions01.php" method="post">
        <label for="">Number</label>
        <input type="text" name="num1"/>
<br><br>
        <label for="">Number</label>
        <input type="text" name="num2"/>
        <br><br>
        <input type="submit" value="submit" name="submit"/>
    </form>
</body>
</html>

<?php
// function happybday($firstname,$num){
//     echo "Happy Birthday";
//     echo "yay lets go";
// }
// happybday("Sandhya",10);
$num1=$_POST["num1"];
$num2=$_POST["num2"];

if(isset($_POST['submit'])){
 square($num1,$num2);
}


// function check($num1){
//     if($num1 % 2 == 0){
//         echo "The number is an Even Number";
//     }
//     else{
//         echo "The number is an Odd Number";
//     }
//     }
//square and sum of a number
function square($num1,$num2){
    $result= $num1 ** 2 + $num2 ** 2;
    echo $result;
}


?>