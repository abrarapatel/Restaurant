<?php

include "../pages/include/connection.php";

$email = $_POST['email'];

$dataToSend = array(
    "result" => false,
    "message" => "There is some error"
);

$searchDataStr = "SELECT id FROM account WHERE email = '$email'";
$searchDataQry = mysqli_query($conn, $searchDataStr);
$searchDataArr = mysqli_fetch_all($searchDataQry, MYSQLI_ASSOC);

if (mysqli_num_rows($searchDataQry) > 0) {
    $to = $email;
    $subject = "Account password recovery";

    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $randomString = str_shuffle($characters);

    $keyString = substr($randomString, 0, 15);

    $keyString .= date("YmdHis");
    $keyString .= $searchDataArr[0]['id'];

    $currentDateTime = date("Y-m-d H:i:s");

    $dateAfter2Days = $futureDateTime = date("Y-m-d H:i:s", strtotime($currentDateTime . " +2 days"));

    $insertRequestStr = "INSERT INTO recover_pwd_request (acc_id,key_string,expiry) values (" . $searchDataArr[0]['id'] . ", '$keyString', '$dateAfter2Days')";
    $insertRequestQry = mysqli_query($conn, $insertRequestStr);

    $basePath = "/restaurant/pages/passwordRecover.php?recoveryCode=$keyString";
    $pwdRecoverPageLink = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $basePath;
    $message = "<center><h1>Link to recover the password</h1><div>Link: <a href='$pwdRecoverPageLink'>Click to reset your password</a></div><div>Link will be expired in 2 hours</div></center>";
    $header =  'MIME-Version: 1.0' . "\r\n";
    $header .= 'From: Abrar Patel <info@address.com>' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    if (mail($to, $subject, $message, $header)) {
        $dataToSend = array(
            "result" => true,
            "message" => "Email sent successfully"
        );
    } else {
        $dataToSend = array(
            "result" => false,
            "message" => "Email Failed"
        );
    }
} else {
    $dataToSend = array(
        "result" => false,
        "message" => "Email address not found"
    );
}

$data = json_encode($dataToSend);
header('Content-Type: application/json');

echo $data;
