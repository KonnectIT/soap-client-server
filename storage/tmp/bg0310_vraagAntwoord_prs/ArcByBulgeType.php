<?php

namespace RRSVP\Stuf;

class ArcByBulgeType
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
     * @var float $bulge
     */
    protected $bulge = null;

    /**
     * @var VectorType $normal
     */
    protected $normal = null;

    /**
     * @var int $numArc
     */
    protected $numArc = null;

    /**
     * @param DirectPositionType $pos
     * @param PointPropertyType $pointProperty
     * @param PointPropertyType $pointRep
     * @param DirectPositionListType $posList
     * @param CoordinatesType $coordinates
     * @param float $bulge
     * @param VectorType $normal
     * @param int $numArc
     */
    public function __construct($pos, $pointProperty, $pointRep, $posList, $coordinates, $bulge, $normal, $numArc)
    {
      $this->pos = $pos;
      $this->pointProperty = $pointProperty;
      $this->pointRep = $pointRep;
      $this->posList = $posList;
      $this->coordinates = $coordinates;
      $this->bulge = $bulge;
      $this->normal = $normal;
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
     * @return \RRSVP\Stuf\ArcByBulgeType
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
     * @return \RRSVP\Stuf\ArcByBulgeType
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
     * @return \RRSVP\Stuf\ArcByBulgeType
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
     * @return \RRSVP\Stuf\ArcByBulgeType
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
     * @return \RRSVP\Stuf\ArcByBulgeType
     */
    public function setCoordinates($coordinates)
    {
      $this->coordinates = $coordinates;
      return $this;
    }

    /**
     * @return float
     */
    public function getBulge()
    {
      return $this->bulge;
    }

    /**
     * @param float $bulge
     * @return \RRSVP\Stuf\ArcByBulgeType
     */
    public function setBulge($bulge)
    {
      $this->bulge = $bulge;
      return $this;
    }

    /**
     * @return VectorType
     */
    public function getNormal()
    {
      return $this->normal;
    }

    /**
     * @param VectorType $normal
     * @return \RRSVP\Stuf\ArcByBulgeType
     */
    public function setNormal($normal)
    {
      $this->normal = $normal;
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
     * @return \RRSVP\Stuf\ArcByBulgeType
     */
    public function setNumArc($numArc)
    {
      $this->numArc = $numArc;
      return $this;
    }

}
