<?php

include "../pages/include/connection.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['pwd'];

$checkExistStr = "SELECT * FROM account WHERE email = '$email'";
$checkExistRes = mysqli_query($conn, $checkExistStr);

if (mysqli_num_rows($checkExistRes) > 0) {
    $dataToSend = array(
        "result" => false,
        "message" => "Email Id Already Exist"
    );
} else {

    $options = [
        'cost' => 11
    ];

    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);

    $insertDataStr = "INSERT INTO account (fname,lname,email,pwd) values ('$fname','$lname','$email','$hashed_password')";
    $insertDataQry = mysqli_query($conn, $insertDataStr);
    $accid = mysqli_insert_id($conn);

    session_start();

    $_SESSION['user_accid'] = $accid;
    $_SESSION['user_fname'] = $fname;
    $_SESSION['user_lname'] = $lname;
    $_SESSION['user_email'] = $email;

    $dataToSend = array(
        "result" => true,
        "message" => "Data Inserted Successfully"
    );
}


$data = json_encode($dataToSend);
header('Content-Type: application/json');

echo $data;
