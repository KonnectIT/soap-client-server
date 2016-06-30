<?php

class KOZStuurgegevensLa05
{

    /**
     * @var BerichtcodeLa05 $berichtcode
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
     * @var EntiteittypeKOZ $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param BerichtcodeLa05 $berichtcode
     * @param EntiteittypeKOZ $entiteittype
     */
    public function __construct($berichtcode, $entiteittype)
    {
      $this->berichtcode = $berichtcode;
      $this->entiteittype = $entiteittype;
    }

    /**
     * @return BerichtcodeLa05
     */
    public function getBerichtcode()
    {
      return $this->berichtcode;
    }

    /**
     * @param BerichtcodeLa05 $berichtcode
     * @return KOZ-StuurgegevensLa05
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
     * @return KOZ-StuurgegevensLa05
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
     * @return KOZ-StuurgegevensLa05
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
     * @return KOZ-StuurgegevensLa05
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
     * @return KOZ-StuurgegevensLa05
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
     * @return KOZ-StuurgegevensLa05
     */
    public function setCrossRefnummer($crossRefnummer)
    {
      $this->crossRefnummer = $crossRefnummer;
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
     * @return KOZ-StuurgegevensLa05
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
