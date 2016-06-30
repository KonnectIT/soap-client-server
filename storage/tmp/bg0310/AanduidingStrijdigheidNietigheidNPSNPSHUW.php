<?php

class AanduidingStrijdigheidNietigheidNPSNPSHUW
{

    /**
     * @var AanduidingStrijdigheidNietigheid $_
     */
    protected $_ = null;

    /**
     * @var boolean $metagegeven
     */
    protected $metagegeven = null;

    /**
     * @var NPSNPSHUWGroepen $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var NPSNPSHUWElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param AanduidingStrijdigheidNietigheid $_
     * @param boolean $metagegeven
     * @param NPSNPSHUWGroepen $groepsnaam
     * @param NPSNPSHUWElementen $elementnaam
     */
    public function __construct($_, $metagegeven, $groepsnaam, $elementnaam)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
      $this->groepsnaam = $groepsnaam;
      $this->elementnaam = $elementnaam;
    }

    /**
     * @return AanduidingStrijdigheidNietigheid
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param AanduidingStrijdigheidNietigheid $_
     * @return AanduidingStrijdigheidNietigheidNPSNPSHUW
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
     * @return AanduidingStrijdigheidNietigheidNPSNPSHUW
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
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
     * @return AanduidingStrijdigheidNietigheidNPSNPSHUW
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
     * @return AanduidingStrijdigheidNietigheidNPSNPSHUW
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
