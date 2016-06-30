<?php

class ArrayType extends AbstractGMLType
{

    /**
     * @var ArrayAssociationType $members
     */
    protected $members = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param ArrayAssociationType $members
     */
    public function __construct($metaDataProperty, $description, $name, $id, $members)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->members = $members;
    }

    /**
     * @return ArrayAssociationType
     */
    public function getMembers()
    {
      return $this->members;
    }

    /**
     * @param ArrayAssociationType $members
     * @return ArrayType
     */
    public function setMembers($members)
    {
      $this->members = $members;
      return $this;
    }

}
