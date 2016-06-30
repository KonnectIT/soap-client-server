<?php

class ParametersLk02
{

    /**
     * @var Mutatiesoort $mutatiesoort
     */
    protected $mutatiesoort = null;

    /**
     * @param Mutatiesoort $mutatiesoort
     */
    public function __construct($mutatiesoort)
    {
      $this->mutatiesoort = $mutatiesoort;
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
     * @return ParametersLk02
     */
    public function setMutatiesoort($mutatiesoort)
    {
      $this->mutatiesoort = $mutatiesoort;
      return $this;
    }

}
