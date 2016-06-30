<?php

namespace RRSVP\Stuf;

class GridType extends AbstractGeometryType
{

    /**
     * @var GridLimitsType $limits
     */
    protected $limits = null;

    /**
     * @var string[] $axisName
     */
    protected $axisName = null;

    /**
     * @var int $dimension
     */
    protected $dimension = null;

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
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $limits, array $axisName, $dimension)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->limits = $limits;
      $this->axisName = $axisName;
      $this->dimension = $dimension;
    }

    /**
     * @return GridLimitsType
     */
    public function getLimits()
    {
      return $this->limits;
    }

    /**
     * @param GridLimitsType $limits
     * @return \RRSVP\Stuf\GridType
     */
    public function setLimits($limits)
    {
      $this->limits = $limits;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAxisName()
    {
      return $this->axisName;
    }

    /**
     * @param string[] $axisName
     * @return \RRSVP\Stuf\GridType
     */
    public function setAxisName(array $axisName)
    {
      $this->axisName = $axisName;
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
     * @return \RRSVP\Stuf\GridType
     */
    public function setDimension($dimension)
    {
      $this->dimension = $dimension;
      return $this;
    }

}
