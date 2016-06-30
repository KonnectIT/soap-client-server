<?php

abstract class AbstractDatumType extends AbstractDatumBaseType
{

    /**
     * @var IdentifierType $datumID
     */
    protected $datumID = null;

    /**
     * @var StringOrRefType $remarks
     */
    protected $remarks = null;

    /**
     * @var CodeType $anchorPoint
     */
    protected $anchorPoint = null;

    /**
     * @var date $realizationEpoch
     */
    protected $realizationEpoch = null;

    /**
     * @var ExtentType $validArea
     */
    protected $validArea = null;

    /**
     * @var string $scope
     */
    protected $scope = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $datumName
     * @param ID $id
     * @param IdentifierType $datumID
     * @param StringOrRefType $remarks
     * @param CodeType $anchorPoint
     * @param date $realizationEpoch
     * @param ExtentType $validArea
     * @param string $scope
     */
    public function __construct($metaDataProperty, $datumName, $id, $datumID, $remarks, $anchorPoint, $realizationEpoch, $validArea, $scope)
    {
      parent::__construct($metaDataProperty, $datumName, $id);
      $this->datumID = $datumID;
      $this->remarks = $remarks;
      $this->anchorPoint = $anchorPoint;
      $this->realizationEpoch = $realizationEpoch;
      $this->validArea = $validArea;
      $this->scope = $scope;
    }

    /**
     * @return IdentifierType
     */
    public function getDatumID()
    {
      return $this->datumID;
    }

    /**
     * @param IdentifierType $datumID
     * @return AbstractDatumType
     */
    public function setDatumID($datumID)
    {
      $this->datumID = $datumID;
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
     * @return AbstractDatumType
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getAnchorPoint()
    {
      return $this->anchorPoint;
    }

    /**
     * @param CodeType $anchorPoint
     * @return AbstractDatumType
     */
    public function setAnchorPoint($anchorPoint)
    {
      $this->anchorPoint = $anchorPoint;
      return $this;
    }

    /**
     * @return date
     */
    public function getRealizationEpoch()
    {
      return $this->realizationEpoch;
    }

    /**
     * @param date $realizationEpoch
     * @return AbstractDatumType
     */
    public function setRealizationEpoch($realizationEpoch)
    {
      $this->realizationEpoch = $realizationEpoch;
      return $this;
    }

    /**
     * @return ExtentType
     */
    public function getValidArea()
    {
      return $this->validArea;
    }

    /**
     * @param ExtentType $validArea
     * @return AbstractDatumType
     */
    public function setValidArea($validArea)
    {
      $this->validArea = $validArea;
      return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
      return $this->scope;
    }

    /**
     * @param string $scope
     * @return AbstractDatumType
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
