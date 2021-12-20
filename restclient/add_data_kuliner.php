<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('POST','/api/kuliner',[ //post
    'json' => [
        'nama' => $_POST['nama'], //nama
        'lokasi' => $_POST['lokasi'], //lokasi
        'harga' => $_POST['harga']  //lokasi
    ]
]);

$body = $response->getBody();
header('location:kuliner.php') 

?>