<?php

class GebeurtenisMetAttributesbasis
{

    /**
     * @var Gebeurtenis $_
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
     * @var Tijdstip $tijdstip
     */
    protected $tijdstip = null;

    /**
     * @param Gebeurtenis $_
     * @param boolean $metagegeven
     * @param Groepsnaam $groepsnaam
     * @param Groepsnaam $elementnaam
     * @param Tijdstip $tijdstip
     */
    public function __construct($_, $metagegeven, $groepsnaam, $elementnaam, $tijdstip)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
      $this->groepsnaam = $groepsnaam;
      $this->elementnaam = $elementnaam;
      $this->tijdstip = $tijdstip;
    }

    /**
     * @return Gebeurtenis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Gebeurtenis $_
     * @return GebeurtenisMetAttributes-basis
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
     * @return GebeurtenisMetAttributes-basis
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
     * @return GebeurtenisMetAttributes-basis
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
     * @return GebeurtenisMetAttributes-basis
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

    /**
     * @return Tijdstip
     */
    public function getTijdstip()
    {
      return $this->tijdstip;
    }

    /**
     * @param Tijdstip $tijdstip
     * @return GebeurtenisMetAttributes-basis
     */
    public function setTijdstip($tijdstip)
    {
      $this->tijdstip = $tijdstip;
      return $this;
    }

}
