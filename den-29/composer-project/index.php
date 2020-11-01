<?php

require_once 'vendor/autoload.php';

$client = new GuzzleHttp\Client();
 
$res = $client->request('GET', 'https://www.imdb.com/title/tt5848272', [
    'verify' => false
]);
 
echo $res->getBody();