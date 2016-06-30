<?php

abstract class AbstractCoordinateOperationType extends AbstractCoordinateOperationBaseType
{

    /**
     * @var IdentifierType $coordinateOperationID
     */
    protected $coordinateOperationID = null;

    /**
     * @var StringOrRefType $remarks
     */
    protected $remarks = null;

    /**
     * @var string $operationVersion
     */
    protected $operationVersion = null;

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
     * @var CRSRefType $sourceCRS
     */
    protected $sourceCRS = null;

    /**
     * @var CRSRefType $targetCRS
     */
    protected $targetCRS = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $coordinateOperationName
     * @param ID $id
     * @param IdentifierType $coordinateOperationID
     * @param StringOrRefType $remarks
     * @param string $operationVersion
     * @param ExtentType $validArea
     * @param string $scope
     * @param AbstractPositionalAccuracyType $_positionalAccuracy
     * @param CRSRefType $sourceCRS
     * @param CRSRefType $targetCRS
     */
    public function __construct($metaDataProperty, $coordinateOperationName, $id, $coordinateOperationID, $remarks, $operationVersion, $validArea, $scope, $_positionalAccuracy, $sourceCRS, $targetCRS)
    {
      parent::__construct($metaDataProperty, $coordinateOperationName, $id);
      $this->coordinateOperationID = $coordinateOperationID;
      $this->remarks = $remarks;
      $this->operationVersion = $operationVersion;
      $this->validArea = $validArea;
      $this->scope = $scope;
      $this->_positionalAccuracy = $_positionalAccuracy;
      $this->sourceCRS = $sourceCRS;
      $this->targetCRS = $targetCRS;
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
     * @return AbstractCoordinateOperationType
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
     * @return AbstractCoordinateOperationType
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperationVersion()
    {
      return $this->operationVersion;
    }

    /**
     * @param string $operationVersion
     * @return AbstractCoordinateOperationType
     */
    public function setOperationVersion($operationVersion)
    {
      $this->operationVersion = $operationVersion;
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
     * @return AbstractCoordinateOperationType
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
     * @return AbstractCoordinateOperationType
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
     * @return AbstractCoordinateOperationType
     */
    public function set_positionalAccuracy($_positionalAccuracy)
    {
      $this->_positionalAccuracy = $_positionalAccuracy;
      return $this;
    }

    /**
     * @return CRSRefType
     */
    public function getSourceCRS()
    {
      return $this->sourceCRS;
    }

    /**
     * @param CRSRefType $sourceCRS
     * @return AbstractCoordinateOperationType
     */
    public function setSourceCRS($sourceCRS)
    {
      $this->sourceCRS = $sourceCRS;
      return $this;
    }

    /**
     * @return CRSRefType
     */
    public function getTargetCRS()
    {
      return $this->targetCRS;
    }

    /**
     * @param CRSRefType $targetCRS
     * @return AbstractCoordinateOperationType
     */
    public function setTargetCRS($targetCRS)
    {
      $this->targetCRS = $targetCRS;
      return $this;
    }

}
