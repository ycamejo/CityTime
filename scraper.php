<?php

$city= str_replace(" ", "",filter_input(INPUT_GET, "city", FILTER_UNSAFE_RAW)); //FILTER_SANITIZE_CITY

$content= file_get_contents("http://www.weather-forecast.com/locations/$city/forecasts/latest");

$pattern='/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s';
preg_match($pattern, $content, $matches);
echo $matches[1];