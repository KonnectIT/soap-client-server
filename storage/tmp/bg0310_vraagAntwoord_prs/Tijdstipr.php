<?php

namespace RRSVP\Stuf;

class Tijdstipr
{

    /**
     * @var Tijdstipe $_
     */
    protected $_ = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @var boolean $exact
     */
    protected $exact = null;

    /**
     * @param Tijdstipe $_
     * @param NoValue $noValue
     * @param boolean $exact
     */
    public function __construct($_, $noValue, $exact)
    {
      $this->_ = $_;
      $this->noValue = $noValue;
      $this->exact = $exact;
    }

    /**
     * @return Tijdstipe
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Tijdstipe $_
     * @return \RRSVP\Stuf\Tijdstip-r
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
     * @return \RRSVP\Stuf\Tijdstip-r
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExact()
    {
      return $this->exact;
    }

    /**
     * @param boolean $exact
     * @return \RRSVP\Stuf\Tijdstip-r
     */
    public function setExact($exact)
    {
      $this->exact = $exact;
      return $this;
    }

}
