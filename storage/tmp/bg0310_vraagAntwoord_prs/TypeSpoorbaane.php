<?php

namespace RRSVP\Stuf;

class TypeSpoorbaane
{

    /**
     * @var TypeSpoorbaan $_
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
     * @param TypeSpoorbaan $_
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
     * @return TypeSpoorbaan
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param TypeSpoorbaan $_
     * @return \RRSVP\Stuf\TypeSpoorbaan-e
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
     * @return \RRSVP\Stuf\TypeSpoorbaan-e
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
     * @return \RRSVP\Stuf\TypeSpoorbaan-e
     */
    public function setExact($exact)
    {
      $this->exact = $exact;
      return $this;
    }

}
