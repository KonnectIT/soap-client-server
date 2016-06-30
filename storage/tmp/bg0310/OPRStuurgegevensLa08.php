<?php

class OPRStuurgegevensLa08
{

    /**
     * @var BerichtcodeLa08 $berichtcode
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
     * @var Refnummer $crossRefnummer
     */
    protected $crossRefnummer = null;

    /**
     * @var EntiteittypeOPR $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param BerichtcodeLa08 $berichtcode
     * @param Systeem $zender
     * @param Systeem $ontvanger
     * @param Refnummer $referentienummer
     * @param Tijdstip $tijdstipBericht
     * @param Refnummer $crossRefnummer
     * @param EntiteittypeOPR $entiteittype
     */
    public function __construct($berichtcode, $zender, $ontvanger, $referentienummer, $tijdstipBericht, $crossRefnummer, $entiteittype)
    {
      $this->berichtcode = $berichtcode;
      $this->zender = $zender;
      $this->ontvanger = $ontvanger;
      $this->referentienummer = $referentienummer;
      $this->tijdstipBericht = $tijdstipBericht;
      $this->crossRefnummer = $crossRefnummer;
      $this->entiteittype = $entiteittype;
    }

    /**
     * @return BerichtcodeLa08
     */
    public function getBerichtcode()
    {
      return $this->berichtcode;
    }

    /**
     * @param BerichtcodeLa08 $berichtcode
     * @return OPR-StuurgegevensLa08
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
     * @return OPR-StuurgegevensLa08
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
     * @return OPR-StuurgegevensLa08
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
     * @return OPR-StuurgegevensLa08
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
     * @return OPR-StuurgegevensLa08
     */
    public function setTijdstipBericht($tijdstipBericht)
    {
      $this->tijdstipBericht = $tijdstipBericht;
      return $this;
    }

    /**
     * @return Refnummer
     */
    public function getCrossRefnummer()
    {
      return $this->crossRefnummer;
    }

    /**
     * @param Refnummer $crossRefnummer
     * @return OPR-StuurgegevensLa08
     */
    public function setCrossRefnummer($crossRefnummer)
    {
      $this->crossRefnummer = $crossRefnummer;
      return $this;
    }

    /**
     * @return EntiteittypeOPR
     */
    public function getEntiteittype()
    {
      return $this->entiteittype;
    }

    /**
     * @param EntiteittypeOPR $entiteittype
     * @return OPR-StuurgegevensLa08
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
