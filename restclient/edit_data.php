<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$id = $_GET['id'];
$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('PUT','/api/wisata',[ //post
    'json' => [
        'id' => $id,
        'nama'  => $_POST['nama'], //nama
        'lokasi' => $_POST['lokasi'], //lokasi
        'harga' => $_POST['harga']  //lokasi
    ]
]);

$body = $response->getBody();
header('location:index.php') 

?>