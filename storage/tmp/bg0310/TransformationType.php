<?php

class TransformationType extends AbstractGeneralTransformationType
{

    /**
     * @var OperationMethodRefType $usesMethod
     */
    protected $usesMethod = null;

    /**
     * @var ParameterValueType $usesValue
     */
    protected $usesValue = null;

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
     * @param OperationMethodRefType $usesMethod
     * @param ParameterValueType $usesValue
     */
    public function __construct($metaDataProperty, $coordinateOperationName, $coordinateOperationID, $remarks, $operationVersion, $validArea, $scope, $_positionalAccuracy, $sourceCRS, $targetCRS, $id, $usesMethod, $usesValue)
    {
      parent::__construct($metaDataProperty, $coordinateOperationName, $coordinateOperationID, $remarks, $operationVersion, $validArea, $scope, $_positionalAccuracy, $sourceCRS, $targetCRS, $id);
      $this->usesMethod = $usesMethod;
      $this->usesValue = $usesValue;
    }

    /**
     * @return OperationMethodRefType
     */
    public function getUsesMethod()
    {
      return $this->usesMethod;
    }

    /**
     * @param OperationMethodRefType $usesMethod
     * @return TransformationType
     */
    public function setUsesMethod($usesMethod)
    {
      $this->usesMethod = $usesMethod;
      return $this;
    }

    /**
     * @return ParameterValueType
     */
    public function getUsesValue()
    {
      return $this->usesValue;
    }

    /**
     * @param ParameterValueType $usesValue
     * @return TransformationType
     */
    public function setUsesValue($usesValue)
    {
      $this->usesValue = $usesValue;
      return $this;
    }

}
