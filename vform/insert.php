<?php 
include("./connection.php");
include("./vvform.php");



if (empty($name_error) && empty($email_error) && empty($phone_error) && empty($password_error) && empty($file_error)) {
    if ($file) {
        $file_name = $file['name'];
        $file_tmpname = $file['tmp_name'];
        $des = "img/" . $file_name;
        move_uploaded_file($file_tmpname, $des);
    }
    echo "htllo";


    $query = "INSERT INTO fileupload (name, email, phone, password, image_path) 
              VALUES ('$name', '$email', '$phone', '$password', '$des')";
    
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
    } else {
        echo "Data successfully inserted!";
    }
}



















?>