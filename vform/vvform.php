<?php
include("./connection.php");
// we use server request method duirng validating in server side
$name_error=$email_error=$phone_error=$password_error=$error="";
$name=$email=$phone=$password="";
$file="null";

function test_input($content){
    $content=trim($content);
    $content=stripslashes($content); 
    $content=htmlspecialchars($content);

    return $content;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=test_input($_POST['name']);
    $email=test_input($_POST['email']);
    $phone=test_input($_POST['phone']);
    $password=test_input($_POST['password']);


    if(empty($name)){
        $name_error="Please fill the name";
    }
    elseif(!preg_match("/^[a-zA-Z]*$/",$name)){ 
        $name_error="Only letters and White space are allowed";
    }

    if(empty($email)){
        $email_error="Please fill the email";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
       $email_error="Invalid format for email";
    }
 
     if(empty($phone)){
     $phone_error="Please fill the phone number";
     }

    elseif(strlen($phone)!=10 ||!filter_var($phone,FILTER_VALIDATE_INT)){
        $phone_error="Invalid phone number format";
    }


     if(empty($password)){
       $password_error="Please fill the password";
     }

     if(isset($_FILES['file'])){
      
          $file_name=$_FILES['file']['name'];
          $file_size=$_FILES['file']['size'];
          $file_tmpname=$_FILES['file']['tmp_name'];
          $file_type=$_FILES['file']['type'];

           $extensions=array("image/jpeg","image/jpg","image/png");

           if(in_array($file_type,$extensions) == false){
            $error="This extension is not allowed";
           }

           elseif($file_size > 2097152){
        $error="File size is too large ";
           }

           else{
            $des="img/".$file_name;
            move_uploaded_file($file_tmpname,$des);
          
           }
     }
   
}




?>