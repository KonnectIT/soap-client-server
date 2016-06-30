<?php

class InOnderzoekNNPRPSvraag
{

    /**
     * @var InOnderzoekNNPRPSbasis $_
     */
    protected $_ = null;

    /**
     * @var boolean $metagegeven
     */
    protected $metagegeven = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @var InOnderzoekNNPRPSElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param InOnderzoekNNPRPSbasis $_
     * @param boolean $metagegeven
     * @param NoValue $noValue
     * @param InOnderzoekNNPRPSElementen $elementnaam
     */
    public function __construct($_, $metagegeven, $noValue, $elementnaam)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
      $this->noValue = $noValue;
      $this->elementnaam = $elementnaam;
    }

    /**
     * @return InOnderzoekNNPRPSbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekNNPRPSbasis $_
     * @return InOnderzoekNNPRPS-vraag
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMetagegeven()
    {
      return $this->metagegeven;
    }

    /**
     * @param boolean $metagegeven
     * @return InOnderzoekNNPRPS-vraag
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

    /**
     * @return NoValue
     */
    public function getNoValue()
    {
      return $this->noValue;
    }

    /**
     * @param NoValue $noValue
     * @return InOnderzoekNNPRPS-vraag
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

    /**
     * @return InOnderzoekNNPRPSElementen
     */
    public function getElementnaam()
    {
      return $this->elementnaam;
    }

    /**
     * @param InOnderzoekNNPRPSElementen $elementnaam
     * @return InOnderzoekNNPRPS-vraag
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
