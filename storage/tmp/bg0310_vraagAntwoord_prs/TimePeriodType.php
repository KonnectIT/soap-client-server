<?php

namespace RRSVP\Stuf;

class TimePeriodType extends AbstractTimeGeometricPrimitiveType
{

    /**
     * @var TimePositionType $beginPosition
     */
    protected $beginPosition = null;

    /**
     * @var TimeInstantPropertyType $begin
     */
    protected $begin = null;

    /**
     * @var TimePositionType $endPosition
     */
    protected $endPosition = null;

    /**
     * @var TimeInstantPropertyType $end
     */
    protected $end = null;

    /**
     * @var duration $duration
     */
    protected $duration = null;

    /**
     * @var TimeIntervalLengthType $timeInterval
     */
    protected $timeInterval = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param anyURI $frame
     * @param TimePositionType $beginPosition
     * @param TimeInstantPropertyType $begin
     * @param TimePositionType $endPosition
     * @param TimeInstantPropertyType $end
     * @param duration $duration
     * @param TimeIntervalLengthType $timeInterval
     */
    public function __construct($metaDataProperty, $description, $name, $id, $frame, $beginPosition, $begin, $endPosition, $end, $duration, $timeInterval)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $frame);
      $this->beginPosition = $beginPosition;
      $this->begin = $begin;
      $this->endPosition = $endPosition;
      $this->end = $end;
      $this->duration = $duration;
      $this->timeInterval = $timeInterval;
    }

    /**
     * @return TimePositionType
     */
    public function getBeginPosition()
    {
      return $this->beginPosition;
    }

    /**
     * @param TimePositionType $beginPosition
     * @return \RRSVP\Stuf\TimePeriodType
     */
    public function setBeginPosition($beginPosition)
    {
      $this->beginPosition = $beginPosition;
      return $this;
    }

    /**
     * @return TimeInstantPropertyType
     */
    public function getBegin()
    {
      return $this->begin;
    }

    /**
     * @param TimeInstantPropertyType $begin
     * @return \RRSVP\Stuf\TimePeriodType
     */
    public function setBegin($begin)
    {
      $this->begin = $begin;
      return $this;
    }

    /**
     * @return TimePositionType
     */
    public function getEndPosition()
    {
      return $this->endPosition;
    }

    /**
     * @param TimePositionType $endPosition
     * @return \RRSVP\Stuf\TimePeriodType
     */
    public function setEndPosition($endPosition)
    {
      $this->endPosition = $endPosition;
      return $this;
    }

    /**
     * @return TimeInstantPropertyType
     */
    public function getEnd()
    {
      return $this->end;
    }

    /**
     * @param TimeInstantPropertyType $end
     * @return \RRSVP\Stuf\TimePeriodType
     */
    public function setEnd($end)
    {
      $this->end = $end;
      return $this;
    }

    /**
     * @return duration
     */
    public function getDuration()
    {
      return $this->duration;
    }

    /**
     * @param duration $duration
     * @return \RRSVP\Stuf\TimePeriodType
     */
    public function setDuration($duration)
    {
      $this->duration = $duration;
      return $this;
    }

    /**
     * @return TimeIntervalLengthType
     */
    public function getTimeInterval()
    {
      return $this->timeInterval;
    }

    /**
     * @param TimeIntervalLengthType $timeInterval
     * @return \RRSVP\Stuf\TimePeriodType
     */
    public function setTimeInterval($timeInterval)
    {
      $this->timeInterval = $timeInterval;
      return $this;
    }

}
