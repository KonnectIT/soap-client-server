<?php

namespace RRSVP\Stuf;

class InOnderzoekVESbasis
{

    /**
     * @var StatusMetagegevenbasis $_
     */
    protected $_ = null;

    /**
     * @var InOnderzoekVESGroepen $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var InOnderzoekVESElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param StatusMetagegevenbasis $_
     * @param InOnderzoekVESGroepen $groepsnaam
     * @param InOnderzoekVESElementen $elementnaam
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
     * @return \RRSVP\Stuf\InOnderzoekVES-basis
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return InOnderzoekVESGroepen
     */
    public function getGroepsnaam()
    {
      return $this->groepsnaam;
    }

    /**
     * @param InOnderzoekVESGroepen $groepsnaam
     * @return \RRSVP\Stuf\InOnderzoekVES-basis
     */
    public function setGroepsnaam($groepsnaam)
    {
      $this->groepsnaam = $groepsnaam;
      return $this;
    }

    /**
     * @return InOnderzoekVESElementen
     */
    public function getElementnaam()
    {
      return $this->elementnaam;
    }

    /**
     * @param InOnderzoekVESElementen $elementnaam
     * @return \RRSVP\Stuf\InOnderzoekVES-basis
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
