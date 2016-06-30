<?php

namespace RRSVP\Stuf;

class Postcoder
{

    /**
     * @var Postcodee $_
     */
    protected $_ = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @param Postcodee $_
     * @param NoValue $noValue
     */
    public function __construct($_, $noValue)
    {
      $this->_ = $_;
      $this->noValue = $noValue;
    }

    /**
     * @return Postcodee
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Postcodee $_
     * @return \RRSVP\Stuf\Postcode-r
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
     * @return \RRSVP\Stuf\Postcode-r
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

}
