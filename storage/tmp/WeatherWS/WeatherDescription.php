<?php

namespace RRSVP\WeatherWS;

class WeatherDescription
{

    /**
     * @var int $WeatherID
     */
    protected $WeatherID = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $PictureURL
     */
    protected $PictureURL = null;

    /**
     * @param int $WeatherID
     */
    public function __construct($WeatherID)
    {
      $this->WeatherID = $WeatherID;
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
     * @return \RRSVP\WeatherWS\WeatherDescription
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
     * @return \RRSVP\WeatherWS\WeatherDescription
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getPictureURL()
    {
      return $this->PictureURL;
    }

    /**
     * @param string $PictureURL
     * @return \RRSVP\WeatherWS\WeatherDescription
     */
    public function setPictureURL($PictureURL)
    {
      $this->PictureURL = $PictureURL;
      return $this;
    }

}
