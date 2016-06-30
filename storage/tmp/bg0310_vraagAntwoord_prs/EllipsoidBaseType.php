<?php

namespace RRSVP\Stuf;

abstract class EllipsoidBaseType
{

    /**
     * @var MetaDataPropertyType $metaDataProperty
     */
    protected $metaDataProperty = null;

    /**
     * @var CodeType $ellipsoidName
     */
    protected $ellipsoidName = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $ellipsoidName
     * @param ID $id
     */
    public function __construct($metaDataProperty, $ellipsoidName, $id)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->ellipsoidName = $ellipsoidName;
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
     * @return \RRSVP\Stuf\EllipsoidBaseType
     */
    public function setMetaDataProperty($metaDataProperty)
    {
      $this->metaDataProperty = $metaDataProperty;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getEllipsoidName()
    {
      return $this->ellipsoidName;
    }

    /**
     * @param CodeType $ellipsoidName
     * @return \RRSVP\Stuf\EllipsoidBaseType
     */
    public function setEllipsoidName($ellipsoidName)
    {
      $this->ellipsoidName = $ellipsoidName;
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
     * @return \RRSVP\Stuf\EllipsoidBaseType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
