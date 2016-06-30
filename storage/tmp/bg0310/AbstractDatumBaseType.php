<?php

abstract class AbstractDatumBaseType
{

    /**
     * @var MetaDataPropertyType $metaDataProperty
     */
    protected $metaDataProperty = null;

    /**
     * @var CodeType $datumName
     */
    protected $datumName = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $datumName
     * @param ID $id
     */
    public function __construct($metaDataProperty, $datumName, $id)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->datumName = $datumName;
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
     * @return AbstractDatumBaseType
     */
    public function setMetaDataProperty($metaDataProperty)
    {
      $this->metaDataProperty = $metaDataProperty;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getDatumName()
    {
      return $this->datumName;
    }

    /**
     * @param CodeType $datumName
     * @return AbstractDatumBaseType
     */
    public function setDatumName($datumName)
    {
      $this->datumName = $datumName;
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
     * @return AbstractDatumBaseType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
