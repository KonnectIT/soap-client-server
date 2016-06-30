<?php

class TimeCalendarEraType extends DefinitionType
{

    /**
     * @var StringOrRefType $referenceEvent
     */
    protected $referenceEvent = null;

    /**
     * @var date $referenceDate
     */
    protected $referenceDate = null;

    /**
     * @var float $julianReference
     */
    protected $julianReference = null;

    /**
     * @var TimePeriodPropertyType $epochOfUse
     */
    protected $epochOfUse = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param StringOrRefType $referenceEvent
     * @param float $julianReference
     * @param TimePeriodPropertyType $epochOfUse
     */
    public function __construct($metaDataProperty, $description, $name, $id, $referenceEvent, $julianReference, $epochOfUse)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->referenceEvent = $referenceEvent;
      $this->julianReference = $julianReference;
      $this->epochOfUse = $epochOfUse;
    }

    /**
     * @return StringOrRefType
     */
    public function getReferenceEvent()
    {
      return $this->referenceEvent;
    }

    /**
     * @param StringOrRefType $referenceEvent
     * @return TimeCalendarEraType
     */
    public function setReferenceEvent($referenceEvent)
    {
      $this->referenceEvent = $referenceEvent;
      return $this;
    }

    /**
     * @return date
     */
    public function getReferenceDate()
    {
      return $this->referenceDate;
    }

    /**
     * @param date $referenceDate
     * @return TimeCalendarEraType
     */
    public function setReferenceDate($referenceDate)
    {
      $this->referenceDate = $referenceDate;
      return $this;
    }

    /**
     * @return float
     */
    public function getJulianReference()
    {
      return $this->julianReference;
    }

    /**
     * @param float $julianReference
     * @return TimeCalendarEraType
     */
    public function setJulianReference($julianReference)
    {
      $this->julianReference = $julianReference;
      return $this;
    }

    /**
     * @return TimePeriodPropertyType
     */
    public function getEpochOfUse()
    {
      return $this->epochOfUse;
    }

    /**
     * @param TimePeriodPropertyType $epochOfUse
     * @return TimeCalendarEraType
     */
    public function setEpochOfUse($epochOfUse)
    {
      $this->epochOfUse = $epochOfUse;
      return $this;
    }

}
