<?php

class MACparametersVraagAsynchroonFormeel
{

    /**
     * @var MACsortering $sortering
     */
    protected $sortering = null;

    /**
     * @var boolean $indicatorVervolgvraag
     */
    protected $indicatorVervolgvraag = null;

    /**
     * @var MaximumAantal $maximumAantal
     */
    protected $maximumAantal = null;

    /**
     * @var Tijdstip $peiltijdstipMaterieel
     */
    protected $peiltijdstipMaterieel = null;

    /**
     * @var Tijdstip $peiltijdstipFormeel
     */
    protected $peiltijdstipFormeel = null;

    /**
     * @var boolean $indicatorAfnemerIndicatie
     */
    protected $indicatorAfnemerIndicatie = null;

    /**
     * @param MACsortering $sortering
     * @param boolean $indicatorVervolgvraag
     */
    public function __construct($sortering, $indicatorVervolgvraag)
    {
      $this->sortering = $sortering;
      $this->indicatorVervolgvraag = $indicatorVervolgvraag;
    }

    /**
     * @return MACsortering
     */
    public function getSortering()
    {
      return $this->sortering;
    }

    /**
     * @param MACsortering $sortering
     * @return MAC-parametersVraagAsynchroonFormeel
     */
    public function setSortering($sortering)
    {
      $this->sortering = $sortering;
      return $this;
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
     * @return MAC-parametersVraagAsynchroonFormeel
     */
    public function setIndicatorVervolgvraag($indicatorVervolgvraag)
    {
      $this->indicatorVervolgvraag = $indicatorVervolgvraag;
      return $this;
    }

    /**
     * @return MaximumAantal
     */
    public function getMaximumAantal()
    {
      return $this->maximumAantal;
    }

    /**
     * @param MaximumAantal $maximumAantal
     * @return MAC-parametersVraagAsynchroonFormeel
     */
    public function setMaximumAantal($maximumAantal)
    {
      $this->maximumAantal = $maximumAantal;
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
     * @return MAC-parametersVraagAsynchroonFormeel
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
     * @return MAC-parametersVraagAsynchroonFormeel
     */
    public function setPeiltijdstipFormeel($peiltijdstipFormeel)
    {
      $this->peiltijdstipFormeel = $peiltijdstipFormeel;
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
     * @return MAC-parametersVraagAsynchroonFormeel
     */
    public function setIndicatorAfnemerIndicatie($indicatorAfnemerIndicatie)
    {
      $this->indicatorAfnemerIndicatie = $indicatorAfnemerIndicatie;
      return $this;
    }

}
