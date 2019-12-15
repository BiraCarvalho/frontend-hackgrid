<?php
use GuzzleHttp\Client;

require "vendor\autoload.php";

$post = filter_list(INPUT_POST);

$parametros = [
    "Parameters" => $post 
];

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://hackagrid.herokuapp.com/hackathon/grid/v1/checkout',
    // You can set any number of default request options.
    'timeout'  => 2.0
]);

$client->request('POST', '/post', ['body' => 'foo']);

// Check if a header exists.
if ($response->hasHeader('Content-Length')) {
    echo "Checkout OK!";
}
