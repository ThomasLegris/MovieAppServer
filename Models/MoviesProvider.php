<?php
// - Configs
require 'vendor/autoload.php';
include('Api/ApiRequest.php');
?>

<?php
/// Routes to discover movies. Custom parameters to filter result.
class MoviesProvider
{
    public array $parameters;

    public function __construct(array $parameters) {
        $this->parameters = $parameters;
    }
    
    /// Setting up the request and the response to provide to client side.
    function discoverCall() {
        // First request movies to be fetched
        $response = fetchMovies($queries = $this->parameters, $path = "discover/movie");

        // Then build a response
        buildResponse(
            $response->getStatusCode(), 
            $response->getBody(), 
            'application/json');
    }

    /// Setting up the request and the response to provide to client side.
    function inTheaterCall() {
        // First request movies to be fetched
        $response = fetchMovies($queries = $this->parameters, $path = "movie/now_playing");

        // Then build a response
        buildResponse(
            $response->getStatusCode(), 
            $response->getBody(), 
            'application/json');
    }

    /// Setting up the request and the response to provide to client side.
    function upcomingCall() {
        // First request movies to be fetched
        $response = fetchMovies($queries = $this->parameters, $path = "movie/upcoming");

        // Then build a response
        buildResponse(
            $response->getStatusCode(), 
            $response->getBody(), 
            'application/json');
    }
}
?>
