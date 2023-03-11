<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interfaces</title>
</head>
<body>
<?php

use chapter3\DarkSkyApiClient;
use chapter3\OpenWeatherMapClient;

require 'DarkSkyApiClient.php';
require 'OpenWeatherMapClient.php';

    $weatherApiClient = new DarkSkyApiClient();
    $forecast = $weatherApiClient->getForecast('Cape Town');
?>

<h1>Weather App</h1>
<p><?php echo $forecast ?></p> <br/>
</body>
</html>