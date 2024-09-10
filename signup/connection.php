<?php 
$host="localhost";
$user="root";
$pw="";
$database="login";

$conn=mysqli_connect($host,$user,$pw,$database);
if(!$conn){
    echo"unsuccessfull";
}



?>