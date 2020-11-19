<?php
require('config.php');
//Here we will send specific user
$sql = "SELECT token FROM `devicesid`";
$title = $_GET["title"];
$body = $_GET["message"];
$resultt = $conn->prepare($sql);
$resultt->execute();
$token = array();
if ($resultt->rowCount() > 0) {
    while ($row = $resultt->fetch()) {
        $token[] = $row["token"];
    }
}
$loop = count($token);

for ($x = 0; $x <= $loop - 1; $x++) {
    $lan = $x + 1;
    $data = array("to" => "$token[$x]",
        "notification" => array("title" => "$title", "body" => "$body"));
    $data_string = json_encode($data);
    $headers = array('Authorization: key=' . API_ACCESS_KEY, 'Content-Type: application/json');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    $result = curl_exec($ch);
    curl_close($ch);
    $obj = json_decode($result);
    $status = $obj->success;

    $total = $total + 1;
    if ($status == 1) {
        $done = $done + 1;
    }
}
$failed = $total - $done;