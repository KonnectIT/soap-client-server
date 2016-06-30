<?php

namespace RRSVP\Stuf;

class InOnderzoekGEMbasis
{

    /**
     * @var StatusMetagegevenbasis $_
     */
    protected $_ = null;

    /**
     * @var Groepsnaam $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var InOnderzoekGEMElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param StatusMetagegevenbasis $_
     * @param Groepsnaam $groepsnaam
     * @param InOnderzoekGEMElementen $elementnaam
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
     * @return \RRSVP\Stuf\InOnderzoekGEM-basis
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return \RRSVP\Stuf\InOnderzoekGEM-basis
     */
    public function setGroepsnaam($groepsnaam)
    {
      $this->groepsnaam = $groepsnaam;
      return $this;
    }

    /**
     * @return InOnderzoekGEMElementen
     */
    public function getElementnaam()
    {
      return $this->elementnaam;
    }

    /**
     * @param InOnderzoekGEMElementen $elementnaam
     * @return \RRSVP\Stuf\InOnderzoekGEM-basis
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
