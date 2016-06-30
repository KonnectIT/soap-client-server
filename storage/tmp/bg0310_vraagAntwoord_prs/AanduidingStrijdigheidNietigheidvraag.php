<?php

namespace RRSVP\Stuf;

class AanduidingStrijdigheidNietigheidvraag
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
     * @var Groepsnaam $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var Groepsnaam $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param AanduidingStrijdigheidNietigheid $_
     * @param boolean $metagegeven
     * @param Groepsnaam $groepsnaam
     * @param Groepsnaam $elementnaam
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
     * @return \RRSVP\Stuf\AanduidingStrijdigheidNietigheid-vraag
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
     * @return \RRSVP\Stuf\AanduidingStrijdigheidNietigheid-vraag
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

    /**
     * @return Groepsnaam
     */
    public function getGroepsnaam()
    {
      return $this->groepsnaam;
    }

    /**
     * @param Groepsnaam $groepsnaam
     * @return \RRSVP\Stuf\AanduidingStrijdigheidNietigheid-vraag
     */
    public function setGroepsnaam($groepsnaam)
    {
      $this->groepsnaam = $groepsnaam;
      return $this;
    }

    /**
     * @return Groepsnaam
     */
    public function getElementnaam()
    {
      return $this->elementnaam;
    }

    /**
     * @param Groepsnaam $elementnaam
     * @return \RRSVP\Stuf\AanduidingStrijdigheidNietigheid-vraag
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
