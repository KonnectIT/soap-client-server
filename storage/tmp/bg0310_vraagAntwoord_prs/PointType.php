<?php

namespace RRSVP\Stuf;

class PointType extends AbstractGeometricPrimitiveType
{

    /**
     * @var DirectPositionType $pos
     */
    protected $pos = null;

    /**
     * @var CoordinatesType $coordinates
     */
    protected $coordinates = null;

    /**
     * @var CoordType $coord
     */
    protected $coord = null;

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
     * @param DirectPositionType $pos
     * @param CoordinatesType $coordinates
     * @param CoordType $coord
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $pos, $coordinates, $coord)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->pos = $pos;
      $this->coordinates = $coordinates;
      $this->coord = $coord;
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
     * @return \RRSVP\Stuf\PointType
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
     * @return \RRSVP\Stuf\PointType
     */
    public function setCoordinates($coordinates)
    {
      $this->coordinates = $coordinates;
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
     * @return \RRSVP\Stuf\PointType
     */
    public function setCoord($coord)
    {
      $this->coord = $coord;
      return $this;
    }

}
