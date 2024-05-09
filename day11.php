
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="./day11.php" method="POST">
        <label for="">Username:</label>
        <input type="text" name="username" placeholder="Enter the Username"/>

        <br><br>

        <label for="">Password:</label>
        <input type="password" name="password" placeholder="Enter the password"/>
        <br><br>

        <input type="submit" value="Submit" name="submit"/>
        <input type="submit" value="Refresh"/>

        
    </form>
    <?php 
//isset= returns true if variable ids declared and not null.

//empty()=returns true is a varible is not declared but false if declared;


// $username="";
// echo empty($username)

// if(empty($username)){
//     echo "this variable is empty";

// }
// else{
//     echo "Not empty";



// 

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($username)){
        echo "Username is not provided";  
    
    }


    elseif(empty($password)){
        echo "password is not provided";
    }

    else{
        echo "Hey {$username}";

    }
}

?>
</body>
</html>

