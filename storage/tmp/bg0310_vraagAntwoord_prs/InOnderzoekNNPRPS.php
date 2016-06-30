<?php

namespace RRSVP\Stuf;

class InOnderzoekNNPRPS
{

    /**
     * @var InOnderzoekNNPRPSbasis $_
     */
    protected $_ = null;

    /**
     * @var boolean $metagegeven
     */
    protected $metagegeven = null;

    /**
     * @param InOnderzoekNNPRPSbasis $_
     * @param boolean $metagegeven
     */
    public function __construct($_, $metagegeven)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
    }

    /**
     * @return InOnderzoekNNPRPSbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekNNPRPSbasis $_
     * @return \RRSVP\Stuf\InOnderzoekNNPRPS
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
     * @return \RRSVP\Stuf\InOnderzoekNNPRPS
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

}
