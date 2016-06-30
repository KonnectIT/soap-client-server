<?php

namespace RRSVP\Stuf;

class DMSAngleType
{

    /**
     * @var DegreesType $degrees
     */
    protected $degrees = null;

    /**
     * @var DecimalMinutesType $decimalMinutes
     */
    protected $decimalMinutes = null;

    /**
     * @var ArcMinutesType $minutes
     */
    protected $minutes = null;

    /**
     * @var ArcSecondsType $seconds
     */
    protected $seconds = null;

    /**
     * @param DegreesType $degrees
     * @param DecimalMinutesType $decimalMinutes
     * @param ArcMinutesType $minutes
     * @param ArcSecondsType $seconds
     */
    public function __construct($degrees, $decimalMinutes, $minutes, $seconds)
    {
      $this->degrees = $degrees;
      $this->decimalMinutes = $decimalMinutes;
      $this->minutes = $minutes;
      $this->seconds = $seconds;
    }

    /**
     * @return DegreesType
     */
    public function getDegrees()
    {
      return $this->degrees;
    }

    /**
     * @param DegreesType $degrees
     * @return \RRSVP\Stuf\DMSAngleType
     */
    public function setDegrees($degrees)
    {
      $this->degrees = $degrees;
      return $this;
    }

    /**
     * @return DecimalMinutesType
     */
    public function getDecimalMinutes()
    {
      return $this->decimalMinutes;
    }

    /**
     * @param DecimalMinutesType $decimalMinutes
     * @return \RRSVP\Stuf\DMSAngleType
     */
    public function setDecimalMinutes($decimalMinutes)
    {
      $this->decimalMinutes = $decimalMinutes;
      return $this;
    }

    /**
     * @return ArcMinutesType
     */
    public function getMinutes()
    {
      return $this->minutes;
    }

    /**
     * @param ArcMinutesType $minutes
     * @return \RRSVP\Stuf\DMSAngleType
     */
    public function setMinutes($minutes)
    {
      $this->minutes = $minutes;
      return $this;
    }

    /**
     * @return ArcSecondsType
     */
    public function getSeconds()
    {
      return $this->seconds;
    }

    /**
     * @param ArcSecondsType $seconds
     * @return \RRSVP\Stuf\DMSAngleType
     */
    public function setSeconds($seconds)
    {
      $this->seconds = $seconds;
      return $this;
    }

}
