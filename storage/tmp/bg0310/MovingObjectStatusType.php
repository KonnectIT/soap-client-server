<?php

class MovingObjectStatusType extends AbstractTimeSliceType
{

    /**
     * @var LocationPropertyType $location
     */
    protected $location = null;

    /**
     * @var MeasureType $speed
     */
    protected $speed = null;

    /**
     * @var DirectionPropertyType $bearing
     */
    protected $bearing = null;

    /**
     * @var MeasureType $acceleration
     */
    protected $acceleration = null;

    /**
     * @var MeasureType $elevation
     */
    protected $elevation = null;

    /**
     * @var StringOrRefType $status
     */
    protected $status = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param TimePrimitivePropertyType $validTime
     * @param StringOrRefType $dataSource
     * @param LocationPropertyType $location
     * @param StringOrRefType $status
     */
    public function __construct($metaDataProperty, $description, $name, $id, $validTime, $dataSource, $location, $status)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $validTime, $dataSource);
      $this->location = $location;
      $this->status = $status;
    }

    /**
     * @return LocationPropertyType
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param LocationPropertyType $location
     * @return MovingObjectStatusType
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getSpeed()
    {
      return $this->speed;
    }

    /**
     * @param MeasureType $speed
     * @return MovingObjectStatusType
     */
    public function setSpeed($speed)
    {
      $this->speed = $speed;
      return $this;
    }

    /**
     * @return DirectionPropertyType
     */
    public function getBearing()
    {
      return $this->bearing;
    }

    /**
     * @param DirectionPropertyType $bearing
     * @return MovingObjectStatusType
     */
    public function setBearing($bearing)
    {
      $this->bearing = $bearing;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getAcceleration()
    {
      return $this->acceleration;
    }

    /**
     * @param MeasureType $acceleration
     * @return MovingObjectStatusType
     */
    public function setAcceleration($acceleration)
    {
      $this->acceleration = $acceleration;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getElevation()
    {
      return $this->elevation;
    }

    /**
     * @param MeasureType $elevation
     * @return MovingObjectStatusType
     */
    public function setElevation($elevation)
    {
      $this->elevation = $elevation;
      return $this;
    }

    /**
     * @return StringOrRefType
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param StringOrRefType $status
     * @return MovingObjectStatusType
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
