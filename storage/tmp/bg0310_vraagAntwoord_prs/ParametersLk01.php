<?php

namespace RRSVP\Stuf;

class ParametersLk01
{

    /**
     * @var Mutatiesoort $mutatiesoort
     */
    protected $mutatiesoort = null;

    /**
     * @var IndicatorOvername $indicatorOvername
     */
    protected $indicatorOvername = null;

    /**
     * @param Mutatiesoort $mutatiesoort
     * @param IndicatorOvername $indicatorOvername
     */
    public function __construct($mutatiesoort, $indicatorOvername)
    {
      $this->mutatiesoort = $mutatiesoort;
      $this->indicatorOvername = $indicatorOvername;
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
     * @return \RRSVP\Stuf\ParametersLk01
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
     * @return \RRSVP\Stuf\ParametersLk01
     */
    public function setIndicatorOvername($indicatorOvername)
    {
      $this->indicatorOvername = $indicatorOvername;
      return $this;
    }

}
