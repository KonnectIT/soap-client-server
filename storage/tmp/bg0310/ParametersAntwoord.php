<?php

class ParametersAntwoord
{

    /**
     * @var boolean $indicatorVervolgvraag
     */
    protected $indicatorVervolgvraag = null;

    /**
     * @var boolean $indicatorAfnemerIndicatie
     */
    protected $indicatorAfnemerIndicatie = null;

    /**
     * @var Tijdstip $peiltijdstipMaterieel
     */
    protected $peiltijdstipMaterieel = null;

    /**
     * @var Tijdstip $peiltijdstipFormeel
     */
    protected $peiltijdstipFormeel = null;

    /**
     * @var IndicatorHistorie $indicatorHistorie
     */
    protected $indicatorHistorie = null;

    /**
     * @var AantalVoorkomens $aantalVoorkomens
     */
    protected $aantalVoorkomens = null;

    /**
     * @var SequenceNumber $sequenceNumber
     */
    protected $sequenceNumber = null;

    /**
     * @var boolean $indicatorLaatsteBericht
     */
    protected $indicatorLaatsteBericht = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getIndicatorVervolgvraag()
    {
      return $this->indicatorVervolgvraag;
    }

    /**
     * @param boolean $indicatorVervolgvraag
     * @return ParametersAntwoord
     */
    public function setIndicatorVervolgvraag($indicatorVervolgvraag)
    {
      $this->indicatorVervolgvraag = $indicatorVervolgvraag;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIndicatorAfnemerIndicatie()
    {
      return $this->indicatorAfnemerIndicatie;
    }

    /**
     * @param boolean $indicatorAfnemerIndicatie
     * @return ParametersAntwoord
     */
    public function setIndicatorAfnemerIndicatie($indicatorAfnemerIndicatie)
    {
      $this->indicatorAfnemerIndicatie = $indicatorAfnemerIndicatie;
      return $this;
    }

    /**
     * @return Tijdstip
     */
    public function getPeiltijdstipMaterieel()
    {
      return $this->peiltijdstipMaterieel;
    }

    /**
     * @param Tijdstip $peiltijdstipMaterieel
     * @return ParametersAntwoord
     */
    public function setPeiltijdstipMaterieel($peiltijdstipMaterieel)
    {
      $this->peiltijdstipMaterieel = $peiltijdstipMaterieel;
      return $this;
    }

    /**
     * @return Tijdstip
     */
    public function getPeiltijdstipFormeel()
    {
      return $this->peiltijdstipFormeel;
    }

    /**
     * @param Tijdstip $peiltijdstipFormeel
     * @return ParametersAntwoord
     */
    public function setPeiltijdstipFormeel($peiltijdstipFormeel)
    {
      $this->peiltijdstipFormeel = $peiltijdstipFormeel;
      return $this;
    }

    /**
     * @return IndicatorHistorie
     */
    public function getIndicatorHistorie()
    {
      return $this->indicatorHistorie;
    }

    /**
     * @param IndicatorHistorie $indicatorHistorie
     * @return ParametersAntwoord
     */
    public function setIndicatorHistorie($indicatorHistorie)
    {
      $this->indicatorHistorie = $indicatorHistorie;
      return $this;
    }

    /**
     * @return AantalVoorkomens
     */
    public function getAantalVoorkomens()
    {
      return $this->aantalVoorkomens;
    }

    /**
     * @param AantalVoorkomens $aantalVoorkomens
     * @return ParametersAntwoord
     */
    public function setAantalVoorkomens($aantalVoorkomens)
    {
      $this->aantalVoorkomens = $aantalVoorkomens;
      return $this;
    }

    /**
     * @return SequenceNumber
     */
    public function getSequenceNumber()
    {
      return $this->sequenceNumber;
    }

    /**
     * @param SequenceNumber $sequenceNumber
     * @return ParametersAntwoord
     */
    public function setSequenceNumber($sequenceNumber)
    {
      $this->sequenceNumber = $sequenceNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIndicatorLaatsteBericht()
    {
      return $this->indicatorLaatsteBericht;
    }

    /**
     * @param boolean $indicatorLaatsteBericht
     * @return ParametersAntwoord
     */
    public function setIndicatorLaatsteBericht($indicatorLaatsteBericht)
    {
      $this->indicatorLaatsteBericht = $indicatorLaatsteBericht;
      return $this;
    }

}
