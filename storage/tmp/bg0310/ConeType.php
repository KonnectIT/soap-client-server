<?php

class ConeType extends AbstractGriddedSurfaceType
{

    /**
     * @var CurveInterpolationType $horizontalCurveType
     */
    protected $horizontalCurveType = null;

    /**
     * @var CurveInterpolationType $verticalCurveType
     */
    protected $verticalCurveType = null;

    /**
     * @param row $row
     * @param CurveInterpolationType $horizontalCurveType
     * @param CurveInterpolationType $verticalCurveType
     */
    public function __construct($row, $horizontalCurveType, $verticalCurveType)
    {
      parent::__construct($row);
      $this->horizontalCurveType = $horizontalCurveType;
      $this->verticalCurveType = $verticalCurveType;
    }

    /**
     * @return CurveInterpolationType
     */
    public function getHorizontalCurveType()
    {
      return $this->horizontalCurveType;
    }

    /**
     * @param CurveInterpolationType $horizontalCurveType
     * @return ConeType
     */
    public function setHorizontalCurveType($horizontalCurveType)
    {
      $this->horizontalCurveType = $horizontalCurveType;
      return $this;
    }

    /**
     * @return CurveInterpolationType
     */
    public function getVerticalCurveType()
    {
      return $this->verticalCurveType;
    }

    /**
     * @param CurveInterpolationType $verticalCurveType
     * @return ConeType
     */
    public function setVerticalCurveType($verticalCurveType)
    {
      $this->verticalCurveType = $verticalCurveType;
      return $this;
    }

}
