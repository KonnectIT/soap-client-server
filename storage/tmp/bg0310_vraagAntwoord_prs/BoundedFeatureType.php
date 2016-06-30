<?php

namespace RRSVP\Stuf;

abstract class BoundedFeatureType
{

    /**
     * @var MetaDataPropertyType $metaDataProperty
     */
    protected $metaDataProperty = null;

    /**
     * @var StringOrRefType $description
     */
    protected $description = null;

    /**
     * @var CodeType $name
     */
    protected $name = null;

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
     * @param BoundingShapeType $boundedBy
     * @param LocationPropertyType $location
     */
    public function __construct($metaDataProperty, $description, $name, $boundedBy, $location)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->description = $description;
      $this->name = $name;
      $this->boundedBy = $boundedBy;
      $this->location = $location;
    }

    /**
     * @return MetaDataPropertyType
     */
    public function getMetaDataProperty()
    {
      return $this->metaDataProperty;
    }

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @return \RRSVP\Stuf\BoundedFeatureType
     */
    public function setMetaDataProperty($metaDataProperty)
    {
      $this->metaDataProperty = $metaDataProperty;
      return $this;
    }

    /**
     * @return StringOrRefType
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param StringOrRefType $description
     * @return \RRSVP\Stuf\BoundedFeatureType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param CodeType $name
     * @return \RRSVP\Stuf\BoundedFeatureType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
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
     * @return \RRSVP\Stuf\BoundedFeatureType
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
     * @return \RRSVP\Stuf\BoundedFeatureType
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

}
