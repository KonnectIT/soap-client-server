<?php

namespace RRSVP\Stuf;

abstract class AbstractFeatureType extends AbstractGMLType
{

    /**
     * @var BoundingShapeType $boundedBy
     */
    protected $boundedBy = null;

    /**
     * @var LocationPropertyType $location
     */
    protected $location = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param BoundingShapeType $boundedBy
     * @param LocationPropertyType $location
     */
    public function __construct($metaDataProperty, $description, $name, $id, $boundedBy, $location)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->boundedBy = $boundedBy;
      $this->location = $location;
    }

    /**
     * @return BoundingShapeType
     */
    public function getBoundedBy()
    {
      return $this->boundedBy;
    }

    /**
     * @param BoundingShapeType $boundedBy
     * @return \RRSVP\Stuf\AbstractFeatureType
     */
    public function setBoundedBy($boundedBy)
    {
      $this->boundedBy = $boundedBy;
      return $this;
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
     * @return \RRSVP\Stuf\AbstractFeatureType
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

}
