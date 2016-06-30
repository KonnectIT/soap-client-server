<?php

namespace RRSVP\Stuf;

class TimeInstantType extends AbstractTimeGeometricPrimitiveType
{

    /**
     * @var TimePositionType $timePosition
     */
    protected $timePosition = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param anyURI $frame
     * @param TimePositionType $timePosition
     */
    public function __construct($metaDataProperty, $description, $name, $id, $frame, $timePosition)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $frame);
      $this->timePosition = $timePosition;
    }

    /**
     * @return TimePositionType
     */
    public function getTimePosition()
    {
      return $this->timePosition;
    }

    /**
     * @param TimePositionType $timePosition
     * @return \RRSVP\Stuf\TimeInstantType
     */
    public function setTimePosition($timePosition)
    {
      $this->timePosition = $timePosition;
      return $this;
    }

}
