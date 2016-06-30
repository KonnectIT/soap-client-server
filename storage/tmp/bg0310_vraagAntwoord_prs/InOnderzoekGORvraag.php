<?php

namespace RRSVP\Stuf;

class InOnderzoekGORvraag
{

    /**
     * @var InOnderzoekGORbasis $_
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
     * @var InOnderzoekGORGroepen $groepsnaam
     */
    protected $groepsnaam = null;

    /**
     * @var InOnderzoekGORElementen $elementnaam
     */
    protected $elementnaam = null;

    /**
     * @param InOnderzoekGORbasis $_
     * @param boolean $metagegeven
     * @param NoValue $noValue
     * @param InOnderzoekGORGroepen $groepsnaam
     * @param InOnderzoekGORElementen $elementnaam
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
     * @return InOnderzoekGORbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekGORbasis $_
     * @return \RRSVP\Stuf\InOnderzoekGOR-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekGOR-vraag
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
     * @return \RRSVP\Stuf\InOnderzoekGOR-vraag
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

    /**
     * @return InOnderzoekGORGroepen
     */
    public function getGroepsnaam()
    {
      return $this->groepsnaam;
    }

    /**
     * @param InOnderzoekGORGroepen $groepsnaam
     * @return \RRSVP\Stuf\InOnderzoekGOR-vraag
     */
    public function setGroepsnaam($groepsnaam)
    {
      $this->groepsnaam = $groepsnaam;
      return $this;
    }

    /**
     * @return InOnderzoekGORElementen
     */
    public function getElementnaam()
    {
      return $this->elementnaam;
    }

    /**
     * @param InOnderzoekGORElementen $elementnaam
     * @return \RRSVP\Stuf\InOnderzoekGOR-vraag
     */
    public function setElementnaam($elementnaam)
    {
      $this->elementnaam = $elementnaam;
      return $this;
    }

}
