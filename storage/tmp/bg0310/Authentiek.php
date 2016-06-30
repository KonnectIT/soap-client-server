<?php

class Authentiek extends Indicatiee
{

    /**
     * @var Indicatiee $_
     */
    protected $_ = null;

    /**
     * @var boolean $metagegeven
     */
    protected $metagegeven = null;

    /**
     * @param Indicatie $_
     * @param NoValue $noValue
     * @param boolean $exact
     * @param Indicatiee $_
     * @param boolean $metagegeven
     */
    public function __construct($_, $noValue, $exact, $metagegeven)
    {
      parent::__construct($_, $noValue, $exact);
      $this->_ = $_;
      $this->metagegeven = $metagegeven;
    }

    /**
     * @return Indicatiee
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Indicatiee $_
     * @return Authentiek
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMetagegeven()
    {
      return $this->metagegeven;
    }

    /**
     * @param boolean $metagegeven
     * @return Authentiek
     */
    public function setMetagegeven($metagegeven)
    {
      $this->metagegeven = $metagegeven;
      return $this;
    }

}
