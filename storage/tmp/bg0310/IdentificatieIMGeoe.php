<?php

class IdentificatieIMGeoe
{

    /**
     * @var IdentificatieIMGeo $_
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
     * @param IdentificatieIMGeo $_
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
     * @return IdentificatieIMGeo
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param IdentificatieIMGeo $_
     * @return IdentificatieIMGeo-e
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
     * @return IdentificatieIMGeo-e
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
     * @return IdentificatieIMGeo-e
     */
    public function setExact($exact)
    {
      $this->exact = $exact;
      return $this;
    }

}
