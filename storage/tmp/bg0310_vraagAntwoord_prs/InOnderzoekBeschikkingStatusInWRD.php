<?php

namespace RRSVP\Stuf;

class InOnderzoekBeschikkingStatusInWRD
{

    /**
     * @var InOnderzoekBeschikkingStatusInWRDbasis $_
     */
    protected $_ = null;

    /**
     * @var boolean $metagegeven
     */
    protected $metagegeven = null;

    /**
     * @param InOnderzoekBeschikkingStatusInWRDbasis $_
     * @param boolean $metagegeven
     */
    public function __construct($_, $metagegeven)
    {
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
    }

    /**
     * @return InOnderzoekBeschikkingStatusInWRDbasis
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param InOnderzoekBeschikkingStatusInWRDbasis $_
     * @return \RRSVP\Stuf\InOnderzoekBeschikkingStatusInWRD
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
     * @return \RRSVP\Stuf\InOnderzoekBeschikkingStatusInWRD
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

}
