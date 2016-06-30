<?php

class BouwkundigeBestemminge
{

    /**
     * @var BouwkundigeBestemming $_
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
     * @param BouwkundigeBestemming $_
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
     * @return BouwkundigeBestemming
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param BouwkundigeBestemming $_
     * @return BouwkundigeBestemming-e
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
     * @return BouwkundigeBestemming-e
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
     * @return BouwkundigeBestemming-e
     */
    public function setExact($exact)
    {
      $this->exact = $exact;
      return $this;
    }

}
