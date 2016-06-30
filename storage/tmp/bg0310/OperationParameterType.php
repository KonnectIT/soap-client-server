<?php

class OperationParameterType extends OperationParameterBaseType
{

    /**
     * @var IdentifierType $parameterID
     */
    protected $parameterID = null;

    /**
     * @var StringOrRefType $remarks
     */
    protected $remarks = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $parameterName
     * @param int $minimumOccurs
     * @param ID $id
     * @param IdentifierType $parameterID
     * @param StringOrRefType $remarks
     */
    public function __construct($metaDataProperty, $parameterName, $minimumOccurs, $id, $parameterID, $remarks)
    {
      parent::__construct($metaDataProperty, $parameterName, $minimumOccurs, $id);
      $this->parameterID = $parameterID;
      $this->remarks = $remarks;
    }

    /**
     * @return IdentifierType
     */
    public function getParameterID()
    {
      return $this->parameterID;
    }

    /**
     * @param IdentifierType $parameterID
     * @return OperationParameterType
     */
    public function setParameterID($parameterID)
    {
      $this->parameterID = $parameterID;
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
     * @return OperationParameterType
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

}
