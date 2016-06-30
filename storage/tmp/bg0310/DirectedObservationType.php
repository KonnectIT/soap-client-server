<?php

class DirectedObservationType extends ObservationType
{

    /**
     * @var DirectionPropertyType $direction
     */
    protected $direction = null;

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
     */
    public function __construct($metaDataProperty, $description, $name, $id, $boundedBy, $location, $validTime, $using, $target, $resultOf, $direction)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $boundedBy, $location, $validTime, $using, $target, $resultOf);
      $this->direction = $direction;
    }

    /**
     * @return DirectionPropertyType
     */
    public function getDirection()
    {
      return $this->direction;
    }

    /**
     * @param DirectionPropertyType $direction
     * @return DirectedObservationType
     */
    public function setDirection($direction)
    {
      $this->direction = $direction;
      return $this;
    }

}
