<?php

class parametersLv01prsNatuurlijkPersoon
{

    /**
     * @var NPSsortering $sortering
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
     * @param NPSsortering $sortering
     * @param boolean $indicatorVervolgvraag
     * @param MaximumAantal $maximumAantal
     */
    public function __construct($sortering, $indicatorVervolgvraag, $maximumAantal)
    {
      $this->sortering = $sortering;
      $this->indicatorVervolgvraag = $indicatorVervolgvraag;
      $this->maximumAantal = $maximumAantal;
    }

    /**
     * @return NPSsortering
     */
    public function getSortering()
    {
      return $this->sortering;
    }

    /**
     * @param NPSsortering $sortering
     * @return parametersLv01-prs-NatuurlijkPersoon
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
     * @return parametersLv01-prs-NatuurlijkPersoon
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
     * @return parametersLv01-prs-NatuurlijkPersoon
     */
    public function setMaximumAantal($maximumAantal)
    {
      $this->maximumAantal = $maximumAantal;
      return $this;
    }

}
