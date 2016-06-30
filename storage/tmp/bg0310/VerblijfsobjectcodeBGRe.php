<?php

class VerblijfsobjectcodeBGRe
{

    /**
     * @var VerblijfsobjectcodeBGR $_
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
     * @param VerblijfsobjectcodeBGR $_
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
     * @return VerblijfsobjectcodeBGR
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param VerblijfsobjectcodeBGR $_
     * @return VerblijfsobjectcodeBGR-e
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
     * @return VerblijfsobjectcodeBGR-e
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
     * @return VerblijfsobjectcodeBGR-e
     */
    public function setExact($exact)
    {
      $this->exact = $exact;
      return $this;
    }

}
