<?php

class ZKRStuurgegevensLa02
{

    /**
     * @var BerichtcodeLa02 $berichtcode
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
     * @var EntiteittypeZKR $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param BerichtcodeLa02 $berichtcode
     * @param Systeem $zender
     * @param Systeem $ontvanger
     * @param Refnummer $referentienummer
     * @param Tijdstip $tijdstipBericht
     * @param Refnummer $crossRefnummer
     * @param EntiteittypeZKR $entiteittype
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
     * @return BerichtcodeLa02
     */
    public function getBerichtcode()
    {
      return $this->berichtcode;
    }

    /**
     * @param BerichtcodeLa02 $berichtcode
     * @return ZKR-StuurgegevensLa02
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
     * @return ZKR-StuurgegevensLa02
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
     * @return ZKR-StuurgegevensLa02
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
     * @return ZKR-StuurgegevensLa02
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
     * @return ZKR-StuurgegevensLa02
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
     * @return ZKR-StuurgegevensLa02
     */
    public function setCrossRefnummer($crossRefnummer)
    {
      $this->crossRefnummer = $crossRefnummer;
      return $this;
    }

    /**
     * @return EntiteittypeZKR
     */
    public function getEntiteittype()
    {
      return $this->entiteittype;
    }

    /**
     * @param EntiteittypeZKR $entiteittype
     * @return ZKR-StuurgegevensLa02
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
