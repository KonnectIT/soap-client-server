<?php

namespace RRSVP\Stuf;

class TimeClockType extends AbstractTimeReferenceSystemType
{

    /**
     * @var StringOrRefType $referenceEvent
     */
    protected $referenceEvent = null;

    /**
     * @var time $referenceTime
     */
    protected $referenceTime = null;

    /**
     * @var time $utcReference
     */
    protected $utcReference = null;

    /**
     * @var TimeCalendarPropertyType[] $dateBasis
     */
    protected $dateBasis = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param StringOrRefType $referenceEvent
     * @param time $referenceTime
     * @param time $utcReference
     */
    public function __construct($metaDataProperty, $description, $name, $id, $referenceEvent, $referenceTime, $utcReference)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->referenceEvent = $referenceEvent;
      $this->referenceTime = $referenceTime;
      $this->utcReference = $utcReference;
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
     * @return \RRSVP\Stuf\TimeClockType
     */
    public function setReferenceEvent($referenceEvent)
    {
      $this->referenceEvent = $referenceEvent;
      return $this;
    }

    /**
     * @return time
     */
    public function getReferenceTime()
    {
      return $this->referenceTime;
    }

    /**
     * @param time $referenceTime
     * @return \RRSVP\Stuf\TimeClockType
     */
    public function setReferenceTime($referenceTime)
    {
      $this->referenceTime = $referenceTime;
      return $this;
    }

    /**
     * @return time
     */
    public function getUtcReference()
    {
      return $this->utcReference;
    }

    /**
     * @param time $utcReference
     * @return \RRSVP\Stuf\TimeClockType
     */
    public function setUtcReference($utcReference)
    {
      $this->utcReference = $utcReference;
      return $this;
    }

    /**
     * @return TimeCalendarPropertyType[]
     */
    public function getDateBasis()
    {
      return $this->dateBasis;
    }

    /**
     * @param TimeCalendarPropertyType[] $dateBasis
     * @return \RRSVP\Stuf\TimeClockType
     */
    public function setDateBasis(array $dateBasis = null)
    {
      $this->dateBasis = $dateBasis;
      return $this;
    }

}
