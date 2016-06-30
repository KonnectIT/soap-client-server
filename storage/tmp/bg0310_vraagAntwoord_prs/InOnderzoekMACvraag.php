<?php

namespace RRSVP\Stuf;

class InOnderzoekMACvraag
{

    /**
     * @var InOnderzoekMACbasis $_
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
     * @var InOnderzoekMACGroepen $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var InOnderzoekMACElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param InOnderzoekMACbasis $_
     * @param boolean $metagegeven
     * @param NoValue $noValue
     * @param InOnderzoekMACGroepen $groepsnaam
     * @param InOnderzoekMACElementen $elementnaam
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
     * @return InOnderzoekMACbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekMACbasis $_
     * @return \RRSVP\Stuf\InOnderzoekMAC-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekMAC-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekMAC-vraag
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

    /**
     * @return InOnderzoekMACGroepen
     */
    public function getGroepsnaam()
    {
      return $this->groepsnaam;
    }

    /**
     * @param InOnderzoekMACGroepen $groepsnaam
     * @return \RRSVP\Stuf\InOnderzoekMAC-vraag
     */
    public function setGroepsnaam($groepsnaam)
    {
      $this->groepsnaam = $groepsnaam;
      return $this;
    }

    /**
     * @return InOnderzoekMACElementen
     */
    public function getElementnaam()
    {
      return $this->elementnaam;
    }

    /**
     * @param InOnderzoekMACElementen $elementnaam
     * @return \RRSVP\Stuf\InOnderzoekMAC-vraag
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
