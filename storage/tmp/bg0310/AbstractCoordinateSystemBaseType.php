<?php

abstract class AbstractCoordinateSystemBaseType
{

    /**
     * @var MetaDataPropertyType $metaDataProperty
     */
    protected $metaDataProperty = null;

    /**
     * @var CodeType $csName
     */
    protected $csName = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $csName
     * @param ID $id
     */
    public function __construct($metaDataProperty, $csName, $id)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->csName = $csName;
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
     * @return AbstractCoordinateSystemBaseType
     */
    public function setMetaDataProperty($metaDataProperty)
    {
      $this->metaDataProperty = $metaDataProperty;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getCsName()
    {
      return $this->csName;
    }

    /**
     * @param CodeType $csName
     * @return AbstractCoordinateSystemBaseType
     */
    public function setCsName($csName)
    {
      $this->csName = $csName;
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
     * @return AbstractCoordinateSystemBaseType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
