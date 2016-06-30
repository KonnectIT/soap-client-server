<?php

class Verblijfstitelcodee
{

    /**
     * @var Verblijfstitelcode $_
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
     * @param Verblijfstitelcode $_
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
     * @return Verblijfstitelcode
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Verblijfstitelcode $_
     * @return Verblijfstitelcode-e
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
     * @return Verblijfstitelcode-e
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
     * @return Verblijfstitelcode-e
     */
    public function setExact($exact)
    {
      $this->exact = $exact;
      return $this;
    }

}
