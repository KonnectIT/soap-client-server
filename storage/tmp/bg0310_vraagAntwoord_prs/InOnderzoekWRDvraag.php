<?php

namespace RRSVP\Stuf;

class InOnderzoekWRDvraag
{

    /**
     * @var InOnderzoekWRDbasis $_
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
     * @var InOnderzoekWRDElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param InOnderzoekWRDbasis $_
     * @param boolean $metagegeven
     * @param NoValue $noValue
     * @param InOnderzoekWRDElementen $elementnaam
     */
    public function __construct($_, $metagegeven, $noValue, $elementnaam)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
      $this->noValue = $noValue;
      $this->elementnaam = $elementnaam;
    }

    /**
     * @return InOnderzoekWRDbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekWRDbasis $_
     * @return \RRSVP\Stuf\InOnderzoekWRD-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekWRD-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekWRD-vraag
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

    /**
     * @return InOnderzoekWRDElementen
     */
    public function getElementnaam()
    {
      return $this->elementnaam;
    }

    /**
     * @param InOnderzoekWRDElementen $elementnaam
     * @return \RRSVP\Stuf\InOnderzoekWRD-vraag
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
