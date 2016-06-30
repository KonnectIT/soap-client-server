<?php

namespace RRSVP\Stuf;

class stuurgegevensLv01prsVestiging
{

    /**
     * @var BerichtcodeLv01 $berichtcode
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
     * @var EntiteittypeVES $entiteittype
     */
    protected $entiteittype = null;

    /**
     * @param BerichtcodeLv01 $berichtcode
     * @param Systeem $zender
     * @param Systeem $ontvanger
     * @param Tijdstip $tijdstipBericht
     * @param EntiteittypeVES $entiteittype
     */
    public function __construct($berichtcode, $zender, $ontvanger, $tijdstipBericht, $entiteittype)
    {
      $this->berichtcode = $berichtcode;
      $this->zender = $zender;
      $this->ontvanger = $ontvanger;
      $this->tijdstipBericht = $tijdstipBericht;
      $this->entiteittype = $entiteittype;
    }

    /**
     * @return BerichtcodeLv01
     */
    public function getBerichtcode()
    {
      return $this->berichtcode;
    }

    /**
     * @param BerichtcodeLv01 $berichtcode
     * @return \RRSVP\Stuf\stuurgegevensLv01-prs-Vestiging
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
     * @return \RRSVP\Stuf\stuurgegevensLv01-prs-Vestiging
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
     * @return \RRSVP\Stuf\stuurgegevensLv01-prs-Vestiging
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
     * @return \RRSVP\Stuf\stuurgegevensLv01-prs-Vestiging
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
     * @return \RRSVP\Stuf\stuurgegevensLv01-prs-Vestiging
     */
    public function setTijdstipBericht($tijdstipBericht)
    {
      $this->tijdstipBericht = $tijdstipBericht;
      return $this;
    }

    /**
     * @return EntiteittypeVES
     */
    public function getEntiteittype()
    {
      return $this->entiteittype;
    }

    /**
     * @param EntiteittypeVES $entiteittype
     * @return \RRSVP\Stuf\stuurgegevensLv01-prs-Vestiging
     */
    public function setEntiteittype($entiteittype)
    {
      $this->entiteittype = $entiteittype;
      return $this;
    }

}
