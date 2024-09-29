<?php 
$host="localhost";
$username="root";
$pw="";
$dbname="files";


$conn=mysqli_connect($host,$username,$pw,$dbname);
if(!$conn){
echo "error";
}



?>