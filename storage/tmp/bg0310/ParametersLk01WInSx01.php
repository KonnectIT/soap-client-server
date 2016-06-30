<?php

class ParametersLk01WInSx01
{

    /**
     * @var MutatiesoortWijzigingInSynchronisatie $mutatiesoort
     */
    protected $mutatiesoort = null;

    /**
     * @var IndicatorOvername $indicatorOvername
     */
    protected $indicatorOvername = null;

    /**
     * @param MutatiesoortWijzigingInSynchronisatie $mutatiesoort
     * @param IndicatorOvername $indicatorOvername
     */
    public function __construct($mutatiesoort, $indicatorOvername)
    {
      $this->mutatiesoort = $mutatiesoort;
      $this->indicatorOvername = $indicatorOvername;
    }

    /**
     * @return MutatiesoortWijzigingInSynchronisatie
     */
    public function getMutatiesoort()
    {
      return $this->mutatiesoort;
    }

    /**
     * @param MutatiesoortWijzigingInSynchronisatie $mutatiesoort
     * @return ParametersLk01WInSx01
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
     * @return ParametersLk01WInSx01
     */
    public function setIndicatorOvername($indicatorOvername)
    {
      $this->indicatorOvername = $indicatorOvername;
      return $this;
    }

}
