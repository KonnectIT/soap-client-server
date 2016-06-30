<?php

abstract class OperationMethodBaseType
{

    /**
     * @var MetaDataPropertyType $metaDataProperty
     */
    protected $metaDataProperty = null;

    /**
     * @var CodeType $methodName
     */
    protected $methodName = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $methodName
     * @param ID $id
     */
    public function __construct($metaDataProperty, $methodName, $id)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->methodName = $methodName;
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
     * @return OperationMethodBaseType
     */
    public function setMetaDataProperty($metaDataProperty)
    {
      $this->metaDataProperty = $metaDataProperty;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getMethodName()
    {
      return $this->methodName;
    }

    /**
     * @param CodeType $methodName
     * @return OperationMethodBaseType
     */
    public function setMethodName($methodName)
    {
      $this->methodName = $methodName;
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
     * @return OperationMethodBaseType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
