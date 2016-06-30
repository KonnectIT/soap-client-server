<?php

namespace RRSVP\WeatherWS;

class GetWeatherInformationResponse
{

    /**
     * @var ArrayOfWeatherDescription $GetWeatherInformationResult
     */
    protected $GetWeatherInformationResult = null;

    /**
     * @param ArrayOfWeatherDescription $GetWeatherInformationResult
     */
    public function __construct($GetWeatherInformationResult)
    {
      $this->GetWeatherInformationResult = $GetWeatherInformationResult;
    }

    /**
     * @return ArrayOfWeatherDescription
     */
    public function getGetWeatherInformationResult()
    {
      return $this->GetWeatherInformationResult;
    }

    /**
     * @param ArrayOfWeatherDescription $GetWeatherInformationResult
     * @return \RRSVP\WeatherWS\GetWeatherInformationResponse
     */
    public function setGetWeatherInformationResult($GetWeatherInformationResult)
    {
      $this->GetWeatherInformationResult = $GetWeatherInformationResult;
      return $this;
    }

}
