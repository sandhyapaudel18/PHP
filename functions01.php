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

if(isset($_POST['submit'])){


function check($_POST['num1']){
if($num1 % 2 == 0){
    echo "Even";
}
else{
    echo "odd";
}
}
}
?>