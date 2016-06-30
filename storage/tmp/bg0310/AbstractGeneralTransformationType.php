<?php

abstract class AbstractGeneralTransformationType
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
     * @var ID $id
     */
    protected $id = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $coordinateOperationName
     * @param IdentifierType $coordinateOperationID
     * @param StringOrRefType $remarks
     * @param string $operationVersion
     * @param ExtentType $validArea
     * @param string $scope
     * @param AbstractPositionalAccuracyType $_positionalAccuracy
     * @param CRSRefType $sourceCRS
     * @param CRSRefType $targetCRS
     * @param ID $id
     */
    public function __construct($metaDataProperty, $coordinateOperationName, $coordinateOperationID, $remarks, $operationVersion, $validArea, $scope, $_positionalAccuracy, $sourceCRS, $targetCRS, $id)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->coordinateOperationName = $coordinateOperationName;
      $this->coordinateOperationID = $coordinateOperationID;
      $this->remarks = $remarks;
      $this->operationVersion = $operationVersion;
      $this->validArea = $validArea;
      $this->scope = $scope;
      $this->_positionalAccuracy = $_positionalAccuracy;
      $this->sourceCRS = $sourceCRS;
      $this->targetCRS = $targetCRS;
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
     * @return AbstractGeneralTransformationType
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
     * @return AbstractGeneralTransformationType
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
     * @return AbstractGeneralTransformationType
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
     * @return AbstractGeneralTransformationType
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
     * @return AbstractGeneralTransformationType
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
     * @return AbstractGeneralTransformationType
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
     * @return AbstractGeneralTransformationType
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
     * @return AbstractGeneralTransformationType
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
     * @return AbstractGeneralTransformationType
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
     * @return AbstractGeneralTransformationType
     */
    public function setTargetCRS($targetCRS)
    {
      $this->targetCRS = $targetCRS;
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
     * @return AbstractGeneralTransformationType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
