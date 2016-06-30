<?php

class ConversionType extends AbstractGeneralConversionType
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
     * @param ExtentType $validArea
     * @param string $scope
     * @param AbstractPositionalAccuracyType $_positionalAccuracy
     * @param ID $id
     * @param OperationMethodRefType $usesMethod
     * @param ParameterValueType $usesValue
     */
    public function __construct($metaDataProperty, $coordinateOperationName, $coordinateOperationID, $remarks, $validArea, $scope, $_positionalAccuracy, $id, $usesMethod, $usesValue)
    {
      parent::__construct($metaDataProperty, $coordinateOperationName, $coordinateOperationID, $remarks, $validArea, $scope, $_positionalAccuracy, $id);
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
     * @return ConversionType
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
     * @return ConversionType
     */
    public function setUsesValue($usesValue)
    {
      $this->usesValue = $usesValue;
      return $this;
    }

}
