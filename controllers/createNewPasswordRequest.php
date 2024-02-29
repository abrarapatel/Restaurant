<?php

include "../pages/include/connection.php";

$pwd = $_POST['pwd'];
$accid = $_POST['accid'];

$dataToSend = array(
    "result" => false,
    "message" => "There is some error"
);

$checkOldPwdStr = "SELECT pwd from account WHERE id = $accid";
$checkOldPwdQry = mysqli_query($conn, $checkOldPwdStr);
$checkOldPwdArr = mysqli_fetch_all($checkOldPwdQry, MYSQLI_ASSOC);

$hashed_password = $checkOldPwdArr[0]["pwd"];

if (password_verify($pwd, $hashed_password)) {


    $dataToSend = array(
        "result" => false,
        "message" => "Old password and new password cannot be same"
    );
} else {
    $options = [
        'cost' => 11
    ];

    $hashed_password = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $updatePwdStr = "UPDATE account set pwd = '$hashed_password' WHERE id = $accid";
    $updatePwdQry = mysqli_query($conn, $updatePwdStr);

    $dataToSend = array(
        "result" => true,
        "message" => "Password updated successful"
    );
}

$data = json_encode($dataToSend);
header('Content-Type: application/json');

echo $data;
