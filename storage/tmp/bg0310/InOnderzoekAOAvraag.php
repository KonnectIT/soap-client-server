<?php

class InOnderzoekAOAvraag
{

    /**
     * @var InOnderzoekAOAbasis $_
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
     * @var InOnderzoekAOAGroepen $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @param InOnderzoekAOAbasis $_
     * @param boolean $metagegeven
     * @param NoValue $noValue
     * @param InOnderzoekAOAGroepen $groepsnaam
     */
    public function __construct($_, $metagegeven, $noValue, $groepsnaam)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
      $this->noValue = $noValue;
      $this->groepsnaam = $groepsnaam;
    }

    /**
     * @return InOnderzoekAOAbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekAOAbasis $_
     * @return InOnderzoekAOA-vraag
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
     * @return InOnderzoekAOA-vraag
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
     * @return InOnderzoekAOA-vraag
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

    /**
     * @return InOnderzoekAOAGroepen
     */
    public function getGroepsnaam()
    {
      return $this->groepsnaam;
    }

    /**
     * @param InOnderzoekAOAGroepen $groepsnaam
     * @return InOnderzoekAOA-vraag
     */
    public function setGroepsnaam($groepsnaam)
    {
      $this->groepsnaam = $groepsnaam;
      return $this;
    }

}
