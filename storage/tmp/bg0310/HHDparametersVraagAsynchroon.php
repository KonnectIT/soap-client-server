<?php

class HHDparametersVraagAsynchroon
{

    /**
     * @var HHDsortering $sortering
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
     * @var boolean $indicatorAfnemerIndicatie
     */
    protected $indicatorAfnemerIndicatie = null;

    /**
     * @param HHDsortering $sortering
     * @param boolean $indicatorVervolgvraag
     */
    public function __construct($sortering, $indicatorVervolgvraag)
    {
      $this->sortering = $sortering;
      $this->indicatorVervolgvraag = $indicatorVervolgvraag;
    }

    /**
     * @return HHDsortering
     */
    public function getSortering()
    {
      return $this->sortering;
    }

    /**
     * @param HHDsortering $sortering
     * @return HHD-parametersVraagAsynchroon
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
     * @return HHD-parametersVraagAsynchroon
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
     * @return HHD-parametersVraagAsynchroon
     */
    public function setMaximumAantal($maximumAantal)
    {
      $this->maximumAantal = $maximumAantal;
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
     * @return HHD-parametersVraagAsynchroon
     */
    public function setIndicatorAfnemerIndicatie($indicatorAfnemerIndicatie)
    {
      $this->indicatorAfnemerIndicatie = $indicatorAfnemerIndicatie;
      return $this;
    }

}
