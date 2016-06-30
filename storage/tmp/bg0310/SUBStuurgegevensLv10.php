<?php

class SUBStuurgegevensLv10
{

    /**
     * @var BerichtcodeLv10 $berichtcode
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
     * @var EntiteittypeSUB $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param BerichtcodeLv10 $berichtcode
     * @param Systeem $zender
     * @param Systeem $ontvanger
     * @param Refnummer $referentienummer
     * @param Tijdstip $tijdstipBericht
     * @param EntiteittypeSUB $entiteittype
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
     * @return BerichtcodeLv10
     */
    public function getBerichtcode()
    {
      return $this->berichtcode;
    }

    /**
     * @param BerichtcodeLv10 $berichtcode
     * @return SUB-StuurgegevensLv10
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
     * @return SUB-StuurgegevensLv10
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
     * @return SUB-StuurgegevensLv10
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
     * @return SUB-StuurgegevensLv10
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
     * @return SUB-StuurgegevensLv10
     */
    public function setTijdstipBericht($tijdstipBericht)
    {
      $this->tijdstipBericht = $tijdstipBericht;
      return $this;
    }

    /**
     * @return EntiteittypeSUB
     */
    public function getEntiteittype()
    {
      return $this->entiteittype;
    }

    /**
     * @param EntiteittypeSUB $entiteittype
     * @return SUB-StuurgegevensLv10
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
