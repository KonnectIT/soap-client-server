<?php

class ParametersAntwoordSynchroon
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
     * @var AantalVoorkomens $aantalVoorkomens
     */
    protected $aantalVoorkomens = null;

    /**
     * @param boolean $indicatorVervolgvraag
     */
    public function __construct($indicatorVervolgvraag)
    {
      $this->indicatorVervolgvraag = $indicatorVervolgvraag;
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
     * @return ParametersAntwoordSynchroon
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
     * @return ParametersAntwoordSynchroon
     */
    public function setIndicatorAfnemerIndicatie($indicatorAfnemerIndicatie)
    {
      $this->indicatorAfnemerIndicatie = $indicatorAfnemerIndicatie;
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
     * @return ParametersAntwoordSynchroon
     */
    public function setAantalVoorkomens($aantalVoorkomens)
    {
      $this->aantalVoorkomens = $aantalVoorkomens;
      return $this;
    }

}
