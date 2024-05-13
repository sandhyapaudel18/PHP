<?php 
$username="sandhya";
$phone=9847158150;



// $username=strtolower($username);
// $username=strtoupper($username);



//str_pad=add elements up to certain indexes
// $username=str_pad($username,20,"1");

//just replace the num or char present in the strings:
$phone=str_replace("9","0",$phone);
echo $phone;



echo $username;


?>