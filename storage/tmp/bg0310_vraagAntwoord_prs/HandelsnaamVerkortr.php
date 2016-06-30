<?php

namespace RRSVP\Stuf;

class HandelsnaamVerkortr
{

    /**
     * @var HandelsnaamVerkorte $_
     */
    protected $_ = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @param HandelsnaamVerkorte $_
     * @param NoValue $noValue
     */
    public function __construct($_, $noValue)
    {
      $this->_ = $_;
      $this->noValue = $noValue;
    }

    /**
     * @return HandelsnaamVerkorte
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param HandelsnaamVerkorte $_
     * @return \RRSVP\Stuf\HandelsnaamVerkort-r
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
     * @return \RRSVP\Stuf\HandelsnaamVerkort-r
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

}
