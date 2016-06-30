<?php

namespace RRSVP\Stuf;

class Bv04Bericht
{

    /**
     * @var stuurgegevens $stuurgegevens
     */
    protected $stuurgegevens = null;

    /**
     * @param stuurgegevens $stuurgegevens
     */
    public function __construct($stuurgegevens)
    {
      $this->stuurgegevens = $stuurgegevens;
    }

    /**
     * @return stuurgegevens
     */
    public function getStuurgegevens()
    {
      return $this->stuurgegevens;
    }

    /**
     * @param stuurgegevens $stuurgegevens
     * @return \RRSVP\Stuf\Bv04Bericht
     */
    public function setStuurgegevens($stuurgegevens)
    {
      $this->stuurgegevens = $stuurgegevens;
      return $this;
    }

}
