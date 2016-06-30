<?php

abstract class AbstractDiscreteCoverageType extends AbstractCoverageType
{

    /**
     * @var CoverageFunctionType $coverageFunction
     */
    protected $coverageFunction = null;

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
     * @param CoverageFunctionType $coverageFunction
     */
    public function __construct($metaDataProperty, $description, $name, $id, $boundedBy, $location, $domainSet, $rangeSet, $dimension, $coverageFunction)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $boundedBy, $location, $domainSet, $rangeSet, $dimension);
      $this->coverageFunction = $coverageFunction;
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
     * @return AbstractDiscreteCoverageType
     */
    public function setCoverageFunction($coverageFunction)
    {
      $this->coverageFunction = $coverageFunction;
      return $this;
    }

}
