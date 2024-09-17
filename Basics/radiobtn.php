<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadioButtons</title>
</head>
<body>
    <!-- //CHOOSE ONE BTN AND PROVIDE MESSAAGE OF YOU HAVE CHOOSEN THIS CARD -->
    <form action="./radiobtn.php" method="post">
        <input type="radio" value="VISA CARD" name="cc">VISA<br><br>
        <input type="radio" value="MASTER CARD" name="cc" >MASTER<br><br>
        <input type="radio" value="AMERICAN CARD" name="cc" >AMERICAN<br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php 

if(isset($_POST['cc'])){
    echo "You have choosen " .$_POST['cc'];
}
else{
    echo "Please Select";
}







?>