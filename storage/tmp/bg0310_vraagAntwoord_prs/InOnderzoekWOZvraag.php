<?php

namespace RRSVP\Stuf;

class InOnderzoekWOZvraag
{

    /**
     * @var InOnderzoekWOZbasis $_
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
     * @var InOnderzoekWOZGroep $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var InOnderzoekWOZElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param InOnderzoekWOZbasis $_
     * @param boolean $metagegeven
     * @param NoValue $noValue
     * @param InOnderzoekWOZGroep $groepsnaam
     * @param InOnderzoekWOZElementen $elementnaam
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
     * @return InOnderzoekWOZbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekWOZbasis $_
     * @return \RRSVP\Stuf\InOnderzoekWOZ-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekWOZ-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekWOZ-vraag
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
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
     * @return \RRSVP\Stuf\InOnderzoekWOZ-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekWOZ-vraag
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
