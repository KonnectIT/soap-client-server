<?php

abstract class AbstractReferenceSystemBaseType
{

    /**
     * @var MetaDataPropertyType $metaDataProperty
     */
    protected $metaDataProperty = null;

    /**
     * @var CodeType $srsName
     */
    protected $srsName = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $srsName
     * @param ID $id
     */
    public function __construct($metaDataProperty, $srsName, $id)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->srsName = $srsName;
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
     * @return AbstractReferenceSystemBaseType
     */
    public function setMetaDataProperty($metaDataProperty)
    {
      $this->metaDataProperty = $metaDataProperty;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getSrsName()
    {
      return $this->srsName;
    }

    /**
     * @param CodeType $srsName
     * @return AbstractReferenceSystemBaseType
     */
    public function setSrsName($srsName)
    {
      $this->srsName = $srsName;
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
     * @return AbstractReferenceSystemBaseType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
