<?php
header('content-type: application/json');

$weather = "sunny";
$day = "sunday";

$json_response = json_encode(["weather"=>$weather,
                                "day"=>$day]);

echo json_encode($json_response);


?>