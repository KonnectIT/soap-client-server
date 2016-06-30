<?php

namespace RRSVP\Stuf;

class ParametersAntwoordAsynchroonMaterieel
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

    /**
     * @param SequenceNumber $sequenceNumber
     */
    public function __construct($sequenceNumber)
    {
      $this->sequenceNumber = $sequenceNumber;
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
     * @return \RRSVP\Stuf\ParametersAntwoordAsynchroonMaterieel
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
     * @return \RRSVP\Stuf\ParametersAntwoordAsynchroonMaterieel
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
     * @return \RRSVP\Stuf\ParametersAntwoordAsynchroonMaterieel
     */
    public function setPeiltijdstipMaterieel($peiltijdstipMaterieel)
    {
      $this->peiltijdstipMaterieel = $peiltijdstipMaterieel;
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
     * @return \RRSVP\Stuf\ParametersAntwoordAsynchroonMaterieel
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
     * @return \RRSVP\Stuf\ParametersAntwoordAsynchroonMaterieel
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
     * @return \RRSVP\Stuf\ParametersAntwoordAsynchroonMaterieel
     */
    public function setIndicatorLaatsteBericht($indicatorLaatsteBericht)
    {
      $this->indicatorLaatsteBericht = $indicatorLaatsteBericht;
      return $this;
    }

}
