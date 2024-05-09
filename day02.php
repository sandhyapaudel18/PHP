<!-- //get and post -->
<!-- 
$_GET=data is appended to the url
      =data is not secure
      =char limit
      =data is visible in the url
      =bookmark is possible to the values
      =better for searc pages
      GET request can be cached

$_POST=Data is packaged inside the body of HTTP request 
         =MORE secure
         =No data  limit 
        =  get requests are not cached
        =cannot bookmark
        =better for submitting credentials
    -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./day02.php" method="post">
        <label for="">Username</label><?br>
        <input type="text" name="username" placeholder="Enter the Username "></br>
         </br>
        <label for="">Password</label><?br>
        <input type="password" name="password" placeholder="Enter the Password "></br>
        </br>
        <input type="submit" value="Log in">

    </form>
    
</body>
</html>

    <?php
      echo "{$_POST["username"]}<br>";
      echo "{$_POST["password"]}<br>";


?>