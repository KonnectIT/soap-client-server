<?php

class DirectedObservationAtDistanceType extends DirectedObservationType
{

    /**
     * @var MeasureType $distance
     */
    protected $distance = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param BoundingShapeType $boundedBy
     * @param LocationPropertyType $location
     * @param TimePrimitivePropertyType $validTime
     * @param FeaturePropertyType $using
     * @param TargetPropertyType $target
     * @param AssociationType $resultOf
     * @param DirectionPropertyType $direction
     * @param MeasureType $distance
     */
    public function __construct($metaDataProperty, $description, $name, $id, $boundedBy, $location, $validTime, $using, $target, $resultOf, $direction, $distance)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $boundedBy, $location, $validTime, $using, $target, $resultOf, $direction);
      $this->distance = $distance;
    }

    /**
     * @return MeasureType
     */
    public function getDistance()
    {
      return $this->distance;
    }

    /**
     * @param MeasureType $distance
     * @return DirectedObservationAtDistanceType
     */
    public function setDistance($distance)
    {
      $this->distance = $distance;
      return $this;
    }

}
