<?php
$postData = file_get_contents("php://input");

$data = json_decode($postData, true);

$param1 = $data['param1'] ?? '';
$param2 = $data['param2'] ?? '';

$response = "Received: param1=$param1, param2=$param2";

echo $response;
