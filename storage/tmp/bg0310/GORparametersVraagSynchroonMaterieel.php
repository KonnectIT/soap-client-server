<?php

class GORparametersVraagSynchroonMaterieel
{

    /**
     * @var GORsortering $sortering
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
     * @var boolean $indicatorAfnemerIndicatie
     */
    protected $indicatorAfnemerIndicatie = null;

    /**
     * @var boolean $indicatorAantal
     */
    protected $indicatorAantal = null;

    /**
     * @param GORsortering $sortering
     * @param boolean $indicatorVervolgvraag
     */
    public function __construct($sortering, $indicatorVervolgvraag)
    {
      $this->sortering = $sortering;
      $this->indicatorVervolgvraag = $indicatorVervolgvraag;
    }

    /**
     * @return GORsortering
     */
    public function getSortering()
    {
      return $this->sortering;
    }

    /**
     * @param GORsortering $sortering
     * @return GOR-parametersVraagSynchroonMaterieel
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
     * @return GOR-parametersVraagSynchroonMaterieel
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
     * @return GOR-parametersVraagSynchroonMaterieel
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
     * @return GOR-parametersVraagSynchroonMaterieel
     */
    public function setPeiltijdstipMaterieel($peiltijdstipMaterieel)
    {
      $this->peiltijdstipMaterieel = $peiltijdstipMaterieel;
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
     * @return GOR-parametersVraagSynchroonMaterieel
     */
    public function setIndicatorAfnemerIndicatie($indicatorAfnemerIndicatie)
    {
      $this->indicatorAfnemerIndicatie = $indicatorAfnemerIndicatie;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIndicatorAantal()
    {
      return $this->indicatorAantal;
    }

    /**
     * @param boolean $indicatorAantal
     * @return GOR-parametersVraagSynchroonMaterieel
     */
    public function setIndicatorAantal($indicatorAantal)
    {
      $this->indicatorAantal = $indicatorAantal;
      return $this;
    }

}
