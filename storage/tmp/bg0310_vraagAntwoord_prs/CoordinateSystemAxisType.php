<?php

namespace RRSVP\Stuf;

class CoordinateSystemAxisType extends CoordinateSystemAxisBaseType
{

    /**
     * @var IdentifierType $axisID
     */
    protected $axisID = null;

    /**
     * @var StringOrRefType $remarks
     */
    protected $remarks = null;

    /**
     * @var CodeType $axisAbbrev
     */
    protected $axisAbbrev = null;

    /**
     * @var CodeType $axisDirection
     */
    protected $axisDirection = null;

    /**
     * @var anyURI $uom
     */
    protected $uom = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $name
     * @param ID $id
     * @param IdentifierType $axisID
     * @param StringOrRefType $remarks
     * @param CodeType $axisAbbrev
     * @param CodeType $axisDirection
     * @param anyURI $uom
     */
    public function __construct($metaDataProperty, $name, $id, $axisID, $remarks, $axisAbbrev, $axisDirection, $uom)
    {
      parent::__construct($metaDataProperty, $name, $id);
      $this->axisID = $axisID;
      $this->remarks = $remarks;
      $this->axisAbbrev = $axisAbbrev;
      $this->axisDirection = $axisDirection;
      $this->uom = $uom;
    }

    /**
     * @return IdentifierType
     */
    public function getAxisID()
    {
      return $this->axisID;
    }

    /**
     * @param IdentifierType $axisID
     * @return \RRSVP\Stuf\CoordinateSystemAxisType
     */
    public function setAxisID($axisID)
    {
      $this->axisID = $axisID;
      return $this;
    }

    /**
     * @return StringOrRefType
     */
    public function getRemarks()
    {
      return $this->remarks;
    }

    /**
     * @param StringOrRefType $remarks
     * @return \RRSVP\Stuf\CoordinateSystemAxisType
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getAxisAbbrev()
    {
      return $this->axisAbbrev;
    }

    /**
     * @param CodeType $axisAbbrev
     * @return \RRSVP\Stuf\CoordinateSystemAxisType
     */
    public function setAxisAbbrev($axisAbbrev)
    {
      $this->axisAbbrev = $axisAbbrev;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getAxisDirection()
    {
      return $this->axisDirection;
    }

    /**
     * @param CodeType $axisDirection
     * @return \RRSVP\Stuf\CoordinateSystemAxisType
     */
    public function setAxisDirection($axisDirection)
    {
      $this->axisDirection = $axisDirection;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getUom()
    {
      return $this->uom;
    }

    /**
     * @param anyURI $uom
     * @return \RRSVP\Stuf\CoordinateSystemAxisType
     */
    public function setUom($uom)
    {
      $this->uom = $uom;
      return $this;
    }

}
