<?php

namespace RRSVP\Stuf;

class TijdstipMetIndicator extends Tijdstipe
{

    /**
     * @var Tijdstipe $_
     */
    protected $_ = null;

    /**
     * @var IndOnvolledigeDatum $indOnvolledigeDatum
     */
    protected $indOnvolledigeDatum = null;

    /**
     * @param Tijdstip $_
     * @param NoValue $noValue
     * @param boolean $exact
     * @param Tijdstipe $_
     * @param IndOnvolledigeDatum $indOnvolledigeDatum
     */
    public function __construct($_, $noValue, $exact, $indOnvolledigeDatum)
    {
      parent::__construct($_, $noValue, $exact);
      $this->_ = $_;
      $this->indOnvolledigeDatum = $indOnvolledigeDatum;
    }

    /**
     * @return Tijdstipe
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Tijdstipe $_
     * @return \RRSVP\Stuf\TijdstipMetIndicator
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
     * @return \RRSVP\Stuf\TijdstipMetIndicator
     */
    public function setIndOnvolledigeDatum($indOnvolledigeDatum)
    {
      $this->indOnvolledigeDatum = $indOnvolledigeDatum;
      return $this;
    }

}
