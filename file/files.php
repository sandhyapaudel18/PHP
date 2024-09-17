<?php 
if(isset($_FILES['file'])){
$file_name=$_FILES['file']['name'];
$file_size=$_FILES['file']['size'];
$file_tmpname=$_FILES['file']['tmp_name'];
$file_type=$_FILES['file']['type'];


$extensions=array("image/jpeg","image/jpg","image/png");
if(in_array($file_type,$extensions) == false){
    echo "This extension is not allowed";
}

  if($file_size > 2097152){
        echo "the file exceeded the capacity";
    }

    else{
  $des = "images/".$file_name;
  move_uploaded_file($file_tmpname,$des);
  echo "Thank you for submitting the image";
    }
      


}

?>