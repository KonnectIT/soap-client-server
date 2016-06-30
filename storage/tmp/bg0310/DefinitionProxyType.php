<?php

class DefinitionProxyType extends DefinitionType
{

    /**
     * @var ReferenceType $definitionRef
     */
    protected $definitionRef = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param ReferenceType $definitionRef
     */
    public function __construct($metaDataProperty, $description, $name, $id, $definitionRef)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->definitionRef = $definitionRef;
    }

    /**
     * @return ReferenceType
     */
    public function getDefinitionRef()
    {
      return $this->definitionRef;
    }

    /**
     * @param ReferenceType $definitionRef
     * @return DefinitionProxyType
     */
    public function setDefinitionRef($definitionRef)
    {
      $this->definitionRef = $definitionRef;
      return $this;
    }

}
