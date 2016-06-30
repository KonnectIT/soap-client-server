<?php

class InOnderzoekBeschikkingStatusInWRDbasis
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
     * @var Groepsnaam $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param StatusMetagegevenbasis $_
     * @param Groepsnaam $groepsnaam
     * @param Groepsnaam $elementnaam
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
     * @return InOnderzoekBeschikkingStatusInWRD-basis
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
     * @return InOnderzoekBeschikkingStatusInWRD-basis
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
     * @return InOnderzoekBeschikkingStatusInWRD-basis
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
