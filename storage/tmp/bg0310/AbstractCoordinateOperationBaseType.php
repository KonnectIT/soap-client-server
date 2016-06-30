<?php

abstract class AbstractCoordinateOperationBaseType
{

    /**
     * @var MetaDataPropertyType $metaDataProperty
     */
    protected $metaDataProperty = null;

    /**
     * @var CodeType $coordinateOperationName
     */
    protected $coordinateOperationName = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $coordinateOperationName
     * @param ID $id
     */
    public function __construct($metaDataProperty, $coordinateOperationName, $id)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->coordinateOperationName = $coordinateOperationName;
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
     * @return AbstractCoordinateOperationBaseType
     */
    public function setMetaDataProperty($metaDataProperty)
    {
      $this->metaDataProperty = $metaDataProperty;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getCoordinateOperationName()
    {
      return $this->coordinateOperationName;
    }

    /**
     * @param CodeType $coordinateOperationName
     * @return AbstractCoordinateOperationBaseType
     */
    public function setCoordinateOperationName($coordinateOperationName)
    {
      $this->coordinateOperationName = $coordinateOperationName;
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
     * @return AbstractCoordinateOperationBaseType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
