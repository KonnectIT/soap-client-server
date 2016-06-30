<?php

class TimeOrdinalEraType extends DefinitionType
{

    /**
     * @var RelatedTimeType[] $relatedTime
     */
    protected $relatedTime = null;

    /**
     * @var TimeNodePropertyType $start
     */
    protected $start = null;

    /**
     * @var TimeNodePropertyType $end
     */
    protected $end = null;

    /**
     * @var TimePeriodPropertyType $extent
     */
    protected $extent = null;

    /**
     * @var TimeOrdinalEraPropertyType[] $member
     */
    protected $member = null;

    /**
     * @var ReferenceType $group
     */
    protected $group = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param TimeNodePropertyType $start
     * @param TimeNodePropertyType $end
     */
    public function __construct($metaDataProperty, $description, $name, $id, $start, $end)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->start = $start;
      $this->end = $end;
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
     * @return TimeOrdinalEraType
     */
    public function setRelatedTime(array $relatedTime = null)
    {
      $this->relatedTime = $relatedTime;
      return $this;
    }

    /**
     * @return TimeNodePropertyType
     */
    public function getStart()
    {
      return $this->start;
    }

    /**
     * @param TimeNodePropertyType $start
     * @return TimeOrdinalEraType
     */
    public function setStart($start)
    {
      $this->start = $start;
      return $this;
    }

    /**
     * @return TimeNodePropertyType
     */
    public function getEnd()
    {
      return $this->end;
    }

    /**
     * @param TimeNodePropertyType $end
     * @return TimeOrdinalEraType
     */
    public function setEnd($end)
    {
      $this->end = $end;
      return $this;
    }

    /**
     * @return TimePeriodPropertyType
     */
    public function getExtent()
    {
      return $this->extent;
    }

    /**
     * @param TimePeriodPropertyType $extent
     * @return TimeOrdinalEraType
     */
    public function setExtent($extent)
    {
      $this->extent = $extent;
      return $this;
    }

    /**
     * @return TimeOrdinalEraPropertyType[]
     */
    public function getMember()
    {
      return $this->member;
    }

    /**
     * @param TimeOrdinalEraPropertyType[] $member
     * @return TimeOrdinalEraType
     */
    public function setMember(array $member = null)
    {
      $this->member = $member;
      return $this;
    }

    /**
     * @return ReferenceType
     */
    public function getGroup()
    {
      return $this->group;
    }

    /**
     * @param ReferenceType $group
     * @return TimeOrdinalEraType
     */
    public function setGroup($group)
    {
      $this->group = $group;
      return $this;
    }

}
