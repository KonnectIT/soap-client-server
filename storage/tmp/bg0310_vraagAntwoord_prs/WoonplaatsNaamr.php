<?php

namespace RRSVP\Stuf;

class WoonplaatsNaamr
{

    /**
     * @var WoonplaatsNaame $_
     */
    protected $_ = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @param WoonplaatsNaame $_
     * @param NoValue $noValue
     */
    public function __construct($_, $noValue)
    {
      $this->_ = $_;
      $this->noValue = $noValue;
    }

    /**
     * @return WoonplaatsNaame
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param WoonplaatsNaame $_
     * @return \RRSVP\Stuf\WoonplaatsNaam-r
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return \RRSVP\Stuf\WoonplaatsNaam-r
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

}
