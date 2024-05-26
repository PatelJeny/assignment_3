<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $target_dir ="C:\\xampp\htdocs\assignment_3\image\\";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    echo $target_file;

    if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
        echo "file has been uploaded";
    }
    else{
        echo "something went wrong";
    }

    
}


?>