<?php
use GuzzleHttp\Client;
include('Api/ApiConstants.php');
include('Api/ApiResponse.php');
?>

<?php
function fetchMovies(array $queries, string $path)
    {
        $apiKey = API_KEY;
        $client = new Client(['http_errors' => false]);
        $response = $client->request(
            'GET',
            TDMB_BASE_URL . $path,
            [
                'query' => $queries,
                'headers' => [
                    'Authorization' => 'Bearer ' . BEARER_KEY,
                    'accept' => 'application/json',
                ],
            ]
        );
        return $response;
    }
?>