<?php

namespace RRSVP\Stuf;

class ObservationType extends AbstractFeatureType
{

    /**
     * @var TimePrimitivePropertyType $validTime
     */
    protected $validTime = null;

    /**
     * @var FeaturePropertyType $using
     */
    protected $using = null;

    /**
     * @var TargetPropertyType $target
     */
    protected $target = null;

    /**
     * @var AssociationType $resultOf
     */
    protected $resultOf = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param BoundingShapeType $boundedBy
     * @param LocationPropertyType $location
     * @param TimePrimitivePropertyType $validTime
     * @param FeaturePropertyType $using
     * @param TargetPropertyType $target
     * @param AssociationType $resultOf
     */
    public function __construct($metaDataProperty, $description, $name, $id, $boundedBy, $location, $validTime, $using, $target, $resultOf)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $boundedBy, $location);
      $this->validTime = $validTime;
      $this->using = $using;
      $this->target = $target;
      $this->resultOf = $resultOf;
    }

    /**
     * @return TimePrimitivePropertyType
     */
    public function getValidTime()
    {
      return $this->validTime;
    }

    /**
     * @param TimePrimitivePropertyType $validTime
     * @return \RRSVP\Stuf\ObservationType
     */
    public function setValidTime($validTime)
    {
      $this->validTime = $validTime;
      return $this;
    }

    /**
     * @return FeaturePropertyType
     */
    public function getUsing()
    {
      return $this->using;
    }

    /**
     * @param FeaturePropertyType $using
     * @return \RRSVP\Stuf\ObservationType
     */
    public function setUsing($using)
    {
      $this->using = $using;
      return $this;
    }

    /**
     * @return TargetPropertyType
     */
    public function getTarget()
    {
      return $this->target;
    }

    /**
     * @param TargetPropertyType $target
     * @return \RRSVP\Stuf\ObservationType
     */
    public function setTarget($target)
    {
      $this->target = $target;
      return $this;
    }

    /**
     * @return AssociationType
     */
    public function getResultOf()
    {
      return $this->resultOf;
    }

    /**
     * @param AssociationType $resultOf
     * @return \RRSVP\Stuf\ObservationType
     */
    public function setResultOf($resultOf)
    {
      $this->resultOf = $resultOf;
      return $this;
    }

}
