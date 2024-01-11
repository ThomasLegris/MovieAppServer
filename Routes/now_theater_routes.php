<?php
// - Configs
require 'vendor/autoload.php';
include('Models/MoviesProvider.php');
include('Models/QueryConstants.php');
?>

<?php
$inQueryKey = new InputQueryKeys();
$outQueryKey = new OutputQueryKeys();
$outQueryValue = new OutputQueryValues();

// Create $queries property with only the queries part of uri.
parse_str($_SERVER['QUERY_STRING'], $queries); 

$params = [$outQueryKey::LANGUAGE => $outQueryValue::FR_LANG];
$ranked = new MoviesProvider($parameters = $params);
$ranked->inTheaterCall();
?>