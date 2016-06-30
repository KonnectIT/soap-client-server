<?php


 function autoload_82005955aa3ec13525ef938ad5d877e3($class)
{
    $classes = array(
        'RRSVP\WeatherWS\Weather' => __DIR__ .'/Weather.php',
        'RRSVP\WeatherWS\GetWeatherInformation' => __DIR__ .'/GetWeatherInformation.php',
        'RRSVP\WeatherWS\GetWeatherInformationResponse' => __DIR__ .'/GetWeatherInformationResponse.php',
        'RRSVP\WeatherWS\ArrayOfWeatherDescription' => __DIR__ .'/ArrayOfWeatherDescription.php',
        'RRSVP\WeatherWS\WeatherDescription' => __DIR__ .'/WeatherDescription.php',
        'RRSVP\WeatherWS\GetCityForecastByZIP' => __DIR__ .'/GetCityForecastByZIP.php',
        'RRSVP\WeatherWS\GetCityForecastByZIPResponse' => __DIR__ .'/GetCityForecastByZIPResponse.php',
        'RRSVP\WeatherWS\ForecastReturn' => __DIR__ .'/ForecastReturn.php',
        'RRSVP\WeatherWS\ArrayOfForecast' => __DIR__ .'/ArrayOfForecast.php',
        'RRSVP\WeatherWS\Forecast' => __DIR__ .'/Forecast.php',
        'RRSVP\WeatherWS\temp' => __DIR__ .'/temp.php',
        'RRSVP\WeatherWS\POP' => __DIR__ .'/POP.php',
        'RRSVP\WeatherWS\GetCityWeatherByZIP' => __DIR__ .'/GetCityWeatherByZIP.php',
        'RRSVP\WeatherWS\GetCityWeatherByZIPResponse' => __DIR__ .'/GetCityWeatherByZIPResponse.php',
        'RRSVP\WeatherWS\WeatherReturn' => __DIR__ .'/WeatherReturn.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_82005955aa3ec13525ef938ad5d877e3');

// Do nothing. The rest is just leftovers from the code generation.
{
}
