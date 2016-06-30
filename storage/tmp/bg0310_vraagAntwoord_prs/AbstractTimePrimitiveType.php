<?php

namespace RRSVP\Stuf;

abstract class AbstractTimePrimitiveType extends AbstractTimeObjectType
{

    /**
     * @var RelatedTimeType[] $relatedTime
     */
    protected $relatedTime = null;

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
     * @return RelatedTimeType[]
     */
    public function getRelatedTime()
    {
      return $this->relatedTime;
    }

    /**
     * @param RelatedTimeType[] $relatedTime
     * @return \RRSVP\Stuf\AbstractTimePrimitiveType
     */
    public function setRelatedTime(array $relatedTime = null)
    {
      $this->relatedTime = $relatedTime;
      return $this;
    }

}
