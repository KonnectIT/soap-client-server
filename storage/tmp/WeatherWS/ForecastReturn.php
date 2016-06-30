<?php

namespace RRSVP\WeatherWS;

class ForecastReturn
{

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var string $ResponseText
     */
    protected $ResponseText = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $WeatherStationCity
     */
    protected $WeatherStationCity = null;

    /**
     * @var ArrayOfForecast $ForecastResult
     */
    protected $ForecastResult = null;

    /**
     * @param boolean $Success
     */
    public function __construct($Success)
    {
      $this->Success = $Success;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return \RRSVP\WeatherWS\ForecastReturn
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseText()
    {
      return $this->ResponseText;
    }

    /**
     * @param string $ResponseText
     * @return \RRSVP\WeatherWS\ForecastReturn
     */
    public function setResponseText($ResponseText)
    {
      $this->ResponseText = $ResponseText;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \RRSVP\WeatherWS\ForecastReturn
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \RRSVP\WeatherWS\ForecastReturn
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeatherStationCity()
    {
      return $this->WeatherStationCity;
    }

    /**
     * @param string $WeatherStationCity
     * @return \RRSVP\WeatherWS\ForecastReturn
     */
    public function setWeatherStationCity($WeatherStationCity)
    {
      $this->WeatherStationCity = $WeatherStationCity;
      return $this;
    }

    /**
     * @return ArrayOfForecast
     */
    public function getForecastResult()
    {
      return $this->ForecastResult;
    }

    /**
     * @param ArrayOfForecast $ForecastResult
     * @return \RRSVP\WeatherWS\ForecastReturn
     */
    public function setForecastResult($ForecastResult)
    {
      $this->ForecastResult = $ForecastResult;
      return $this;
    }

}
