<?php

namespace RRSVP\Stuf;

class InOnderzoekNAT
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
     * @param InOnderzoekNATbasis $_
     * @param boolean $metagegeven
     */
    public function __construct($_, $metagegeven)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
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
     * @return \RRSVP\Stuf\InOnderzoekNAT
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
     * @return \RRSVP\Stuf\InOnderzoekNAT
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

}
