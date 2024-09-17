

<?php 
$foods= array("pizza","burger","omlete");
sort(array,$foods);
$foods[0]="veg pizza";
array_push($foods,"apple");
array_pop($foods);
array_shift($foods);
// $reverses=array_reverse($foods);
// foreach($reverses as $reverse){
//     echo $reverse."<br>";
// }
echo count($foods);
//works as a stack
foreach($foods as $food){
    echo $food."<br>";
}
 

?>