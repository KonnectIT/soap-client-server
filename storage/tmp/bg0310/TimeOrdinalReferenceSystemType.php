<?php

class TimeOrdinalReferenceSystemType extends AbstractTimeReferenceSystemType
{

    /**
     * @var TimeOrdinalEraPropertyType[] $component
     */
    protected $component = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param TimeOrdinalEraPropertyType[] $component
     */
    public function __construct($metaDataProperty, $description, $name, $id, array $component)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->component = $component;
    }

    /**
     * @return TimeOrdinalEraPropertyType[]
     */
    public function getComponent()
    {
      return $this->component;
    }

    /**
     * @param TimeOrdinalEraPropertyType[] $component
     * @return TimeOrdinalReferenceSystemType
     */
    public function setComponent(array $component)
    {
      $this->component = $component;
      return $this;
    }

}
