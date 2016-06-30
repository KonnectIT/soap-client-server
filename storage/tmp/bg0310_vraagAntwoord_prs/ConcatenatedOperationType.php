<?php

namespace RRSVP\Stuf;

class ConcatenatedOperationType extends AbstractCoordinateOperationType
{

    /**
     * @var SingleOperationRefType $usesSingleOperation
     */
    protected $usesSingleOperation = null;

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
     * @param SingleOperationRefType $usesSingleOperation
     */
    public function __construct($metaDataProperty, $coordinateOperationName, $id, $coordinateOperationID, $remarks, $operationVersion, $validArea, $scope, $_positionalAccuracy, $sourceCRS, $targetCRS, $usesSingleOperation)
    {
      parent::__construct($metaDataProperty, $coordinateOperationName, $id, $coordinateOperationID, $remarks, $operationVersion, $validArea, $scope, $_positionalAccuracy, $sourceCRS, $targetCRS);
      $this->usesSingleOperation = $usesSingleOperation;
    }

    /**
     * @return SingleOperationRefType
     */
    public function getUsesSingleOperation()
    {
      return $this->usesSingleOperation;
    }

    /**
     * @param SingleOperationRefType $usesSingleOperation
     * @return \RRSVP\Stuf\ConcatenatedOperationType
     */
    public function setUsesSingleOperation($usesSingleOperation)
    {
      $this->usesSingleOperation = $usesSingleOperation;
      return $this;
    }

}
