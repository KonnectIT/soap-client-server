<?php

class SBDStuurgegevensLv03
{

    /**
     * @var BerichtcodeLv03 $berichtcode
     */
    protected $berichtcode = null;

    /**
     * @var Systeem $zender
     */
    protected $zender = null;

    /**
     * @var Systeem $ontvanger
     */
    protected $ontvanger = null;

    /**
     * @var Refnummer $referentienummer
     */
    protected $referentienummer = null;

    /**
     * @var Tijdstip $tijdstipBericht
     */
    protected $tijdstipBericht = null;

    /**
     * @var EntiteittypeSBD $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param BerichtcodeLv03 $berichtcode
     * @param EntiteittypeSBD $entiteittype
     */
    public function __construct($berichtcode, $entiteittype)
    {
      $this->berichtcode = $berichtcode;
      $this->entiteittype = $entiteittype;
    }

    /**
     * @return BerichtcodeLv03
     */
    public function getBerichtcode()
    {
      return $this->berichtcode;
    }

    /**
     * @param BerichtcodeLv03 $berichtcode
     * @return SBD-StuurgegevensLv03
     */
    public function setBerichtcode($berichtcode)
    {
      $this->berichtcode = $berichtcode;
      return $this;
    }

    /**
     * @return Systeem
     */
    public function getZender()
    {
      return $this->zender;
    }

    /**
     * @param Systeem $zender
     * @return SBD-StuurgegevensLv03
     */
    public function setZender($zender)
    {
      $this->zender = $zender;
      return $this;
    }

    /**
     * @return Systeem
     */
    public function getOntvanger()
    {
      return $this->ontvanger;
    }

    /**
     * @param Systeem $ontvanger
     * @return SBD-StuurgegevensLv03
     */
    public function setOntvanger($ontvanger)
    {
      $this->ontvanger = $ontvanger;
      return $this;
    }

    /**
     * @return Refnummer
     */
    public function getReferentienummer()
    {
      return $this->referentienummer;
    }

    /**
     * @param Refnummer $referentienummer
     * @return SBD-StuurgegevensLv03
     */
    public function setReferentienummer($referentienummer)
    {
      $this->referentienummer = $referentienummer;
      return $this;
    }

    /**
     * @return Tijdstip
     */
    public function getTijdstipBericht()
    {
      return $this->tijdstipBericht;
    }

    /**
     * @param Tijdstip $tijdstipBericht
     * @return SBD-StuurgegevensLv03
     */
    public function setTijdstipBericht($tijdstipBericht)
    {
      $this->tijdstipBericht = $tijdstipBericht;
      return $this;
    }

    /**
     * @return EntiteittypeSBD
     */
    public function getEntiteittype()
    {
      return $this->entiteittype;
    }

    /**
     * @param EntiteittypeSBD $entiteittype
     * @return SBD-StuurgegevensLv03
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
