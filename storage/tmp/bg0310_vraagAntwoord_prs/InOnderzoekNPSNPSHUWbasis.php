<?php

namespace RRSVP\Stuf;

class InOnderzoekNPSNPSHUWbasis
{

    /**
     * @var StatusMetagegevenbasis $_
     */
    protected $_ = null;

    /**
     * @var NPSNPSHUWGroepen $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var NPSNPSHUWElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param StatusMetagegevenbasis $_
     * @param NPSNPSHUWGroepen $groepsnaam
     * @param NPSNPSHUWElementen $elementnaam
     */
    public function __construct($_, $groepsnaam, $elementnaam)
    {
      $this->_ = $_;
      $this->groepsnaam = $groepsnaam;
      $this->elementnaam = $elementnaam;
    }

    /**
     * @return StatusMetagegevenbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param StatusMetagegevenbasis $_
     * @return \RRSVP\Stuf\InOnderzoekNPSNPSHUW-basis
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return \RRSVP\Stuf\InOnderzoekNPSNPSHUW-basis
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
     * @return \RRSVP\Stuf\InOnderzoekNPSNPSHUW-basis
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
