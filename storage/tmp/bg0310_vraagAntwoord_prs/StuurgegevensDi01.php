<?php

namespace RRSVP\Stuf;

class StuurgegevensDi01
{

    /**
     * @var BerichtcodeDi01 $berichtcode
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
     * @var Functie $functie
     */
    protected $functie = null;

    /**
     * @param BerichtcodeDi01 $berichtcode
     * @param Systeem $zender
     * @param Systeem $ontvanger
     * @param Refnummer $referentienummer
     * @param Tijdstip $tijdstipBericht
     * @param Functie $functie
     */
    public function __construct($berichtcode, $zender, $ontvanger, $referentienummer, $tijdstipBericht, $functie)
    {
      $this->berichtcode = $berichtcode;
      $this->zender = $zender;
      $this->ontvanger = $ontvanger;
      $this->referentienummer = $referentienummer;
      $this->tijdstipBericht = $tijdstipBericht;
      $this->functie = $functie;
    }

    /**
     * @return BerichtcodeDi01
     */
    public function getBerichtcode()
    {
      return $this->berichtcode;
    }

    /**
     * @param BerichtcodeDi01 $berichtcode
     * @return \RRSVP\Stuf\StuurgegevensDi01
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
     * @return \RRSVP\Stuf\StuurgegevensDi01
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
     * @return \RRSVP\Stuf\StuurgegevensDi01
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
     * @return \RRSVP\Stuf\StuurgegevensDi01
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
     * @return \RRSVP\Stuf\StuurgegevensDi01
     */
    public function setTijdstipBericht($tijdstipBericht)
    {
      $this->tijdstipBericht = $tijdstipBericht;
      return $this;
    }

    /**
     * @return Functie
     */
    public function getFunctie()
    {
      return $this->functie;
    }

    /**
     * @param Functie $functie
     * @return \RRSVP\Stuf\StuurgegevensDi01
     */
    public function setFunctie($functie)
    {
      $this->functie = $functie;
      return $this;
    }

}
