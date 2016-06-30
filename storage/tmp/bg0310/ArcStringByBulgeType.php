<?php

class ArcStringByBulgeType extends AbstractCurveSegmentType
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
     * @var double[] $bulge
     */
    protected $bulge = null;

    /**
     * @var VectorType[] $normal
     */
    protected $normal = null;

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
     * @param double[] $bulge
     * @param VectorType[] $normal
     * @param CurveInterpolationType $interpolation
     * @param int $numArc
     */
    public function __construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior, $pos, $pointProperty, $pointRep, $posList, $coordinates, array $bulge, array $normal, $interpolation, $numArc)
    {
      parent::__construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior);
      $this->pos = $pos;
      $this->pointProperty = $pointProperty;
      $this->pointRep = $pointRep;
      $this->posList = $posList;
      $this->coordinates = $coordinates;
      $this->bulge = $bulge;
      $this->normal = $normal;
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
     * @return ArcStringByBulgeType
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
     * @return ArcStringByBulgeType
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
     * @return ArcStringByBulgeType
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
     * @return ArcStringByBulgeType
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
     * @return ArcStringByBulgeType
     */
    public function setCoordinates($coordinates)
    {
      $this->coordinates = $coordinates;
      return $this;
    }

    /**
     * @return double[]
     */
    public function getBulge()
    {
      return $this->bulge;
    }

    /**
     * @param double[] $bulge
     * @return ArcStringByBulgeType
     */
    public function setBulge(array $bulge)
    {
      $this->bulge = $bulge;
      return $this;
    }

    /**
     * @return VectorType[]
     */
    public function getNormal()
    {
      return $this->normal;
    }

    /**
     * @param VectorType[] $normal
     * @return ArcStringByBulgeType
     */
    public function setNormal(array $normal)
    {
      $this->normal = $normal;
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
     * @return ArcStringByBulgeType
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
     * @return ArcStringByBulgeType
     */
    public function setNumArc($numArc)
    {
      $this->numArc = $numArc;
      return $this;
    }

}
