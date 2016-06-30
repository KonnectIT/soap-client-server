<?php

namespace RRSVP\Stuf;

class InOnderzoekPND
{

    /**
     * @var InOnderzoekPNDbasis $_
     */
    protected $_ = null;

    /**
     * @var boolean $metagegeven
     */
    protected $metagegeven = null;

    /**
     * @param InOnderzoekPNDbasis $_
     * @param boolean $metagegeven
     */
    public function __construct($_, $metagegeven)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
    }

    /**
     * @return InOnderzoekPNDbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekPNDbasis $_
     * @return \RRSVP\Stuf\InOnderzoekPND
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
     * @return \RRSVP\Stuf\InOnderzoekPND
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

}
