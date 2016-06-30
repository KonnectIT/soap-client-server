<?php

namespace RRSVP\Stuf;

class ParametersLk02WInSx02
{

    /**
     * @var MutatiesoortWijzigingInSynchronisatie $mutatiesoort
     */
    protected $mutatiesoort = null;

    /**
     * @param MutatiesoortWijzigingInSynchronisatie $mutatiesoort
     */
    public function __construct($mutatiesoort)
    {
      $this->mutatiesoort = $mutatiesoort;
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
     * @return \RRSVP\Stuf\ParametersLk02WInSx02
     */
    public function setMutatiesoort($mutatiesoort)
    {
      $this->mutatiesoort = $mutatiesoort;
      return $this;
    }

}
