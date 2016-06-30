<?php

namespace RRSVP\Stuf;

abstract class AbstractGeneralConversionType
{

    /**
     * @var MetaDataPropertyType $metaDataProperty
     */
    protected $metaDataProperty = null;

    /**
     * @var CodeType $coordinateOperationName
     */
    protected $coordinateOperationName = null;

    /**
     * @var IdentifierType $coordinateOperationID
     */
    protected $coordinateOperationID = null;

    /**
     * @var StringOrRefType $remarks
     */
    protected $remarks = null;

    /**
     * @var ExtentType $validArea
     */
    protected $validArea = null;

    /**
     * @var string $scope
     */
    protected $scope = null;

    /**
     * @var AbstractPositionalAccuracyType $_positionalAccuracy
     */
    protected $_positionalAccuracy = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $coordinateOperationName
     * @param IdentifierType $coordinateOperationID
     * @param StringOrRefType $remarks
     * @param ExtentType $validArea
     * @param string $scope
     * @param AbstractPositionalAccuracyType $_positionalAccuracy
     * @param ID $id
     */
    public function __construct($metaDataProperty, $coordinateOperationName, $coordinateOperationID, $remarks, $validArea, $scope, $_positionalAccuracy, $id)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->coordinateOperationName = $coordinateOperationName;
      $this->coordinateOperationID = $coordinateOperationID;
      $this->remarks = $remarks;
      $this->validArea = $validArea;
      $this->scope = $scope;
      $this->_positionalAccuracy = $_positionalAccuracy;
      $this->id = $id;
    }

    /**
     * @return MetaDataPropertyType
     */
    public function getMetaDataProperty()
    {
      return $this->metaDataProperty;
    }

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @return \RRSVP\Stuf\AbstractGeneralConversionType
     */
    public function setMetaDataProperty($metaDataProperty)
    {
      $this->metaDataProperty = $metaDataProperty;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getCoordinateOperationName()
    {
      return $this->coordinateOperationName;
    }

    /**
     * @param CodeType $coordinateOperationName
     * @return \RRSVP\Stuf\AbstractGeneralConversionType
     */
    public function setCoordinateOperationName($coordinateOperationName)
    {
      $this->coordinateOperationName = $coordinateOperationName;
      return $this;
    }

    /**
     * @return IdentifierType
     */
    public function getCoordinateOperationID()
    {
      return $this->coordinateOperationID;
    }

    /**
     * @param IdentifierType $coordinateOperationID
     * @return \RRSVP\Stuf\AbstractGeneralConversionType
     */
    public function setCoordinateOperationID($coordinateOperationID)
    {
      $this->coordinateOperationID = $coordinateOperationID;
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
     * @return \RRSVP\Stuf\AbstractGeneralConversionType
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
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
     * @return \RRSVP\Stuf\AbstractGeneralConversionType
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
     * @return \RRSVP\Stuf\AbstractGeneralConversionType
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

    /**
     * @return AbstractPositionalAccuracyType
     */
    public function get_positionalAccuracy()
    {
      return $this->_positionalAccuracy;
    }

    /**
     * @param AbstractPositionalAccuracyType $_positionalAccuracy
     * @return \RRSVP\Stuf\AbstractGeneralConversionType
     */
    public function set_positionalAccuracy($_positionalAccuracy)
    {
      $this->_positionalAccuracy = $_positionalAccuracy;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param ID $id
     * @return \RRSVP\Stuf\AbstractGeneralConversionType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
