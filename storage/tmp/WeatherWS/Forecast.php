<?php

namespace RRSVP\WeatherWS;

class Forecast
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var int $WeatherID
     */
    protected $WeatherID = null;

    /**
     * @var string $Desciption
     */
    protected $Desciption = null;

    /**
     * @var temp $Temperatures
     */
    protected $Temperatures = null;

    /**
     * @var POP $ProbabilityOfPrecipiation
     */
    protected $ProbabilityOfPrecipiation = null;

    /**
     * @param \DateTime $Date
     * @param int $WeatherID
     * @param temp $Temperatures
     * @param POP $ProbabilityOfPrecipiation
     */
    public function __construct(\DateTime $Date, $WeatherID, $Temperatures, $ProbabilityOfPrecipiation)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->WeatherID = $WeatherID;
      $this->Temperatures = $Temperatures;
      $this->ProbabilityOfPrecipiation = $ProbabilityOfPrecipiation;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \RRSVP\WeatherWS\Forecast
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
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
     * @return \RRSVP\WeatherWS\Forecast
     */
    public function setWeatherID($WeatherID)
    {
      $this->WeatherID = $WeatherID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDesciption()
    {
      return $this->Desciption;
    }

    /**
     * @param string $Desciption
     * @return \RRSVP\WeatherWS\Forecast
     */
    public function setDesciption($Desciption)
    {
      $this->Desciption = $Desciption;
      return $this;
    }

    /**
     * @return temp
     */
    public function getTemperatures()
    {
      return $this->Temperatures;
    }

    /**
     * @param temp $Temperatures
     * @return \RRSVP\WeatherWS\Forecast
     */
    public function setTemperatures($Temperatures)
    {
      $this->Temperatures = $Temperatures;
      return $this;
    }

    /**
     * @return POP
     */
    public function getProbabilityOfPrecipiation()
    {
      return $this->ProbabilityOfPrecipiation;
    }

    /**
     * @param POP $ProbabilityOfPrecipiation
     * @return \RRSVP\WeatherWS\Forecast
     */
    public function setProbabilityOfPrecipiation($ProbabilityOfPrecipiation)
    {
      $this->ProbabilityOfPrecipiation = $ProbabilityOfPrecipiation;
      return $this;
    }

}
