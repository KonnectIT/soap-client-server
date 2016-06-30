<?php

abstract class AbstractCoordinateSystemType extends AbstractCoordinateSystemBaseType
{

    /**
     * @var IdentifierType $csID
     */
    protected $csID = null;

    /**
     * @var StringOrRefType $remarks
     */
    protected $remarks = null;

    /**
     * @var CoordinateSystemAxisRefType $usesAxis
     */
    protected $usesAxis = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $csName
     * @param ID $id
     * @param IdentifierType $csID
     * @param StringOrRefType $remarks
     * @param CoordinateSystemAxisRefType $usesAxis
     */
    public function __construct($metaDataProperty, $csName, $id, $csID, $remarks, $usesAxis)
    {
      parent::__construct($metaDataProperty, $csName, $id);
      $this->csID = $csID;
      $this->remarks = $remarks;
      $this->usesAxis = $usesAxis;
    }

    /**
     * @return IdentifierType
     */
    public function getCsID()
    {
      return $this->csID;
    }

    /**
     * @param IdentifierType $csID
     * @return AbstractCoordinateSystemType
     */
    public function setCsID($csID)
    {
      $this->csID = $csID;
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
     * @return AbstractCoordinateSystemType
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

    /**
     * @return CoordinateSystemAxisRefType
     */
    public function getUsesAxis()
    {
      return $this->usesAxis;
    }

    /**
     * @param CoordinateSystemAxisRefType $usesAxis
     * @return AbstractCoordinateSystemType
     */
    public function setUsesAxis($usesAxis)
    {
      $this->usesAxis = $usesAxis;
      return $this;
    }

}
