<?php

namespace RRSVP\Stuf;

class WOZStuurgegevensLa07
{

    /**
     * @var BerichtcodeLa07 $berichtcode
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
     * @var EntiteittypeWOZ $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param BerichtcodeLa07 $berichtcode
     * @param EntiteittypeWOZ $entiteittype
     */
    public function __construct($berichtcode, $entiteittype)
    {
      $this->berichtcode = $berichtcode;
      $this->entiteittype = $entiteittype;
    }

    /**
     * @return BerichtcodeLa07
     */
    public function getBerichtcode()
    {
      return $this->berichtcode;
    }

    /**
     * @param BerichtcodeLa07 $berichtcode
     * @return \RRSVP\Stuf\WOZ-StuurgegevensLa07
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
     * @return \RRSVP\Stuf\WOZ-StuurgegevensLa07
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
     * @return \RRSVP\Stuf\WOZ-StuurgegevensLa07
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
     * @return \RRSVP\Stuf\WOZ-StuurgegevensLa07
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
     * @return \RRSVP\Stuf\WOZ-StuurgegevensLa07
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
     * @return \RRSVP\Stuf\WOZ-StuurgegevensLa07
     */
    public function setCrossRefnummer($crossRefnummer)
    {
      $this->crossRefnummer = $crossRefnummer;
      return $this;
    }

    /**
     * @return EntiteittypeWOZ
     */
    public function getEntiteittype()
    {
      return $this->entiteittype;
    }

    /**
     * @param EntiteittypeWOZ $entiteittype
     * @return \RRSVP\Stuf\WOZ-StuurgegevensLa07
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
