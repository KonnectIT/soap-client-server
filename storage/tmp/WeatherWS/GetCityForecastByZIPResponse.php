<?php

namespace RRSVP\WeatherWS;

class GetCityForecastByZIPResponse
{

    /**
     * @var ForecastReturn $GetCityForecastByZIPResult
     */
    protected $GetCityForecastByZIPResult = null;

    /**
     * @param ForecastReturn $GetCityForecastByZIPResult
     */
    public function __construct($GetCityForecastByZIPResult)
    {
      $this->GetCityForecastByZIPResult = $GetCityForecastByZIPResult;
    }

    /**
     * @return ForecastReturn
     */
    public function getGetCityForecastByZIPResult()
    {
      return $this->GetCityForecastByZIPResult;
    }

    /**
     * @param ForecastReturn $GetCityForecastByZIPResult
     * @return \RRSVP\WeatherWS\GetCityForecastByZIPResponse
     */
    public function setGetCityForecastByZIPResult($GetCityForecastByZIPResult)
    {
      $this->GetCityForecastByZIPResult = $GetCityForecastByZIPResult;
      return $this;
    }

}
