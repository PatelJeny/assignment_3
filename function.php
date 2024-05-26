<?php
require_once 'dbconfig.php';
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');

//registration

function storeUsers($userInput){
    global $conn;

    $username = mysqli_real_escape_string($conn,$userInput['username']);
    $password = mysqli_real_escape_string($conn,$userInput['password']);
    $email = mysqli_real_escape_string($conn,$userInput['email']);

        $query ="INSERT INTO users_1 (username,password,email) values ('$username','$password','$email')";
        $result= mysqli_query($conn,$query);


        if($result){
            $data = [
                'message' => 'registration successfully'
            ];
            return json_encode($data); 

        }
        else{
            $data = [
                'message' => 'internal error'
            ];
            return json_encode($data); 
        }
    }

    //login

    function getUserList($userParams) {
        global $conn;

        $email =  mysqli_real_escape_string($conn, $userParams['email']);
        $password =  mysqli_real_escape_string($conn, $userParams['password']);

    
        $query = "SELECT * FROM users_1 where email='$email' AND password='$password'";
        $query_run = mysqli_query($conn, $query);
    
        if ($query_run) {
            if (mysqli_num_rows($query_run) > 0) {
                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
                
                $data = [
                    'message' => 'login successfully',
                    'data' => $res
                ];
            }
             else {
                $data = [
                    'message' => 'no users found'
                ];
            }
        }
         else {
            $data = [
                'message' => 'internal error',
            ];
           
        }
        return json_encode($data);
       
    }
    



?>