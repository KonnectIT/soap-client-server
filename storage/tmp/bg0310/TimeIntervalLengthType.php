<?php

class TimeIntervalLengthType
{

    /**
     * @var float $_
     */
    protected $_ = null;

    /**
     * @var TimeUnitType $unit
     */
    protected $unit = null;

    /**
     * @var int $radix
     */
    protected $radix = null;

    /**
     * @var int $factor
     */
    protected $factor = null;

    /**
     * @param float $_
     * @param TimeUnitType $unit
     * @param int $radix
     * @param int $factor
     */
    public function __construct($_, $unit, $radix, $factor)
    {
      $this->_ = $_;
      $this->unit = $unit;
      $this->radix = $radix;
      $this->factor = $factor;
    }

    /**
     * @return float
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param float $_
     * @return TimeIntervalLengthType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return TimeUnitType
     */
    public function getUnit()
    {
      return $this->unit;
    }

    /**
     * @param TimeUnitType $unit
     * @return TimeIntervalLengthType
     */
    public function setUnit($unit)
    {
      $this->unit = $unit;
      return $this;
    }

    /**
     * @return int
     */
    public function getRadix()
    {
      return $this->radix;
    }

    /**
     * @param int $radix
     * @return TimeIntervalLengthType
     */
    public function setRadix($radix)
    {
      $this->radix = $radix;
      return $this;
    }

    /**
     * @return int
     */
    public function getFactor()
    {
      return $this->factor;
    }

    /**
     * @param int $factor
     * @return TimeIntervalLengthType
     */
    public function setFactor($factor)
    {
      $this->factor = $factor;
      return $this;
    }

}
