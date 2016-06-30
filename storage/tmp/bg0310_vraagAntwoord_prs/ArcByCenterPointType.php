<?php

namespace RRSVP\Stuf;

class ArcByCenterPointType extends AbstractCurveSegmentType
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
     * @var LengthType $radius
     */
    protected $radius = null;

    /**
     * @var AngleType $startAngle
     */
    protected $startAngle = null;

    /**
     * @var AngleType $endAngle
     */
    protected $endAngle = null;

    /**
     * @var CurveInterpolationType $interpolation
     */
    protected $interpolation = null;

    /**
     * @var int $numArc
     */
    protected $numArc = null;

    /**
     * @param int $numDerivativesAtStart
     * @param int $numDerivativesAtEnd
     * @param int $numDerivativeInterior
     * @param DirectPositionType $pos
     * @param PointPropertyType $pointProperty
     * @param PointPropertyType $pointRep
     * @param DirectPositionListType $posList
     * @param CoordinatesType $coordinates
     * @param LengthType $radius
     * @param CurveInterpolationType $interpolation
     * @param int $numArc
     */
    public function __construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior, $pos, $pointProperty, $pointRep, $posList, $coordinates, $radius, $interpolation, $numArc)
    {
      parent::__construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior);
      $this->pos = $pos;
      $this->pointProperty = $pointProperty;
      $this->pointRep = $pointRep;
      $this->posList = $posList;
      $this->coordinates = $coordinates;
      $this->radius = $radius;
      $this->interpolation = $interpolation;
      $this->numArc = $numArc;
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
     * @return \RRSVP\Stuf\ArcByCenterPointType
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
     * @return \RRSVP\Stuf\ArcByCenterPointType
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
     * @return \RRSVP\Stuf\ArcByCenterPointType
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
     * @return \RRSVP\Stuf\ArcByCenterPointType
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
     * @return \RRSVP\Stuf\ArcByCenterPointType
     */
    public function setCoordinates($coordinates)
    {
      $this->coordinates = $coordinates;
      return $this;
    }

    /**
     * @return LengthType
     */
    public function getRadius()
    {
      return $this->radius;
    }

    /**
     * @param LengthType $radius
     * @return \RRSVP\Stuf\ArcByCenterPointType
     */
    public function setRadius($radius)
    {
      $this->radius = $radius;
      return $this;
    }

    /**
     * @return AngleType
     */
    public function getStartAngle()
    {
      return $this->startAngle;
    }

    /**
     * @param AngleType $startAngle
     * @return \RRSVP\Stuf\ArcByCenterPointType
     */
    public function setStartAngle($startAngle)
    {
      $this->startAngle = $startAngle;
      return $this;
    }

    /**
     * @return AngleType
     */
    public function getEndAngle()
    {
      return $this->endAngle;
    }

    /**
     * @param AngleType $endAngle
     * @return \RRSVP\Stuf\ArcByCenterPointType
     */
    public function setEndAngle($endAngle)
    {
      $this->endAngle = $endAngle;
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
     * @return \RRSVP\Stuf\ArcByCenterPointType
     */
    public function setInterpolation($interpolation)
    {
      $this->interpolation = $interpolation;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumArc()
    {
      return $this->numArc;
    }

    /**
     * @param int $numArc
     * @return \RRSVP\Stuf\ArcByCenterPointType
     */
    public function setNumArc($numArc)
    {
      $this->numArc = $numArc;
      return $this;
    }

}
