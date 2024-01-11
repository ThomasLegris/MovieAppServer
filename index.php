<?php require 'vendor/autoload.php'; ?>

<?php
// Variable to get all request received by server
$full_url = $_SERVER['REQUEST_URI'];
// Split the url between base url and queries and take only the base path.
$url_without_queries = explode('?', $full_url, 10)[0];

// Check if the requested route exists in the array
switch ($url_without_queries) {
     case '/movies/popular':
        require __DIR__ . "/Routes/" . "popular_routes.php";
        break;
    case '/movies/rated':
        require __DIR__ . "/Routes/" . "rated_routes.php";
        break;
    case '/movies/theater': 
        require __DIR__ . "/Routes/" . "now_theater_routes.php";
        break;
    case  '/movies/upcoming':
        require __DIR__ . "/Routes/" . "upcoming_routes.php";
        break;
    case '/genres':
        require __DIR__ . "/Routes/" . "genres_routes.php";
        break;
    default: break;
}
?>
