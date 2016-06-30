<?php

class TimeCalendarType extends AbstractTimeReferenceSystemType
{

    /**
     * @var TimeCalendarEraPropertyType[] $referenceFrame
     */
    protected $referenceFrame = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param TimeCalendarEraPropertyType[] $referenceFrame
     */
    public function __construct($metaDataProperty, $description, $name, $id, array $referenceFrame)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->referenceFrame = $referenceFrame;
    }

    /**
     * @return TimeCalendarEraPropertyType[]
     */
    public function getReferenceFrame()
    {
      return $this->referenceFrame;
    }

    /**
     * @param TimeCalendarEraPropertyType[] $referenceFrame
     * @return TimeCalendarType
     */
    public function setReferenceFrame(array $referenceFrame)
    {
      $this->referenceFrame = $referenceFrame;
      return $this;
    }

}
