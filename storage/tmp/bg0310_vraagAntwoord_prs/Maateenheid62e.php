<?php

namespace RRSVP\Stuf;

class Maateenheid62e
{

    /**
     * @var Maateenheid62 $_
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
     * @param Maateenheid62 $_
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
     * @return Maateenheid62
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Maateenheid62 $_
     * @return \RRSVP\Stuf\Maateenheid6-2-e
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
     * @return \RRSVP\Stuf\Maateenheid6-2-e
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
     * @return \RRSVP\Stuf\Maateenheid6-2-e
     */
    public function setExact($exact)
    {
      $this->exact = $exact;
      return $this;
    }

}
