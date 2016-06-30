<?php

abstract class AbstractTimeTopologyPrimitiveType extends AbstractTimePrimitiveType
{

    /**
     * @var ReferenceType $complex
     */
    protected $complex = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     */
    public function __construct($metaDataProperty, $description, $name, $id)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
    }

    /**
     * @return ReferenceType
     */
    public function getComplex()
    {
      return $this->complex;
    }

    /**
     * @param ReferenceType $complex
     * @return AbstractTimeTopologyPrimitiveType
     */
    public function setComplex($complex)
    {
      $this->complex = $complex;
      return $this;
    }

}
