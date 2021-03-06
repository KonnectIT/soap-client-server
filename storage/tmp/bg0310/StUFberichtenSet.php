<?php

class StUFberichtenSet
{

    /**
     * @var anyType $bericht
     */
    protected $bericht = null;

    /**
     * @param anyType $bericht
     */
    public function __construct($bericht)
    {
      $this->bericht = $bericht;
    }

    /**
     * @return anyType
     */
    public function getBericht()
    {
      return $this->bericht;
    }

    /**
     * @param anyType $bericht
     * @return StUF-berichtenSet
     */
    public function setBericht($bericht)
    {
      $this->bericht = $bericht;
      return $this;
    }

}
