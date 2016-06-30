<?php

namespace RRSVP\Stuf;

class PassThroughOperationType extends AbstractCoordinateOperationType
{

    /**
     * @var int $modifiedCoordinate
     */
    protected $modifiedCoordinate = null;

    /**
     * @var OperationRefType $usesOperation
     */
    protected $usesOperation = null;

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
     * @param int $modifiedCoordinate
     * @param OperationRefType $usesOperation
     */
    public function __construct($metaDataProperty, $coordinateOperationName, $id, $coordinateOperationID, $remarks, $operationVersion, $validArea, $scope, $_positionalAccuracy, $sourceCRS, $targetCRS, $modifiedCoordinate, $usesOperation)
    {
      parent::__construct($metaDataProperty, $coordinateOperationName, $id, $coordinateOperationID, $remarks, $operationVersion, $validArea, $scope, $_positionalAccuracy, $sourceCRS, $targetCRS);
      $this->modifiedCoordinate = $modifiedCoordinate;
      $this->usesOperation = $usesOperation;
    }

    /**
     * @return int
     */
    public function getModifiedCoordinate()
    {
      return $this->modifiedCoordinate;
    }

    /**
     * @param int $modifiedCoordinate
     * @return \RRSVP\Stuf\PassThroughOperationType
     */
    public function setModifiedCoordinate($modifiedCoordinate)
    {
      $this->modifiedCoordinate = $modifiedCoordinate;
      return $this;
    }

    /**
     * @return OperationRefType
     */
    public function getUsesOperation()
    {
      return $this->usesOperation;
    }

    /**
     * @param OperationRefType $usesOperation
     * @return \RRSVP\Stuf\PassThroughOperationType
     */
    public function setUsesOperation($usesOperation)
    {
      $this->usesOperation = $usesOperation;
      return $this;
    }

}
