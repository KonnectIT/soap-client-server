<?php

namespace RRSVP\Stuf;

class AanduidingStrijdigheidNietigheidNPS
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
     * @var NPSGroepen $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var NPSElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param AanduidingStrijdigheidNietigheid $_
     * @param boolean $metagegeven
     * @param NPSGroepen $groepsnaam
     * @param NPSElementen $elementnaam
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
     * @return \RRSVP\Stuf\AanduidingStrijdigheidNietigheidNPS
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
     * @return \RRSVP\Stuf\AanduidingStrijdigheidNietigheidNPS
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

    /**
     * @return NPSGroepen
     */
    public function getGroepsnaam()
    {
      return $this->groepsnaam;
    }

    /**
     * @param NPSGroepen $groepsnaam
     * @return \RRSVP\Stuf\AanduidingStrijdigheidNietigheidNPS
     */
    public function setGroepsnaam($groepsnaam)
    {
      $this->groepsnaam = $groepsnaam;
      return $this;
    }

    /**
     * @return NPSElementen
     */
    public function getElementnaam()
    {
      return $this->elementnaam;
    }

    /**
     * @param NPSElementen $elementnaam
     * @return \RRSVP\Stuf\AanduidingStrijdigheidNietigheidNPS
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
