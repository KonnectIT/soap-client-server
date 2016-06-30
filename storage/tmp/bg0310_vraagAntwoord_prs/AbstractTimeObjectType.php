<?php

namespace RRSVP\Stuf;

abstract class AbstractTimeObjectType extends AbstractGMLType
{

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

}
