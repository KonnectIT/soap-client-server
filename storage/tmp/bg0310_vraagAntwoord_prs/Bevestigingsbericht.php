<?php

namespace RRSVP\Stuf;

class Bevestigingsbericht
{

    /**
     * @var Melding[] $melding
     */
    protected $melding = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Melding[]
     */
    public function getMelding()
    {
      return $this->melding;
    }

    /**
     * @param Melding[] $melding
     * @return \RRSVP\Stuf\Bevestigingsbericht
     */
    public function setMelding(array $melding = null)
    {
      $this->melding = $melding;
      return $this;
    }

}
