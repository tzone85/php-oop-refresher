<?php

namespace chapter3;
require_once 'WeatherAPIClientInterface.php';
interface WeatherAPIClientInterface
{
    public function getForecast(string $city);
}