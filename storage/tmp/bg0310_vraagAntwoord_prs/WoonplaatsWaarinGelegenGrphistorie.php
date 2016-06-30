<?php

namespace RRSVP\Stuf;

class WoonplaatsWaarinGelegenGrphistorie
{

    /**
     * @var WoonplaatsCoderinge $wplidentificatie
     */
    protected $wplidentificatie = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WoonplaatsCoderinge
     */
    public function getWplidentificatie()
    {
      return $this->wplidentificatie;
    }

    /**
     * @param WoonplaatsCoderinge $wplidentificatie
     * @return \RRSVP\Stuf\WoonplaatsWaarinGelegenGrp-historie
     */
    public function setWplidentificatie($wplidentificatie)
    {
      $this->wplidentificatie = $wplidentificatie;
      return $this;
    }

}
