<?php
$url = "http://api.devzila.com/collector.php";
$data = ['name'=> $_POST['name'],"mobile_number"=>$_POST["mobile_number"],"message"=> $_POST['message']];
// use key 'http' even if you send the request to https://...
$options = [
    'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data),
    ],
];


$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

header('Location: /index.php');
if ($result === false) {
    
}

var_dump($result);

?>