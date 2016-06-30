<?php

abstract class PrimeMeridianBaseType
{

    /**
     * @var MetaDataPropertyType $metaDataProperty
     */
    protected $metaDataProperty = null;

    /**
     * @var CodeType $meridianName
     */
    protected $meridianName = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $meridianName
     * @param ID $id
     */
    public function __construct($metaDataProperty, $meridianName, $id)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->meridianName = $meridianName;
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
     * @return PrimeMeridianBaseType
     */
    public function setMetaDataProperty($metaDataProperty)
    {
      $this->metaDataProperty = $metaDataProperty;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getMeridianName()
    {
      return $this->meridianName;
    }

    /**
     * @param CodeType $meridianName
     * @return PrimeMeridianBaseType
     */
    public function setMeridianName($meridianName)
    {
      $this->meridianName = $meridianName;
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
     * @return PrimeMeridianBaseType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
