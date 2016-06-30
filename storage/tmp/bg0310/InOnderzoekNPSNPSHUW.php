<?php

class InOnderzoekNPSNPSHUW
{

    /**
     * @var InOnderzoekNPSNPSHUWbasis $_
     */
    protected $_ = null;

    /**
     * @var boolean $metagegeven
     */
    protected $metagegeven = null;

    /**
     * @param InOnderzoekNPSNPSHUWbasis $_
     * @param boolean $metagegeven
     */
    public function __construct($_, $metagegeven)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
    }

    /**
     * @return InOnderzoekNPSNPSHUWbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekNPSNPSHUWbasis $_
     * @return InOnderzoekNPSNPSHUW
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
     * @return InOnderzoekNPSNPSHUW
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

}
