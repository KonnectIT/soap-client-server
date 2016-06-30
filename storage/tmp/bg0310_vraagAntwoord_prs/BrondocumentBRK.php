<?php

namespace RRSVP\Stuf;

class BrondocumentBRK
{

    /**
     * @var DocumentNummeringe $identificatie
     */
    protected $identificatie = null;

    /**
     * @var boolean $metagegeven
     */
    protected $metagegeven = null;

    /**
     * @param boolean $metagegeven
     */
    public function __construct($metagegeven)
    {
      $this->metagegeven = $metagegeven;
    }

    /**
     * @return DocumentNummeringe
     */
    public function getIdentificatie()
    {
      return $this->identificatie;
    }

    /**
     * @param DocumentNummeringe $identificatie
     * @return \RRSVP\Stuf\BrondocumentBRK
     */
    public function setIdentificatie($identificatie)
    {
      $this->identificatie = $identificatie;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMetagegeven()
    {
      return $this->metagegeven;
    }

    /**
     * @param boolean $metagegeven
     * @return \RRSVP\Stuf\BrondocumentBRK
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

}
