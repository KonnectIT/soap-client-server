<?php

class DatumMetIndicator
{

    /**
     * @var Datum $_
     */
    protected $_ = null;

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
     * @param Datum $_
     * @param IndOnvolledigeDatum $indOnvolledigeDatum
     * @param NoValue $noValue
     * @param boolean $exact
     */
    public function __construct($_, $indOnvolledigeDatum, $noValue, $exact)
    {
      $this->_ = $_;
      $this->indOnvolledigeDatum = $indOnvolledigeDatum;
      $this->noValue = $noValue;
      $this->exact = $exact;
    }

    /**
     * @return Datum
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Datum $_
     * @return DatumMetIndicator
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return DatumMetIndicator
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
     * @return DatumMetIndicator
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
     * @return DatumMetIndicator
     */
    public function setExact($exact)
    {
      $this->exact = $exact;
      return $this;
    }

}
