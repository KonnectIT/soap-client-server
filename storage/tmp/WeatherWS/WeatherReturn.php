<?php

namespace RRSVP\WeatherWS;

class WeatherReturn
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
     * @var int $WeatherID
     */
    protected $WeatherID = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Temperature
     */
    protected $Temperature = null;

    /**
     * @var string $RelativeHumidity
     */
    protected $RelativeHumidity = null;

    /**
     * @var string $Wind
     */
    protected $Wind = null;

    /**
     * @var string $Pressure
     */
    protected $Pressure = null;

    /**
     * @var string $Visibility
     */
    protected $Visibility = null;

    /**
     * @var string $WindChill
     */
    protected $WindChill = null;

    /**
     * @var string $Remarks
     */
    protected $Remarks = null;

    /**
     * @param boolean $Success
     * @param int $WeatherID
     */
    public function __construct($Success, $WeatherID)
    {
      $this->Success = $Success;
      $this->WeatherID = $WeatherID;
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
     * @return \RRSVP\WeatherWS\WeatherReturn
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
     * @return \RRSVP\WeatherWS\WeatherReturn
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
     * @return \RRSVP\WeatherWS\WeatherReturn
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
     * @return \RRSVP\WeatherWS\WeatherReturn
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
     * @return \RRSVP\WeatherWS\WeatherReturn
     */
    public function setWeatherStationCity($WeatherStationCity)
    {
      $this->WeatherStationCity = $WeatherStationCity;
      return $this;
    }

    /**
     * @return int
     */
    public function getWeatherID()
    {
      return $this->WeatherID;
    }

    /**
     * @param int $WeatherID
     * @return \RRSVP\WeatherWS\WeatherReturn
     */
    public function setWeatherID($WeatherID)
    {
      $this->WeatherID = $WeatherID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \RRSVP\WeatherWS\WeatherReturn
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getTemperature()
    {
      return $this->Temperature;
    }

    /**
     * @param string $Temperature
     * @return \RRSVP\WeatherWS\WeatherReturn
     */
    public function setTemperature($Temperature)
    {
      $this->Temperature = $Temperature;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelativeHumidity()
    {
      return $this->RelativeHumidity;
    }

    /**
     * @param string $RelativeHumidity
     * @return \RRSVP\WeatherWS\WeatherReturn
     */
    public function setRelativeHumidity($RelativeHumidity)
    {
      $this->RelativeHumidity = $RelativeHumidity;
      return $this;
    }

    /**
     * @return string
     */
    public function getWind()
    {
      return $this->Wind;
    }

    /**
     * @param string $Wind
     * @return \RRSVP\WeatherWS\WeatherReturn
     */
    public function setWind($Wind)
    {
      $this->Wind = $Wind;
      return $this;
    }

    /**
     * @return string
     */
    public function getPressure()
    {
      return $this->Pressure;
    }

    /**
     * @param string $Pressure
     * @return \RRSVP\WeatherWS\WeatherReturn
     */
    public function setPressure($Pressure)
    {
      $this->Pressure = $Pressure;
      return $this;
    }

    /**
     * @return string
     */
    public function getVisibility()
    {
      return $this->Visibility;
    }

    /**
     * @param string $Visibility
     * @return \RRSVP\WeatherWS\WeatherReturn
     */
    public function setVisibility($Visibility)
    {
      $this->Visibility = $Visibility;
      return $this;
    }

    /**
     * @return string
     */
    public function getWindChill()
    {
      return $this->WindChill;
    }

    /**
     * @param string $WindChill
     * @return \RRSVP\WeatherWS\WeatherReturn
     */
    public function setWindChill($WindChill)
    {
      $this->WindChill = $WindChill;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param string $Remarks
     * @return \RRSVP\WeatherWS\WeatherReturn
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
      return $this;
    }

}
