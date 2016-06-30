<?php

class ParametersKennisgeving
{

    /**
     * @var Mutatiesoort $mutatiesoort
     */
    protected $mutatiesoort = null;

    /**
     * @var IndicatorOvername $indicatorOvername
     */
    protected $indicatorOvername = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Mutatiesoort
     */
    public function getMutatiesoort()
    {
      return $this->mutatiesoort;
    }

    /**
     * @param Mutatiesoort $mutatiesoort
     * @return ParametersKennisgeving
     */
    public function setMutatiesoort($mutatiesoort)
    {
      $this->mutatiesoort = $mutatiesoort;
      return $this;
    }

    /**
     * @return IndicatorOvername
     */
    public function getIndicatorOvername()
    {
      return $this->indicatorOvername;
    }

    /**
     * @param IndicatorOvername $indicatorOvername
     * @return ParametersKennisgeving
     */
    public function setIndicatorOvername($indicatorOvername)
    {
      $this->indicatorOvername = $indicatorOvername;
      return $this;
    }

}
