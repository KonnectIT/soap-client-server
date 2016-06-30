<?php

namespace RRSVP\Stuf;

class RectifiedGridCoverageType
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
     * @var RectifiedGridDomainType $rectifiedGridDomain
     */
    protected $rectifiedGridDomain = null;

    /**
     * @var RangeSetType $rangeSet
     */
    protected $rangeSet = null;

    /**
     * @var CoverageFunctionType $coverageFunction
     */
    protected $coverageFunction = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param BoundingShapeType $boundedBy
     * @param RectifiedGridDomainType $rectifiedGridDomain
     * @param RangeSetType $rangeSet
     * @param CoverageFunctionType $coverageFunction
     */
    public function __construct($metaDataProperty, $description, $name, $boundedBy, $rectifiedGridDomain, $rangeSet, $coverageFunction)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->description = $description;
      $this->name = $name;
      $this->boundedBy = $boundedBy;
      $this->rectifiedGridDomain = $rectifiedGridDomain;
      $this->rangeSet = $rangeSet;
      $this->coverageFunction = $coverageFunction;
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
     * @return \RRSVP\Stuf\RectifiedGridCoverageType
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
     * @return \RRSVP\Stuf\RectifiedGridCoverageType
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
     * @return \RRSVP\Stuf\RectifiedGridCoverageType
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
     * @return \RRSVP\Stuf\RectifiedGridCoverageType
     */
    public function setBoundedBy($boundedBy)
    {
      $this->boundedBy = $boundedBy;
      return $this;
    }

    /**
     * @return RectifiedGridDomainType
     */
    public function getRectifiedGridDomain()
    {
      return $this->rectifiedGridDomain;
    }

    /**
     * @param RectifiedGridDomainType $rectifiedGridDomain
     * @return \RRSVP\Stuf\RectifiedGridCoverageType
     */
    public function setRectifiedGridDomain($rectifiedGridDomain)
    {
      $this->rectifiedGridDomain = $rectifiedGridDomain;
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
     * @return \RRSVP\Stuf\RectifiedGridCoverageType
     */
    public function setRangeSet($rangeSet)
    {
      $this->rangeSet = $rangeSet;
      return $this;
    }

    /**
     * @return CoverageFunctionType
     */
    public function getCoverageFunction()
    {
      return $this->coverageFunction;
    }

    /**
     * @param CoverageFunctionType $coverageFunction
     * @return \RRSVP\Stuf\RectifiedGridCoverageType
     */
    public function setCoverageFunction($coverageFunction)
    {
      $this->coverageFunction = $coverageFunction;
      return $this;
    }

}
