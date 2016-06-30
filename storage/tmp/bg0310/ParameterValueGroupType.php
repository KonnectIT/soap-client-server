<?php

class ParameterValueGroupType extends AbstractGeneralParameterValueType
{

    /**
     * @var AbstractGeneralParameterValueType $includesValue
     */
    protected $includesValue = null;

    /**
     * @var OperationParameterGroupRefType $valuesOfGroup
     */
    protected $valuesOfGroup = null;

    /**
     * @param AbstractGeneralParameterValueType $includesValue
     * @param OperationParameterGroupRefType $valuesOfGroup
     */
    public function __construct($includesValue, $valuesOfGroup)
    {
      $this->includesValue = $includesValue;
      $this->valuesOfGroup = $valuesOfGroup;
    }

    /**
     * @return AbstractGeneralParameterValueType
     */
    public function getIncludesValue()
    {
      return $this->includesValue;
    }

    /**
     * @param AbstractGeneralParameterValueType $includesValue
     * @return ParameterValueGroupType
     */
    public function setIncludesValue($includesValue)
    {
      $this->includesValue = $includesValue;
      return $this;
    }

    /**
     * @return OperationParameterGroupRefType
     */
    public function getValuesOfGroup()
    {
      return $this->valuesOfGroup;
    }

    /**
     * @param OperationParameterGroupRefType $valuesOfGroup
     * @return ParameterValueGroupType
     */
    public function setValuesOfGroup($valuesOfGroup)
    {
      $this->valuesOfGroup = $valuesOfGroup;
      return $this;
    }

}
