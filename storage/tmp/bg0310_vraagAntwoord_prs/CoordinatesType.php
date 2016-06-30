<?php

namespace RRSVP\Stuf;

class CoordinatesType
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $decimal
     */
    protected $decimal = null;

    /**
     * @var string $cs
     */
    protected $cs = null;

    /**
     * @var string $ts
     */
    protected $ts = null;

    /**
     * @param string $_
     * @param string $decimal
     * @param string $cs
     * @param string $ts
     */
    public function __construct($_, $decimal, $cs, $ts)
    {
      $this->_ = $_;
      $this->decimal = $decimal;
      $this->cs = $cs;
      $this->ts = $ts;
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
     * @return \RRSVP\Stuf\CoordinatesType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getDecimal()
    {
      return $this->decimal;
    }

    /**
     * @param string $decimal
     * @return \RRSVP\Stuf\CoordinatesType
     */
    public function setDecimal($decimal)
    {
      $this->decimal = $decimal;
      return $this;
    }

    /**
     * @return string
     */
    public function getCs()
    {
      return $this->cs;
    }

    /**
     * @param string $cs
     * @return \RRSVP\Stuf\CoordinatesType
     */
    public function setCs($cs)
    {
      $this->cs = $cs;
      return $this;
    }

    /**
     * @return string
     */
    public function getTs()
    {
      return $this->ts;
    }

    /**
     * @param string $ts
     * @return \RRSVP\Stuf\CoordinatesType
     */
    public function setTs($ts)
    {
      $this->ts = $ts;
      return $this;
    }

}
