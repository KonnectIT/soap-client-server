<?php

class InOnderzoekVerblijfplaats
{

    /**
     * @var InOnderzoekVerblijfplaatsbasis $_
     */
    protected $_ = null;

    /**
     * @var boolean $metagegeven
     */
    protected $metagegeven = null;

    /**
     * @param InOnderzoekVerblijfplaatsbasis $_
     * @param boolean $metagegeven
     */
    public function __construct($_, $metagegeven)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
    }

    /**
     * @return InOnderzoekVerblijfplaatsbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekVerblijfplaatsbasis $_
     * @return InOnderzoekVerblijfplaats
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
     * @return InOnderzoekVerblijfplaats
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

}
