<?php

class StuurgegevensLk04
{

    /**
     * @var BerichtcodeLk04 $berichtcode
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
     * @param BerichtcodeLk04 $berichtcode
     * @param Functie $functie
     */
    public function __construct($berichtcode, $functie)
    {
      $this->berichtcode = $berichtcode;
      $this->functie = $functie;
    }

    /**
     * @return BerichtcodeLk04
     */
    public function getBerichtcode()
    {
      return $this->berichtcode;
    }

    /**
     * @param BerichtcodeLk04 $berichtcode
     * @return StuurgegevensLk04
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
     * @return StuurgegevensLk04
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
     * @return StuurgegevensLk04
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
     * @return StuurgegevensLk04
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
     * @return StuurgegevensLk04
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
     * @return StuurgegevensLk04
     */
    public function setFunctie($functie)
    {
      $this->functie = $functie;
      return $this;
    }

}
