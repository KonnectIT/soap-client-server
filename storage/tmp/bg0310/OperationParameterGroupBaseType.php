<?php

abstract class OperationParameterGroupBaseType
{

    /**
     * @var MetaDataPropertyType $metaDataProperty
     */
    protected $metaDataProperty = null;

    /**
     * @var CodeType $groupName
     */
    protected $groupName = null;

    /**
     * @var int $minimumOccurs
     */
    protected $minimumOccurs = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $groupName
     * @param int $minimumOccurs
     * @param ID $id
     */
    public function __construct($metaDataProperty, $groupName, $minimumOccurs, $id)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->groupName = $groupName;
      $this->minimumOccurs = $minimumOccurs;
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
     * @return OperationParameterGroupBaseType
     */
    public function setMetaDataProperty($metaDataProperty)
    {
      $this->metaDataProperty = $metaDataProperty;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getGroupName()
    {
      return $this->groupName;
    }

    /**
     * @param CodeType $groupName
     * @return OperationParameterGroupBaseType
     */
    public function setGroupName($groupName)
    {
      $this->groupName = $groupName;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumOccurs()
    {
      return $this->minimumOccurs;
    }

    /**
     * @param int $minimumOccurs
     * @return OperationParameterGroupBaseType
     */
    public function setMinimumOccurs($minimumOccurs)
    {
      $this->minimumOccurs = $minimumOccurs;
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
     * @return OperationParameterGroupBaseType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
