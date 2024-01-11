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
$params[$outQueryKey::SORT_BY] = $outQueryValue::BY_AVERAGE;

// add release date .lte parametersX
if (isset($queries[$inQueryKey::BEGIN_RELEASE_DATE])) {
     $params[$outQueryKey::BEGIN_RELEASE_DATE] = $queries[$inQueryKey::BEGIN_RELEASE_DATE];
}
// add release date .gte parametersX
if (isset($queries[$inQueryKey::END_RELEASE_DATE])) {
    $params[$outQueryKey::END_RELEASE_DATE] = $queries[$inQueryKey::END_RELEASE_DATE];
}
if (isset($queries[$inQueryKey::ORIGIN_COUNTRY])) {
    $params[$outQueryKey::MIN_VOTE_COUNT] = 150;
    $params[$outQueryKey::ORIGIN_COUNTRY] = $queries[$inQueryKey::ORIGIN_COUNTRY];
} else {
    $params[$outQueryKey::MIN_VOTE_COUNT] = 1000;
}

// Create discover object en setup api call.
$ranked = new MoviesProvider($parameters = $params);
$ranked->discoverCall();

?>