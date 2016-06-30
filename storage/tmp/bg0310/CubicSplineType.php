<?php

class CubicSplineType extends AbstractCurveSegmentType
{

    /**
     * @var DirectPositionType $pos
     */
    protected $pos = null;

    /**
     * @var PointPropertyType $pointProperty
     */
    protected $pointProperty = null;

    /**
     * @var PointPropertyType $pointRep
     */
    protected $pointRep = null;

    /**
     * @var DirectPositionListType $posList
     */
    protected $posList = null;

    /**
     * @var CoordinatesType $coordinates
     */
    protected $coordinates = null;

    /**
     * @var VectorType $vectorAtStart
     */
    protected $vectorAtStart = null;

    /**
     * @var VectorType $vectorAtEnd
     */
    protected $vectorAtEnd = null;

    /**
     * @var CurveInterpolationType $interpolation
     */
    protected $interpolation = null;

    /**
     * @var int $degree
     */
    protected $degree = null;

    /**
     * @param int $numDerivativesAtStart
     * @param int $numDerivativesAtEnd
     * @param int $numDerivativeInterior
     * @param DirectPositionType $pos
     * @param PointPropertyType $pointProperty
     * @param PointPropertyType $pointRep
     * @param DirectPositionListType $posList
     * @param CoordinatesType $coordinates
     * @param VectorType $vectorAtStart
     * @param VectorType $vectorAtEnd
     * @param CurveInterpolationType $interpolation
     * @param int $degree
     */
    public function __construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior, $pos, $pointProperty, $pointRep, $posList, $coordinates, $vectorAtStart, $vectorAtEnd, $interpolation, $degree)
    {
      parent::__construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior);
      $this->pos = $pos;
      $this->pointProperty = $pointProperty;
      $this->pointRep = $pointRep;
      $this->posList = $posList;
      $this->coordinates = $coordinates;
      $this->vectorAtStart = $vectorAtStart;
      $this->vectorAtEnd = $vectorAtEnd;
      $this->interpolation = $interpolation;
      $this->degree = $degree;
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
     * @return CubicSplineType
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
     * @return CubicSplineType
     */
    public function setPointProperty($pointProperty)
    {
      $this->pointProperty = $pointProperty;
      return $this;
    }

    /**
     * @return PointPropertyType
     */
    public function getPointRep()
    {
      return $this->pointRep;
    }

    /**
     * @param PointPropertyType $pointRep
     * @return CubicSplineType
     */
    public function setPointRep($pointRep)
    {
      $this->pointRep = $pointRep;
      return $this;
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
     * @return CubicSplineType
     */
    public function setPosList($posList)
    {
      $this->posList = $posList;
      return $this;
    }

    /**
     * @return CoordinatesType
     */
    public function getCoordinates()
    {
      return $this->coordinates;
    }

    /**
     * @param CoordinatesType $coordinates
     * @return CubicSplineType
     */
    public function setCoordinates($coordinates)
    {
      $this->coordinates = $coordinates;
      return $this;
    }

    /**
     * @return VectorType
     */
    public function getVectorAtStart()
    {
      return $this->vectorAtStart;
    }

    /**
     * @param VectorType $vectorAtStart
     * @return CubicSplineType
     */
    public function setVectorAtStart($vectorAtStart)
    {
      $this->vectorAtStart = $vectorAtStart;
      return $this;
    }

    /**
     * @return VectorType
     */
    public function getVectorAtEnd()
    {
      return $this->vectorAtEnd;
    }

    /**
     * @param VectorType $vectorAtEnd
     * @return CubicSplineType
     */
    public function setVectorAtEnd($vectorAtEnd)
    {
      $this->vectorAtEnd = $vectorAtEnd;
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
     * @return CubicSplineType
     */
    public function setInterpolation($interpolation)
    {
      $this->interpolation = $interpolation;
      return $this;
    }

    /**
     * @return int
     */
    public function getDegree()
    {
      return $this->degree;
    }

    /**
     * @param int $degree
     * @return CubicSplineType
     */
    public function setDegree($degree)
    {
      $this->degree = $degree;
      return $this;
    }

}
