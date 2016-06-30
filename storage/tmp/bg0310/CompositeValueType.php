<?php

class CompositeValueType extends AbstractGMLType
{

    /**
     * @var ValuePropertyType $valueComponent
     */
    protected $valueComponent = null;

    /**
     * @var ValueArrayPropertyType $valueComponents
     */
    protected $valueComponents = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param ValuePropertyType $valueComponent
     * @param ValueArrayPropertyType $valueComponents
     */
    public function __construct($metaDataProperty, $description, $name, $id, $valueComponent, $valueComponents)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->valueComponent = $valueComponent;
      $this->valueComponents = $valueComponents;
    }

    /**
     * @return ValuePropertyType
     */
    public function getValueComponent()
    {
      return $this->valueComponent;
    }

    /**
     * @param ValuePropertyType $valueComponent
     * @return CompositeValueType
     */
    public function setValueComponent($valueComponent)
    {
      $this->valueComponent = $valueComponent;
      return $this;
    }

    /**
     * @return ValueArrayPropertyType
     */
    public function getValueComponents()
    {
      return $this->valueComponents;
    }

    /**
     * @param ValueArrayPropertyType $valueComponents
     * @return CompositeValueType
     */
    public function setValueComponents($valueComponents)
    {
      $this->valueComponents = $valueComponents;
      return $this;
    }

}
