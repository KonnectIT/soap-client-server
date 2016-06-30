<?php

namespace RRSVP\WeatherWS;

class GetCityWeatherByZIP
{

    /**
     * @var string $ZIP
     */
    protected $ZIP = null;

    /**
     * @param string $ZIP
     */
    public function __construct($ZIP)
    {
      $this->ZIP = $ZIP;
    }

    /**
     * @return string
     */
    public function getZIP()
    {
      return $this->ZIP;
    }

    /**
     * @param string $ZIP
     * @return \RRSVP\WeatherWS\GetCityWeatherByZIP
     */
    public function setZIP($ZIP)
    {
      $this->ZIP = $ZIP;
      return $this;
    }

}
