<?php

include "../pages/include/connection.php";

$email = $_POST['email'];
$password = $_POST['pwd'];

$dataToSend = array(
    "result" => false,
    "message" => "There is some error"
);

$searchDataStr = "SELECT pwd,id FROM account WHERE email = '$email'";
$searchDataQry = mysqli_query($conn, $searchDataStr);
$searchDataArr = mysqli_fetch_all($searchDataQry, MYSQLI_ASSOC);

if (mysqli_num_rows($searchDataQry) > 0) {
    $hashed_password = $searchDataArr[0]["pwd"];
    if (password_verify($password, $hashed_password)) {
        $selectUserDataStr = "SELECT * FROM account WHERE id =" . $searchDataArr[0]["id"];
        $selectUserDataQry = mysqli_query($conn, $selectUserDataStr);
        $selectUserDataRes = mysqli_fetch_all($selectUserDataQry, MYSQLI_ASSOC);

        $accid = $selectUserDataRes[0]['id'];
        $fname = $selectUserDataRes[0]['fname'];
        $lname = $selectUserDataRes[0]['lname'];
        $email = $selectUserDataRes[0]['email'];

        session_start();

        $_SESSION['user_accid'] = $accid;
        $_SESSION['user_fname'] = $fname;
        $_SESSION['user_lname'] = $lname;
        $_SESSION['user_email'] = $email;

        $dataToSend = array(
            "result" => true,
            "message" => "Login Successfully"
        );
    } else {
        $dataToSend = array(
            "result" => false,
            "message" => "Wrong Email Id or Password"
        );
    }
} else {
    $dataToSend = array(
        "result" => false,
        "message" => "Wrong Email Id or Password"
    );
}

$data = json_encode($dataToSend);
header('Content-Type: application/json');

echo $data;
