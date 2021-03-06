<?php

class NaamgevingsObjectr
{

    /**
     * @var NaamgevingObjecte $_
     */
    protected $_ = null;

    /**
     * @var NoValue $noValue
     */
    protected $noValue = null;

    /**
     * @param NaamgevingObjecte $_
     * @param NoValue $noValue
     */
    public function __construct($_, $noValue)
    {
      $this->_ = $_;
      $this->noValue = $noValue;
    }

    /**
     * @return NaamgevingObjecte
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param NaamgevingObjecte $_
     * @return NaamgevingsObject-r
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
     * @return NaamgevingsObject-r
     */
    public function setNoValue($noValue)
    {
      $this->noValue = $noValue;
      return $this;
    }

}
