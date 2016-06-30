<?php

class OperationMethodType extends OperationMethodBaseType
{

    /**
     * @var IdentifierType $methodID
     */
    protected $methodID = null;

    /**
     * @var StringOrRefType $remarks
     */
    protected $remarks = null;

    /**
     * @var CodeType $methodFormula
     */
    protected $methodFormula = null;

    /**
     * @var int $sourceDimensions
     */
    protected $sourceDimensions = null;

    /**
     * @var int $targetDimensions
     */
    protected $targetDimensions = null;

    /**
     * @var AbstractGeneralOperationParameterRefType $usesParameter
     */
    protected $usesParameter = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $methodName
     * @param ID $id
     * @param IdentifierType $methodID
     * @param StringOrRefType $remarks
     * @param CodeType $methodFormula
     * @param int $sourceDimensions
     * @param int $targetDimensions
     * @param AbstractGeneralOperationParameterRefType $usesParameter
     */
    public function __construct($metaDataProperty, $methodName, $id, $methodID, $remarks, $methodFormula, $sourceDimensions, $targetDimensions, $usesParameter)
    {
      parent::__construct($metaDataProperty, $methodName, $id);
      $this->methodID = $methodID;
      $this->remarks = $remarks;
      $this->methodFormula = $methodFormula;
      $this->sourceDimensions = $sourceDimensions;
      $this->targetDimensions = $targetDimensions;
      $this->usesParameter = $usesParameter;
    }

    /**
     * @return IdentifierType
     */
    public function getMethodID()
    {
      return $this->methodID;
    }

    /**
     * @param IdentifierType $methodID
     * @return OperationMethodType
     */
    public function setMethodID($methodID)
    {
      $this->methodID = $methodID;
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
     * @return OperationMethodType
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getMethodFormula()
    {
      return $this->methodFormula;
    }

    /**
     * @param CodeType $methodFormula
     * @return OperationMethodType
     */
    public function setMethodFormula($methodFormula)
    {
      $this->methodFormula = $methodFormula;
      return $this;
    }

    /**
     * @return int
     */
    public function getSourceDimensions()
    {
      return $this->sourceDimensions;
    }

    /**
     * @param int $sourceDimensions
     * @return OperationMethodType
     */
    public function setSourceDimensions($sourceDimensions)
    {
      $this->sourceDimensions = $sourceDimensions;
      return $this;
    }

    /**
     * @return int
     */
    public function getTargetDimensions()
    {
      return $this->targetDimensions;
    }

    /**
     * @param int $targetDimensions
     * @return OperationMethodType
     */
    public function setTargetDimensions($targetDimensions)
    {
      $this->targetDimensions = $targetDimensions;
      return $this;
    }

    /**
     * @return AbstractGeneralOperationParameterRefType
     */
    public function getUsesParameter()
    {
      return $this->usesParameter;
    }

    /**
     * @param AbstractGeneralOperationParameterRefType $usesParameter
     * @return OperationMethodType
     */
    public function setUsesParameter($usesParameter)
    {
      $this->usesParameter = $usesParameter;
      return $this;
    }

}
