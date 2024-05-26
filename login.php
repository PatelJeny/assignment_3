<?php
error_reporting(0);
header('access-control-allow-origin:*');
header('Content-Type: application/json'); 
header('Access-Control-Allow-Methods: POST');
header('access-control-allow-headers: content-type, access-control-allow-headers,authorization, x-request-with');

include('function.php'); 

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "POST"){

  
    $userList =  getUserList($_POST);
    echo $userList;
    

}
else{

    $data = [
        'message' => $requestMethod . ' method not allowed'
    ];

    echo json_encode($data);

}


?>