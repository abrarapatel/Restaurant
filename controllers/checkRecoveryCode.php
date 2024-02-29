<?php

include "../pages/include/connection.php";

$recoveryCode = $_POST['recoveryCode'];

$dataToSend = array(
    "result" => false,
    "message" => "There is some error"
);

$searchDataStr = "SELECT * FROM recover_pwd_request WHERE key_string = '$recoveryCode'";
$searchDataQry = mysqli_query($conn, $searchDataStr);
$searchDataArr = mysqli_fetch_all($searchDataQry, MYSQLI_ASSOC);

if (mysqli_num_rows($searchDataQry) > 0) {
    $expiryDateTime = new DateTime($searchDataArr[0]['expiry']);
    $currentDateTime = new DateTime();
    if ($currentDateTime > $expiryDateTime) {
        $dataToSend = array(
            "result" => false,
            "message" => "Link Expired"
        );
    } else {
        $dataToSend = array(
            "result" => true,
            "message" => "Data found",
            "accid" => $searchDataArr[0]['acc_id']
        );
    }
} else {
    $dataToSend = array(
        "result" => false,
        "message" => "There is some error"
    );
}

$data = json_encode($dataToSend);
header('Content-Type: application/json');

echo $data;
