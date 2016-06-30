<?php

class InOnderzoekTGOvraag
{

    /**
     * @var InOnderzoekTGObasis $_
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
     * @param InOnderzoekTGObasis $_
     * @param boolean $metagegeven
     * @param NoValue $noValue
     * @param Groepsnaam $groepsnaam
     */
    public function __construct($_, $metagegeven, $noValue, $groepsnaam)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
      $this->noValue = $noValue;
      $this->groepsnaam = $groepsnaam;
    }

    /**
     * @return InOnderzoekTGObasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekTGObasis $_
     * @return InOnderzoekTGO-vraag
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
     * @return InOnderzoekTGO-vraag
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
     * @return InOnderzoekTGO-vraag
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
     * @return InOnderzoekTGO-vraag
     */
    public function setGroepsnaam($groepsnaam)
    {
      $this->groepsnaam = $groepsnaam;
      return $this;
    }

}
