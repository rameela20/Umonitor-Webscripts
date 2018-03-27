<?php
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://########.firebaseio.com/periodAssess';
// --- Use your token from Firebase here
$token = 'Your token here';
// --- Here is your parameter from the http GET
$bed = $_GET['b'];
$temp = $_GET['a'];
$satu = $_GET['s'];
// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
$firebasePath = '/';
/// --- Making calls
$fb = new fireBase($url, $token);
date_default_timezone_set("Asia/Colombo");
$d=date("Y-m-d h:i:sa");
$response = $fb->push($firebasePath, [
        'bedNo' => $bed,
        'temp' => $temp,
        'satu' => $satu,
        'time'  => $d
    ]);
sleep(2);

?>
