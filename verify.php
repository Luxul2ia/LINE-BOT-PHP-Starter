<?php
$access_token = 'V8rcjXnG85DSWviVZ/OFI/aolrY37Yc+/HtFrDHavdPvO18+STnDmQhR44Y3eySehRqVGSLIeGjsIXuPlceUIZoDLlIVd/nJ6DNP2wjVrr0QkwlgyPyNBvubD1cFL9s9xSPfBJVk0N8lXvAMR0C1mQdB04t89/1O/w1cDnyilFU=';
$proxy = 'http://fixie:7Q97GZEo7k6U6iI@velodrome.usefixie.com:80';
$proxyauth = 'http://fixie:7Q97GZEo7k6U6iI@velodrome.usefixie.com:80;
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;