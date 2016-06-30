<?php

namespace RRSVP\Stuf;

class EnvelopeType
{

    /**
     * @var DirectPositionType $lowerCorner
     */
    protected $lowerCorner = null;

    /**
     * @var DirectPositionType $upperCorner
     */
    protected $upperCorner = null;

    /**
     * @var CoordType $coord
     */
    protected $coord = null;

    /**
     * @var DirectPositionType $pos
     */
    protected $pos = null;

    /**
     * @var CoordinatesType $coordinates
     */
    protected $coordinates = null;

    /**
     * @var anyURI $srsName
     */
    protected $srsName = null;

    /**
     * @var int $srsDimension
     */
    protected $srsDimension = null;

    /**
     * @var NCNameList $axisLabels
     */
    protected $axisLabels = null;

    /**
     * @var NCNameList $uomLabels
     */
    protected $uomLabels = null;

    /**
     * @param DirectPositionType $lowerCorner
     * @param DirectPositionType $upperCorner
     * @param CoordType $coord
     * @param DirectPositionType $pos
     * @param CoordinatesType $coordinates
     * @param anyURI $srsName
     * @param int $srsDimension
     * @param NCNameList $axisLabels
     * @param NCNameList $uomLabels
     */
    public function __construct($lowerCorner, $upperCorner, $coord, $pos, $coordinates, $srsName, $srsDimension, $axisLabels, $uomLabels)
    {
      $this->lowerCorner = $lowerCorner;
      $this->upperCorner = $upperCorner;
      $this->coord = $coord;
      $this->pos = $pos;
      $this->coordinates = $coordinates;
      $this->srsName = $srsName;
      $this->srsDimension = $srsDimension;
      $this->axisLabels = $axisLabels;
      $this->uomLabels = $uomLabels;
    }

    /**
     * @return DirectPositionType
     */
    public function getLowerCorner()
    {
      return $this->lowerCorner;
    }

    /**
     * @param DirectPositionType $lowerCorner
     * @return \RRSVP\Stuf\EnvelopeType
     */
    public function setLowerCorner($lowerCorner)
    {
      $this->lowerCorner = $lowerCorner;
      return $this;
    }

    /**
     * @return DirectPositionType
     */
    public function getUpperCorner()
    {
      return $this->upperCorner;
    }

    /**
     * @param DirectPositionType $upperCorner
     * @return \RRSVP\Stuf\EnvelopeType
     */
    public function setUpperCorner($upperCorner)
    {
      $this->upperCorner = $upperCorner;
      return $this;
    }

    /**
     * @return CoordType
     */
    public function getCoord()
    {
      return $this->coord;
    }

    /**
     * @param CoordType $coord
     * @return \RRSVP\Stuf\EnvelopeType
     */
    public function setCoord($coord)
    {
      $this->coord = $coord;
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
     * @return \RRSVP\Stuf\EnvelopeType
     */
    public function setPos($pos)
    {
      $this->pos = $pos;
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
     * @return \RRSVP\Stuf\EnvelopeType
     */
    public function setCoordinates($coordinates)
    {
      $this->coordinates = $coordinates;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getSrsName()
    {
      return $this->srsName;
    }

    /**
     * @param anyURI $srsName
     * @return \RRSVP\Stuf\EnvelopeType
     */
    public function setSrsName($srsName)
    {
      $this->srsName = $srsName;
      return $this;
    }

    /**
     * @return int
     */
    public function getSrsDimension()
    {
      return $this->srsDimension;
    }

    /**
     * @param int $srsDimension
     * @return \RRSVP\Stuf\EnvelopeType
     */
    public function setSrsDimension($srsDimension)
    {
      $this->srsDimension = $srsDimension;
      return $this;
    }

    /**
     * @return NCNameList
     */
    public function getAxisLabels()
    {
      return $this->axisLabels;
    }

    /**
     * @param NCNameList $axisLabels
     * @return \RRSVP\Stuf\EnvelopeType
     */
    public function setAxisLabels($axisLabels)
    {
      $this->axisLabels = $axisLabels;
      return $this;
    }

    /**
     * @return NCNameList
     */
    public function getUomLabels()
    {
      return $this->uomLabels;
    }

    /**
     * @param NCNameList $uomLabels
     * @return \RRSVP\Stuf\EnvelopeType
     */
    public function setUomLabels($uomLabels)
    {
      $this->uomLabels = $uomLabels;
      return $this;
    }

}
