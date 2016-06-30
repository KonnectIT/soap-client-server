<?php

class StatusMetagegevenNoValue
{

    /**
     * @var StatusMetagegevenbasis $_
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
     * @param StatusMetagegevenbasis $_
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
     * @return StatusMetagegevenbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param StatusMetagegevenbasis $_
     * @return StatusMetagegevenNoValue
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
     * @return StatusMetagegevenNoValue
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
     * @return StatusMetagegevenNoValue
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
     * @return StatusMetagegevenNoValue
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
