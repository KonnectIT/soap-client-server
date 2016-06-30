<?php

class InOnderzoekWOZ
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
     * @param InOnderzoekWOZbasis $_
     * @param boolean $metagegeven
     */
    public function __construct($_, $metagegeven)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
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
     * @return InOnderzoekWOZ
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
     * @return InOnderzoekWOZ
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

}
