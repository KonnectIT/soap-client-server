<?php

namespace RRSVP\Stuf;

class Bv01Bericht
{

    /**
     * @var stuurgegevens $stuurgegevens
     */
    protected $stuurgegevens = null;

    /**
     * @var Melding $melding
     */
    protected $melding = null;

    /**
     * @param stuurgegevens $stuurgegevens
     * @param Melding $melding
     */
    public function __construct($stuurgegevens, $melding)
    {
      $this->stuurgegevens = $stuurgegevens;
      $this->melding = $melding;
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
     * @return \RRSVP\Stuf\Bv01Bericht
     */
    public function setStuurgegevens($stuurgegevens)
    {
      $this->stuurgegevens = $stuurgegevens;
      return $this;
    }

    /**
     * @return Melding
     */
    public function getMelding()
    {
      return $this->melding;
    }

    /**
     * @param Melding $melding
     * @return \RRSVP\Stuf\Bv01Bericht
     */
    public function setMelding($melding)
    {
      $this->melding = $melding;
      return $this;
    }

}
