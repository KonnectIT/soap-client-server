<?php

namespace RRSVP\WeatherWS;

class GetCityWeatherByZIPResponse
{

    /**
     * @var WeatherReturn $GetCityWeatherByZIPResult
     */
    protected $GetCityWeatherByZIPResult = null;

    /**
     * @param WeatherReturn $GetCityWeatherByZIPResult
     */
    public function __construct($GetCityWeatherByZIPResult)
    {
      $this->GetCityWeatherByZIPResult = $GetCityWeatherByZIPResult;
    }

    /**
     * @return WeatherReturn
     */
    public function getGetCityWeatherByZIPResult()
    {
      return $this->GetCityWeatherByZIPResult;
    }

    /**
     * @param WeatherReturn $GetCityWeatherByZIPResult
     * @return \RRSVP\WeatherWS\GetCityWeatherByZIPResponse
     */
    public function setGetCityWeatherByZIPResult($GetCityWeatherByZIPResult)
    {
      $this->GetCityWeatherByZIPResult = $GetCityWeatherByZIPResult;
      return $this;
    }

}
