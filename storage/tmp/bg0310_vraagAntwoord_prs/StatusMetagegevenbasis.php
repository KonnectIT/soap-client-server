<?php

namespace RRSVP\Stuf;

class StatusMetagegevenbasis
{

    /**
     * @var StatusMetagegeven $_
     */
    protected $_ = null;

    /**
     * @var boolean $metagegeven
     */
    protected $metagegeven = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @var Groepsnaam $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var Groepsnaam $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param StatusMetagegeven $_
     * @param boolean $metagegeven
     * @param NoValue $noValue
     * @param Groepsnaam $groepsnaam
     * @param Groepsnaam $elementnaam
     */
    public function __construct($_, $metagegeven, $noValue, $groepsnaam, $elementnaam)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
      $this->noValue = $noValue;
      $this->groepsnaam = $groepsnaam;
      $this->elementnaam = $elementnaam;
    }

    /**
     * @return StatusMetagegeven
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param StatusMetagegeven $_
     * @return \RRSVP\Stuf\StatusMetagegeven-basis
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
     * @return \RRSVP\Stuf\StatusMetagegeven-basis
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

    /**
     * @return NoValue
     */
    public function getNoValue()
    {
      return $this->noValue;
    }

    /**
     * @param NoValue $noValue
     * @return \RRSVP\Stuf\StatusMetagegeven-basis
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
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
     * @return \RRSVP\Stuf\StatusMetagegeven-basis
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
     * @return \RRSVP\Stuf\StatusMetagegeven-basis
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
