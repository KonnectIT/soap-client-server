<?php

class InOnderzoekWOZbasis
{

    /**
     * @var StatusMetagegevenbasis $_
     */
    protected $_ = null;

    /**
     * @var InOnderzoekWOZGroep $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var InOnderzoekWOZElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param StatusMetagegevenbasis $_
     * @param InOnderzoekWOZGroep $groepsnaam
     * @param InOnderzoekWOZElementen $elementnaam
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
     * @return InOnderzoekWOZ-basis
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return InOnderzoekWOZGroep
     */
    public function getGroepsnaam()
    {
      return $this->groepsnaam;
    }

    /**
     * @param InOnderzoekWOZGroep $groepsnaam
     * @return InOnderzoekWOZ-basis
     */
    public function setGroepsnaam($groepsnaam)
    {
      $this->groepsnaam = $groepsnaam;
      return $this;
    }

    /**
     * @return InOnderzoekWOZElementen
     */
    public function getElementnaam()
    {
      return $this->elementnaam;
    }

    /**
     * @param InOnderzoekWOZElementen $elementnaam
     * @return InOnderzoekWOZ-basis
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
