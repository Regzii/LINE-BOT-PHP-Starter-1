<?php
$access_token = 'gzp7y9/m+ynn/9WRUn+UuQ5ywiXfHzyAukULBN6APxF40hsKDB6ORQK5y58Hz46yPcNquDy7Ttd3el4OKGu2ecFaSiDwyDKb6PTW7/ib2AbRxdm5ingH48ovscE6a3ULM2F9mdDLupcjUdpy0US3RAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;