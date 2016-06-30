<?php

namespace RRSVP\Stuf;

class BSplineType extends AbstractCurveSegmentType
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
     * @var int $degree
     */
    protected $degree = null;

    /**
     * @var KnotPropertyType[] $knot
     */
    protected $knot = null;

    /**
     * @var CurveInterpolationType $interpolation
     */
    protected $interpolation = null;

    /**
     * @var boolean $isPolynomial
     */
    protected $isPolynomial = null;

    /**
     * @var KnotTypesType $knotType
     */
    protected $knotType = null;

    /**
     * @param int $numDerivativesAtStart
     * @param int $numDerivativesAtEnd
     * @param int $numDerivativeInterior
     * @param DirectPositionType $pos
     * @param PointPropertyType $pointProperty
     * @param PointPropertyType $pointRep
     * @param DirectPositionListType $posList
     * @param CoordinatesType $coordinates
     * @param int $degree
     * @param KnotPropertyType[] $knot
     * @param CurveInterpolationType $interpolation
     * @param boolean $isPolynomial
     * @param KnotTypesType $knotType
     */
    public function __construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior, $pos, $pointProperty, $pointRep, $posList, $coordinates, $degree, array $knot, $interpolation, $isPolynomial, $knotType)
    {
      parent::__construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior);
      $this->pos = $pos;
      $this->pointProperty = $pointProperty;
      $this->pointRep = $pointRep;
      $this->posList = $posList;
      $this->coordinates = $coordinates;
      $this->degree = $degree;
      $this->knot = $knot;
      $this->interpolation = $interpolation;
      $this->isPolynomial = $isPolynomial;
      $this->knotType = $knotType;
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
     * @return \RRSVP\Stuf\BSplineType
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
     * @return \RRSVP\Stuf\BSplineType
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
     * @return \RRSVP\Stuf\BSplineType
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
     * @return \RRSVP\Stuf\BSplineType
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
     * @return \RRSVP\Stuf\BSplineType
     */
    public function setCoordinates($coordinates)
    {
      $this->coordinates = $coordinates;
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
     * @return \RRSVP\Stuf\BSplineType
     */
    public function setDegree($degree)
    {
      $this->degree = $degree;
      return $this;
    }

    /**
     * @return KnotPropertyType[]
     */
    public function getKnot()
    {
      return $this->knot;
    }

    /**
     * @param KnotPropertyType[] $knot
     * @return \RRSVP\Stuf\BSplineType
     */
    public function setKnot(array $knot)
    {
      $this->knot = $knot;
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
     * @return \RRSVP\Stuf\BSplineType
     */
    public function setInterpolation($interpolation)
    {
      $this->interpolation = $interpolation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPolynomial()
    {
      return $this->isPolynomial;
    }

    /**
     * @param boolean $isPolynomial
     * @return \RRSVP\Stuf\BSplineType
     */
    public function setIsPolynomial($isPolynomial)
    {
      $this->isPolynomial = $isPolynomial;
      return $this;
    }

    /**
     * @return KnotTypesType
     */
    public function getKnotType()
    {
      return $this->knotType;
    }

    /**
     * @param KnotTypesType $knotType
     * @return \RRSVP\Stuf\BSplineType
     */
    public function setKnotType($knotType)
    {
      $this->knotType = $knotType;
      return $this;
    }

}
