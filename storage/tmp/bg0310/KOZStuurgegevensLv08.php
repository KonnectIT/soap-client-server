<?php

class KOZStuurgegevensLv08
{

    /**
     * @var BerichtcodeLv08 $berichtcode
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
     * @var EntiteittypeKOZ $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param BerichtcodeLv08 $berichtcode
     * @param Systeem $zender
     * @param Systeem $ontvanger
     * @param Refnummer $referentienummer
     * @param Tijdstip $tijdstipBericht
     * @param EntiteittypeKOZ $entiteittype
     */
    public function __construct($berichtcode, $zender, $ontvanger, $referentienummer, $tijdstipBericht, $entiteittype)
    {
      $this->berichtcode = $berichtcode;
      $this->zender = $zender;
      $this->ontvanger = $ontvanger;
      $this->referentienummer = $referentienummer;
      $this->tijdstipBericht = $tijdstipBericht;
      $this->entiteittype = $entiteittype;
    }

    /**
     * @return BerichtcodeLv08
     */
    public function getBerichtcode()
    {
      return $this->berichtcode;
    }

    /**
     * @param BerichtcodeLv08 $berichtcode
     * @return KOZ-StuurgegevensLv08
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
     * @return KOZ-StuurgegevensLv08
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
     * @return KOZ-StuurgegevensLv08
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
     * @return KOZ-StuurgegevensLv08
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
     * @return KOZ-StuurgegevensLv08
     */
    public function setTijdstipBericht($tijdstipBericht)
    {
      $this->tijdstipBericht = $tijdstipBericht;
      return $this;
    }

    /**
     * @return EntiteittypeKOZ
     */
    public function getEntiteittype()
    {
      return $this->entiteittype;
    }

    /**
     * @param EntiteittypeKOZ $entiteittype
     * @return KOZ-StuurgegevensLv08
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
