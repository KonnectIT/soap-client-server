<?php

namespace RRSVP\Stuf;

class GeodesicStringType extends AbstractCurveSegmentType
{

    /**
     * @var DirectPositionListType $posList
     */
    protected $posList = null;

    /**
     * @var DirectPositionType $pos
     */
    protected $pos = null;

    /**
     * @var PointPropertyType $pointProperty
     */
    protected $pointProperty = null;

    /**
     * @var CurveInterpolationType $interpolation
     */
    protected $interpolation = null;

    /**
     * @param int $numDerivativesAtStart
     * @param int $numDerivativesAtEnd
     * @param int $numDerivativeInterior
     * @param DirectPositionListType $posList
     * @param DirectPositionType $pos
     * @param PointPropertyType $pointProperty
     * @param CurveInterpolationType $interpolation
     */
    public function __construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior, $posList, $pos, $pointProperty, $interpolation)
    {
      parent::__construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior);
      $this->posList = $posList;
      $this->pos = $pos;
      $this->pointProperty = $pointProperty;
      $this->interpolation = $interpolation;
    }

    /**
     * @return DirectPositionListType
     */
    public function getPosList()
    {
      return $this->posList;
    }

    /**
     * @param DirectPositionListType $posList
     * @return \RRSVP\Stuf\GeodesicStringType
     */
    public function setPosList($posList)
    {
      $this->posList = $posList;
      return $this;
    }

    /**
     * @return DirectPositionType
     */
    public function getPos()
    {
      return $this->pos;
    }

    /**
     * @param DirectPositionType $pos
     * @return \RRSVP\Stuf\GeodesicStringType
     */
    public function setPos($pos)
    {
      $this->pos = $pos;
      return $this;
    }

    /**
     * @return PointPropertyType
     */
    public function getPointProperty()
    {
      return $this->pointProperty;
    }

    /**
     * @param PointPropertyType $pointProperty
     * @return \RRSVP\Stuf\GeodesicStringType
     */
    public function setPointProperty($pointProperty)
    {
      $this->pointProperty = $pointProperty;
      return $this;
    }

    /**
     * @return CurveInterpolationType
     */
    public function getInterpolation()
    {
      return $this->interpolation;
    }

    /**
     * @param CurveInterpolationType $interpolation
     * @return \RRSVP\Stuf\GeodesicStringType
     */
    public function setInterpolation($interpolation)
    {
      $this->interpolation = $interpolation;
      return $this;
    }

}
