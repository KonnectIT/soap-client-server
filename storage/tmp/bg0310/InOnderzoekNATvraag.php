<?php

class InOnderzoekNATvraag
{

    /**
     * @var InOnderzoekNATbasis $_
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
     * @param InOnderzoekNATbasis $_
     * @param boolean $metagegeven
     * @param NoValue $noValue
     */
    public function __construct($_, $metagegeven, $noValue)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
      $this->noValue = $noValue;
    }

    /**
     * @return InOnderzoekNATbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekNATbasis $_
     * @return InOnderzoekNAT-vraag
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
     * @return InOnderzoekNAT-vraag
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
     * @return InOnderzoekNAT-vraag
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

}
