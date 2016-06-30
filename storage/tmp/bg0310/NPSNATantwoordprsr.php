<?php

class NPSNATantwoordprsr
{

    /**
     * @var NATgerelateerde $gerelateerde
     */
    protected $gerelateerde = null;

    /**
     * @param NATgerelateerde $gerelateerde
     */
    public function __construct($gerelateerde)
    {
      $this->gerelateerde = $gerelateerde;
    }

    /**
     * @return NATgerelateerde
     */
    public function getGerelateerde()
    {
      return $this->gerelateerde;
    }

    /**
     * @param NATgerelateerde $gerelateerde
     * @return NPSNAT-antwoord-prs-r
     */
    public function setGerelateerde($gerelateerde)
    {
      $this->gerelateerde = $gerelateerde;
      return $this;
    }

}
