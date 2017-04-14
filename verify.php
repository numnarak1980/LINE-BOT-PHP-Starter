<?php
$access_token = 'xBTLthshsY8238wAb392pJvS8bJzrVEYQZy6u+6kQZsC5vNdmOv71T2uKdSR0UNcEImNnDj6naUmowIwz/bs3ol+/V5NBChc2VqjmgGjRvRtLQvntkV5jQzphmsyfI5coct3cl3/RR9pzoVer5KuOgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
