<?php
include="./connection.php";

if(isset($_POST["submit"])){
$username=$_POST["username"];
$password=$_POST["password"];


$sql="INSERT INTO signup(username,password) VALUES('$username','$password')";
$result=mysqli_query($conn,$sql);

if(!$result){
echo("Unsuccesfully");
}
}

?>