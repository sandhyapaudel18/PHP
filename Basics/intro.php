<?php
$var="sandhya paudel";
$email="work@gmail.com</br>";

$age=19;

$gpa=4.00;
$cost=5.00;
$quantity=15;

$employeed=true;
$online=true;
$forsale=false;

echo"hello its me {$var}</br>";
echo"My name is {$var} </br>";

echo"My age is {$age} </br>";

echo"My gpa is {$gpa} </br>";
echo"the cost of coffee is \${$cost}</br>";

echo"Shop Status:{$online}</br>";
echo"Employee Status:{$employeed}</br>";
$total=null;

echo"You have total : $cost x $quantity";
$total=$cost * $quantity;
echo"The cost is:{$total}";

?>