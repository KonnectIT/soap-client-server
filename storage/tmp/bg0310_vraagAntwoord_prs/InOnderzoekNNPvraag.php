<?php

namespace RRSVP\Stuf;

class InOnderzoekNNPvraag
{

    /**
     * @var InOnderzoekNNPbasis $_
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
     * @var InOnderzoekNNPGroepen $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var InOnderzoekNNPElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param InOnderzoekNNPbasis $_
     * @param boolean $metagegeven
     * @param NoValue $noValue
     * @param InOnderzoekNNPGroepen $groepsnaam
     * @param InOnderzoekNNPElementen $elementnaam
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
     * @return InOnderzoekNNPbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekNNPbasis $_
     * @return \RRSVP\Stuf\InOnderzoekNNP-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekNNP-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekNNP-vraag
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

    /**
     * @return InOnderzoekNNPGroepen
     */
    public function getGroepsnaam()
    {
      return $this->groepsnaam;
    }

    /**
     * @param InOnderzoekNNPGroepen $groepsnaam
     * @return \RRSVP\Stuf\InOnderzoekNNP-vraag
     */
    public function setGroepsnaam($groepsnaam)
    {
      $this->groepsnaam = $groepsnaam;
      return $this;
    }

    /**
     * @return InOnderzoekNNPElementen
     */
    public function getElementnaam()
    {
      return $this->elementnaam;
    }

    /**
     * @param InOnderzoekNNPElementen $elementnaam
     * @return \RRSVP\Stuf\InOnderzoekNNP-vraag
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
