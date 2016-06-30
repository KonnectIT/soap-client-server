<?php

namespace RRSVP\Stuf;

class OperationParameterGroupType extends OperationParameterGroupBaseType
{

    /**
     * @var IdentifierType $groupID
     */
    protected $groupID = null;

    /**
     * @var StringOrRefType $remarks
     */
    protected $remarks = null;

    /**
     * @var int $maximumOccurs
     */
    protected $maximumOccurs = null;

    /**
     * @var AbstractGeneralOperationParameterRefType $includesParameter
     */
    protected $includesParameter = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $groupName
     * @param int $minimumOccurs
     * @param ID $id
     * @param IdentifierType $groupID
     * @param StringOrRefType $remarks
     * @param int $maximumOccurs
     * @param AbstractGeneralOperationParameterRefType $includesParameter
     */
    public function __construct($metaDataProperty, $groupName, $minimumOccurs, $id, $groupID, $remarks, $maximumOccurs, $includesParameter)
    {
      parent::__construct($metaDataProperty, $groupName, $minimumOccurs, $id);
      $this->groupID = $groupID;
      $this->remarks = $remarks;
      $this->maximumOccurs = $maximumOccurs;
      $this->includesParameter = $includesParameter;
    }

    /**
     * @return IdentifierType
     */
    public function getGroupID()
    {
      return $this->groupID;
    }

    /**
     * @param IdentifierType $groupID
     * @return \RRSVP\Stuf\OperationParameterGroupType
     */
    public function setGroupID($groupID)
    {
      $this->groupID = $groupID;
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
     * @return \RRSVP\Stuf\OperationParameterGroupType
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumOccurs()
    {
      return $this->maximumOccurs;
    }

    /**
     * @param int $maximumOccurs
     * @return \RRSVP\Stuf\OperationParameterGroupType
     */
    public function setMaximumOccurs($maximumOccurs)
    {
      $this->maximumOccurs = $maximumOccurs;
      return $this;
    }

    /**
     * @return AbstractGeneralOperationParameterRefType
     */
    public function getIncludesParameter()
    {
      return $this->includesParameter;
    }

    /**
     * @param AbstractGeneralOperationParameterRefType $includesParameter
     * @return \RRSVP\Stuf\OperationParameterGroupType
     */
    public function setIncludesParameter($includesParameter)
    {
      $this->includesParameter = $includesParameter;
      return $this;
    }

}
