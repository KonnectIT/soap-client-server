<?php

namespace RRSVP\Stuf;

class TimeTopologyComplexType extends AbstractTimeComplexType
{

    /**
     * @var TimeTopologyPrimitivePropertyType[] $primitive
     */
    protected $primitive = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param TimeTopologyPrimitivePropertyType[] $primitive
     */
    public function __construct($metaDataProperty, $description, $name, $id, array $primitive)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->primitive = $primitive;
    }

    /**
     * @return TimeTopologyPrimitivePropertyType[]
     */
    public function getPrimitive()
    {
      return $this->primitive;
    }

    /**
     * @param TimeTopologyPrimitivePropertyType[] $primitive
     * @return \RRSVP\Stuf\TimeTopologyComplexType
     */
    public function setPrimitive(array $primitive)
    {
      $this->primitive = $primitive;
      return $this;
    }

}
