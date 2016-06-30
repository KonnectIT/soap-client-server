<?php

abstract class CoordinateSystemAxisBaseType
{

    /**
     * @var MetaDataPropertyType $metaDataProperty
     */
    protected $metaDataProperty = null;

    /**
     * @var CodeType $name
     */
    protected $name = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $name
     * @param ID $id
     */
    public function __construct($metaDataProperty, $name, $id)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->name = $name;
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
     * @return CoordinateSystemAxisBaseType
     */
    public function setMetaDataProperty($metaDataProperty)
    {
      $this->metaDataProperty = $metaDataProperty;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param CodeType $name
     * @return CoordinateSystemAxisBaseType
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return CoordinateSystemAxisBaseType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
