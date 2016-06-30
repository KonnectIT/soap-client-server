<?php

namespace RRSVP\Stuf;

class AanduidingStrijdigheidNietigheid
{

    /**
     * @var AanduidingStrijdigNietig $_
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
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @param AanduidingStrijdigNietig $_
     * @param boolean $metagegeven
     * @param Groepsnaam $groepsnaam
     * @param Groepsnaam $elementnaam
     * @param NoValue $noValue
     */
    public function __construct($_, $metagegeven, $groepsnaam, $elementnaam, $noValue)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
      $this->groepsnaam = $groepsnaam;
      $this->elementnaam = $elementnaam;
      $this->noValue = $noValue;
    }

    /**
     * @return AanduidingStrijdigNietig
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param AanduidingStrijdigNietig $_
     * @return \RRSVP\Stuf\AanduidingStrijdigheidNietigheid
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
     * @return \RRSVP\Stuf\AanduidingStrijdigheidNietigheid
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
     * @return \RRSVP\Stuf\AanduidingStrijdigheidNietigheid
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
     * @return \RRSVP\Stuf\AanduidingStrijdigheidNietigheid
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
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
     * @return \RRSVP\Stuf\AanduidingStrijdigheidNietigheid
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

}
