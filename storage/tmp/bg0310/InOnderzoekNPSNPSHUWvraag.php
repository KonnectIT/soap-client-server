<?php

class InOnderzoekNPSNPSHUWvraag
{

    /**
     * @var InOnderzoekNPSNPSHUWbasis $_
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
     * @var NPSNPSHUWGroepen $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var NPSNPSHUWElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param InOnderzoekNPSNPSHUWbasis $_
     * @param boolean $metagegeven
     * @param NoValue $noValue
     * @param NPSNPSHUWGroepen $groepsnaam
     * @param NPSNPSHUWElementen $elementnaam
     */
    public function __construct($_, $metagegeven, $noValue, $groepsnaam, $elementnaam)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
      $this->noValue = $noValue;
      $this->groepsnaam = $groepsnaam;
      $this->elementnaam = $elementnaam;
    }

    /**
     * @return InOnderzoekNPSNPSHUWbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekNPSNPSHUWbasis $_
     * @return InOnderzoekNPSNPSHUW-vraag
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
     * @return InOnderzoekNPSNPSHUW-vraag
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
     * @return InOnderzoekNPSNPSHUW-vraag
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

    /**
     * @return NPSNPSHUWGroepen
     */
    public function getGroepsnaam()
    {
      return $this->groepsnaam;
    }

    /**
     * @param NPSNPSHUWGroepen $groepsnaam
     * @return InOnderzoekNPSNPSHUW-vraag
     */
    public function setGroepsnaam($groepsnaam)
    {
      $this->groepsnaam = $groepsnaam;
      return $this;
    }

    /**
     * @return NPSNPSHUWElementen
     */
    public function getElementnaam()
    {
      return $this->elementnaam;
    }

    /**
     * @param NPSNPSHUWElementen $elementnaam
     * @return InOnderzoekNPSNPSHUW-vraag
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
