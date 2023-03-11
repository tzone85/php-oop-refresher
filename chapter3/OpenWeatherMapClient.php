<?php

namespace chapter3;

class OpenWeatherMapClient implements WeatherAPIClientInterface
{

    public function getForecast(string $city)
    {
        // get lat and long of the city

        // call dark sky api using lat / long

        // return some kind of response

        return 'It is raining in ' . $city;
    }
}