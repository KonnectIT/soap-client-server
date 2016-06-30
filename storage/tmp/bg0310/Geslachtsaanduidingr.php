<?php

class Geslachtsaanduidingr
{

    /**
     * @var Geslachtsaanduidinge $_
     */
    protected $_ = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @param Geslachtsaanduidinge $_
     * @param NoValue $noValue
     */
    public function __construct($_, $noValue)
    {
      $this->_ = $_;
      $this->noValue = $noValue;
    }

    /**
     * @return Geslachtsaanduidinge
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Geslachtsaanduidinge $_
     * @return Geslachtsaanduiding-r
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
     * @return Geslachtsaanduiding-r
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

}
