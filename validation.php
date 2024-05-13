<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./validation.php" method="post">
        <label for="">Username</label>
        <input type="text" name="username" placeholder="Enter the name:"><br><br>

    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php 
if(isset($_POST['submit'])){
    $username=filer_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
}








?>