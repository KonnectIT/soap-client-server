<?php

class TypeInfrastructuure
{

    /**
     * @var TypeInfrastructuur $_
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
     * @param TypeInfrastructuur $_
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
     * @return TypeInfrastructuur
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param TypeInfrastructuur $_
     * @return TypeInfrastructuur-e
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
     * @return TypeInfrastructuur-e
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
     * @return TypeInfrastructuur-e
     */
    public function setExact($exact)
    {
      $this->exact = $exact;
      return $this;
    }

}
