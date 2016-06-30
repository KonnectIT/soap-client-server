<?php

namespace RRSVP\WeatherWS;

class temp
{

    /**
     * @var string $MorningLow
     */
    protected $MorningLow = null;

    /**
     * @var string $DaytimeHigh
     */
    protected $DaytimeHigh = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMorningLow()
    {
      return $this->MorningLow;
    }

    /**
     * @param string $MorningLow
     * @return \RRSVP\WeatherWS\temp
     */
    public function setMorningLow($MorningLow)
    {
      $this->MorningLow = $MorningLow;
      return $this;
    }

    /**
     * @return string
     */
    public function getDaytimeHigh()
    {
      return $this->DaytimeHigh;
    }

    /**
     * @param string $DaytimeHigh
     * @return \RRSVP\WeatherWS\temp
     */
    public function setDaytimeHigh($DaytimeHigh)
    {
      $this->DaytimeHigh = $DaytimeHigh;
      return $this;
    }

}
