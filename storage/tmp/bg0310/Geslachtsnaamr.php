<?php

class Geslachtsnaamr
{

    /**
     * @var Geslachtsnaame $_
     */
    protected $_ = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @param Geslachtsnaame $_
     * @param NoValue $noValue
     */
    public function __construct($_, $noValue)
    {
      $this->_ = $_;
      $this->noValue = $noValue;
    }

    /**
     * @return Geslachtsnaame
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Geslachtsnaame $_
     * @return Geslachtsnaam-r
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
     * @return Geslachtsnaam-r
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

}
