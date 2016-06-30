<?php

class MultiSurfaceCoverageType
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
     * @var MultiSurfaceDomainType $multiSurfaceDomain
     */
    protected $multiSurfaceDomain = null;

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
     * @param MultiSurfaceDomainType $multiSurfaceDomain
     * @param RangeSetType $rangeSet
     * @param CoverageFunctionType $coverageFunction
     */
    public function __construct($metaDataProperty, $description, $name, $boundedBy, $multiSurfaceDomain, $rangeSet, $coverageFunction)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->description = $description;
      $this->name = $name;
      $this->boundedBy = $boundedBy;
      $this->multiSurfaceDomain = $multiSurfaceDomain;
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
     * @return MultiSurfaceCoverageType
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
     * @return MultiSurfaceCoverageType
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
     * @return MultiSurfaceCoverageType
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
     * @return MultiSurfaceCoverageType
     */
    public function setBoundedBy($boundedBy)
    {
      $this->boundedBy = $boundedBy;
      return $this;
    }

    /**
     * @return MultiSurfaceDomainType
     */
    public function getMultiSurfaceDomain()
    {
      return $this->multiSurfaceDomain;
    }

    /**
     * @param MultiSurfaceDomainType $multiSurfaceDomain
     * @return MultiSurfaceCoverageType
     */
    public function setMultiSurfaceDomain($multiSurfaceDomain)
    {
      $this->multiSurfaceDomain = $multiSurfaceDomain;
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
     * @return MultiSurfaceCoverageType
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
     * @return MultiSurfaceCoverageType
     */
    public function setCoverageFunction($coverageFunction)
    {
      $this->coverageFunction = $coverageFunction;
      return $this;
    }

}
