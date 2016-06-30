<?php

namespace RRSVP\Stuf;

class MultiSolidCoverageType
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
     * @var MultiSolidDomainType $multiSolidDomain
     */
    protected $multiSolidDomain = null;

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
     * @param MultiSolidDomainType $multiSolidDomain
     * @param RangeSetType $rangeSet
     * @param CoverageFunctionType $coverageFunction
     */
    public function __construct($metaDataProperty, $description, $name, $boundedBy, $multiSolidDomain, $rangeSet, $coverageFunction)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->description = $description;
      $this->name = $name;
      $this->boundedBy = $boundedBy;
      $this->multiSolidDomain = $multiSolidDomain;
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
     * @return \RRSVP\Stuf\MultiSolidCoverageType
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
     * @return \RRSVP\Stuf\MultiSolidCoverageType
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
     * @return \RRSVP\Stuf\MultiSolidCoverageType
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
     * @return \RRSVP\Stuf\MultiSolidCoverageType
     */
    public function setBoundedBy($boundedBy)
    {
      $this->boundedBy = $boundedBy;
      return $this;
    }

    /**
     * @return MultiSolidDomainType
     */
    public function getMultiSolidDomain()
    {
      return $this->multiSolidDomain;
    }

    /**
     * @param MultiSolidDomainType $multiSolidDomain
     * @return \RRSVP\Stuf\MultiSolidCoverageType
     */
    public function setMultiSolidDomain($multiSolidDomain)
    {
      $this->multiSolidDomain = $multiSolidDomain;
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
     * @return \RRSVP\Stuf\MultiSolidCoverageType
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
     * @return \RRSVP\Stuf\MultiSolidCoverageType
     */
    public function setCoverageFunction($coverageFunction)
    {
      $this->coverageFunction = $coverageFunction;
      return $this;
    }

}
