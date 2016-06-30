<?php

namespace RRSVP\Stuf;

class RectifiedGridType extends GridType
{

    /**
     * @var PointPropertyType $origin
     */
    protected $origin = null;

    /**
     * @var VectorType[] $offsetVector
     */
    protected $offsetVector = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param string $gid
     * @param anyURI $srsName
     * @param int $srsDimension
     * @param NCNameList $axisLabels
     * @param NCNameList $uomLabels
     * @param GridLimitsType $limits
     * @param string[] $axisName
     * @param int $dimension
     * @param PointPropertyType $origin
     * @param VectorType[] $offsetVector
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $limits, array $axisName, $dimension, $origin, array $offsetVector)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $limits, $axisName, $dimension);
      $this->origin = $origin;
      $this->offsetVector = $offsetVector;
    }

    /**
     * @return PointPropertyType
     */
    public function getOrigin()
    {
      return $this->origin;
    }

    /**
     * @param PointPropertyType $origin
     * @return \RRSVP\Stuf\RectifiedGridType
     */
    public function setOrigin($origin)
    {
      $this->origin = $origin;
      return $this;
    }

    /**
     * @return VectorType[]
     */
    public function getOffsetVector()
    {
      return $this->offsetVector;
    }

    /**
     * @param VectorType[] $offsetVector
     * @return \RRSVP\Stuf\RectifiedGridType
     */
    public function setOffsetVector(array $offsetVector)
    {
      $this->offsetVector = $offsetVector;
      return $this;
    }

}
