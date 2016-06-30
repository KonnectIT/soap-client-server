<?php

namespace RRSVP\Stuf;

class InOnderzoekVESvraag
{

    /**
     * @var InOnderzoekVESbasis $_
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
     * @var InOnderzoekVESGroepen $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var InOnderzoekVESElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param InOnderzoekVESbasis $_
     * @param boolean $metagegeven
     * @param NoValue $noValue
     * @param InOnderzoekVESGroepen $groepsnaam
     * @param InOnderzoekVESElementen $elementnaam
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
     * @return InOnderzoekVESbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekVESbasis $_
     * @return \RRSVP\Stuf\InOnderzoekVES-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekVES-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekVES-vraag
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
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
     * @return \RRSVP\Stuf\InOnderzoekVES-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekVES-vraag
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
