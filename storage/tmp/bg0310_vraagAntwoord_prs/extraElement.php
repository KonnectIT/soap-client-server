<?php

namespace RRSVP\Stuf;

class extraElement
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $naam
     */
    protected $naam = null;

    /**
     * @var IndOnvolledigeDatum $indOnvolledigeDatum
     */
    protected $indOnvolledigeDatum = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @var boolean $exact
     */
    protected $exact = null;

    /**
     * @param string $_
     * @param string $naam
     * @param IndOnvolledigeDatum $indOnvolledigeDatum
     * @param NoValue $noValue
     * @param boolean $exact
     */
    public function __construct($_, $naam, $indOnvolledigeDatum, $noValue, $exact)
    {
      $this->_ = $_;
      $this->naam = $naam;
      $this->indOnvolledigeDatum = $indOnvolledigeDatum;
      $this->noValue = $noValue;
      $this->exact = $exact;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \RRSVP\Stuf\extraElement
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getNaam()
    {
      return $this->naam;
    }

    /**
     * @param string $naam
     * @return \RRSVP\Stuf\extraElement
     */
    public function setNaam($naam)
    {
      $this->naam = $naam;
      return $this;
    }

    /**
     * @return IndOnvolledigeDatum
     */
    public function getIndOnvolledigeDatum()
    {
      return $this->indOnvolledigeDatum;
    }

    /**
     * @param IndOnvolledigeDatum $indOnvolledigeDatum
     * @return \RRSVP\Stuf\extraElement
     */
    public function setIndOnvolledigeDatum($indOnvolledigeDatum)
    {
      $this->indOnvolledigeDatum = $indOnvolledigeDatum;
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
     * @return \RRSVP\Stuf\extraElement
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
     * @return \RRSVP\Stuf\extraElement
     */
    public function setExact($exact)
    {
      $this->exact = $exact;
      return $this;
    }

}
