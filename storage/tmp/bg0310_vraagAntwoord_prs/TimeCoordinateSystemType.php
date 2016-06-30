<?php

namespace RRSVP\Stuf;

class TimeCoordinateSystemType extends AbstractTimeReferenceSystemType
{

    /**
     * @var TimePositionType $originPosition
     */
    protected $originPosition = null;

    /**
     * @var TimeInstantPropertyType $origin
     */
    protected $origin = null;

    /**
     * @var TimeIntervalLengthType $interval
     */
    protected $interval = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param TimePositionType $originPosition
     * @param TimeInstantPropertyType $origin
     * @param TimeIntervalLengthType $interval
     */
    public function __construct($metaDataProperty, $description, $name, $id, $originPosition, $origin, $interval)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->originPosition = $originPosition;
      $this->origin = $origin;
      $this->interval = $interval;
    }

    /**
     * @return TimePositionType
     */
    public function getOriginPosition()
    {
      return $this->originPosition;
    }

    /**
     * @param TimePositionType $originPosition
     * @return \RRSVP\Stuf\TimeCoordinateSystemType
     */
    public function setOriginPosition($originPosition)
    {
      $this->originPosition = $originPosition;
      return $this;
    }

    /**
     * @return TimeInstantPropertyType
     */
    public function getOrigin()
    {
      return $this->origin;
    }

    /**
     * @param TimeInstantPropertyType $origin
     * @return \RRSVP\Stuf\TimeCoordinateSystemType
     */
    public function setOrigin($origin)
    {
      $this->origin = $origin;
      return $this;
    }

    /**
     * @return TimeIntervalLengthType
     */
    public function getInterval()
    {
      return $this->interval;
    }

    /**
     * @param TimeIntervalLengthType $interval
     * @return \RRSVP\Stuf\TimeCoordinateSystemType
     */
    public function setInterval($interval)
    {
      $this->interval = $interval;
      return $this;
    }

}
