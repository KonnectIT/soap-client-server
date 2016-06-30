<?php

namespace RRSVP\WeatherWS;

class POP
{

    /**
     * @var string $Nighttime
     */
    protected $Nighttime = null;

    /**
     * @var string $Daytime
     */
    protected $Daytime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getNighttime()
    {
      return $this->Nighttime;
    }

    /**
     * @param string $Nighttime
     * @return \RRSVP\WeatherWS\POP
     */
    public function setNighttime($Nighttime)
    {
      $this->Nighttime = $Nighttime;
      return $this;
    }

    /**
     * @return string
     */
    public function getDaytime()
    {
      return $this->Daytime;
    }

    /**
     * @param string $Daytime
     * @return \RRSVP\WeatherWS\POP
     */
    public function setDaytime($Daytime)
    {
      $this->Daytime = $Daytime;
      return $this;
    }

}
