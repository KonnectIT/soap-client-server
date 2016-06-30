<?php

namespace RRSVP\Stuf;

class InOnderzoekGEMvraag
{

    /**
     * @var InOnderzoekGEMbasis $_
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
     * @var InOnderzoekGEMElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param InOnderzoekGEMbasis $_
     * @param boolean $metagegeven
     * @param NoValue $noValue
     * @param InOnderzoekGEMElementen $elementnaam
     */
    public function __construct($_, $metagegeven, $noValue, $elementnaam)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
      $this->noValue = $noValue;
      $this->elementnaam = $elementnaam;
    }

    /**
     * @return InOnderzoekGEMbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekGEMbasis $_
     * @return \RRSVP\Stuf\InOnderzoekGEM-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekGEM-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekGEM-vraag
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

    /**
     * @return InOnderzoekGEMElementen
     */
    public function getElementnaam()
    {
      return $this->elementnaam;
    }

    /**
     * @param InOnderzoekGEMElementen $elementnaam
     * @return \RRSVP\Stuf\InOnderzoekGEM-vraag
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
