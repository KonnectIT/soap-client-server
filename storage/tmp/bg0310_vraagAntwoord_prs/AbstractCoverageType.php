<?php

namespace RRSVP\Stuf;

abstract class AbstractCoverageType extends AbstractFeatureType
{

    /**
     * @var DomainSetType $domainSet
     */
    protected $domainSet = null;

    /**
     * @var RangeSetType $rangeSet
     */
    protected $rangeSet = null;

    /**
     * @var int $dimension
     */
    protected $dimension = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param BoundingShapeType $boundedBy
     * @param LocationPropertyType $location
     * @param DomainSetType $domainSet
     * @param RangeSetType $rangeSet
     * @param int $dimension
     */
    public function __construct($metaDataProperty, $description, $name, $id, $boundedBy, $location, $domainSet, $rangeSet, $dimension)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $boundedBy, $location);
      $this->domainSet = $domainSet;
      $this->rangeSet = $rangeSet;
      $this->dimension = $dimension;
    }

    /**
     * @return DomainSetType
     */
    public function getDomainSet()
    {
      return $this->domainSet;
    }

    /**
     * @param DomainSetType $domainSet
     * @return \RRSVP\Stuf\AbstractCoverageType
     */
    public function setDomainSet($domainSet)
    {
      $this->domainSet = $domainSet;
      return $this;
    }

    /**
     * @return RangeSetType
     */
    public function getRangeSet()
    {
      return $this->rangeSet;
    }

    /**
     * @param RangeSetType $rangeSet
     * @return \RRSVP\Stuf\AbstractCoverageType
     */
    public function setRangeSet($rangeSet)
    {
      $this->rangeSet = $rangeSet;
      return $this;
    }

    /**
     * @return int
     */
    public function getDimension()
    {
      return $this->dimension;
    }

    /**
     * @param int $dimension
     * @return \RRSVP\Stuf\AbstractCoverageType
     */
    public function setDimension($dimension)
    {
      $this->dimension = $dimension;
      return $this;
    }

}
