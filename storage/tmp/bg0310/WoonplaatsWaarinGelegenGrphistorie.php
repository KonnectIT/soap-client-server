<?php

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
     * @return WoonplaatsWaarinGelegenGrp-historie
     */
    public function setWplidentificatie($wplidentificatie)
    {
      $this->wplidentificatie = $wplidentificatie;
      return $this;
    }

}
