<?php
// - Configs
use GuzzleHttp\Client;
require 'vendor/autoload.php';
include('Api/ApiResponse.php');
include('Api/ApiConstants.php');
?>

<?php
// - Main
/// Fetch movies genres.
$response = fetchMovieGenres();
/// Sets up the http response.
buildResponse(
    $response->getStatusCode(), 
    $response->getBody(), 
    'application/json');
?>

<?php

function fetchMovieGenres()
{
    $apiKey = API_KEY;
    $client = new Client();
    $response = $client->request(
        'GET',
        TDMB_BASE_URL . 'genre/movie/list',
        [
            'headers' => [
                'Authorization' => 'Bearer ' . BEARER_KEY,
                'accept' => 'application/json',
                'allow_redirects' => false
            ],
        ]
    );
    return $response;
}