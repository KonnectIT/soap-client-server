<?php

class Handelsnaamr
{

    /**
     * @var Handelsnaame $_
     */
    protected $_ = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @param Handelsnaame $_
     * @param NoValue $noValue
     */
    public function __construct($_, $noValue)
    {
      $this->_ = $_;
      $this->noValue = $noValue;
    }

    /**
     * @return Handelsnaame
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Handelsnaame $_
     * @return Handelsnaam-r
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
     * @return Handelsnaam-r
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

}
