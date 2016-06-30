<?php

namespace RRSVP\Stuf;

abstract class AbstractGeneralOperationParameterType extends DefinitionType
{

    /**
     * @var int $minimumOccurs
     */
    protected $minimumOccurs = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param int $minimumOccurs
     */
    public function __construct($metaDataProperty, $description, $name, $id, $minimumOccurs)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->minimumOccurs = $minimumOccurs;
    }

    /**
     * @return int
     */
    public function getMinimumOccurs()
    {
      return $this->minimumOccurs;
    }

    /**
     * @param int $minimumOccurs
     * @return \RRSVP\Stuf\AbstractGeneralOperationParameterType
     */
    public function setMinimumOccurs($minimumOccurs)
    {
      $this->minimumOccurs = $minimumOccurs;
      return $this;
    }

}
