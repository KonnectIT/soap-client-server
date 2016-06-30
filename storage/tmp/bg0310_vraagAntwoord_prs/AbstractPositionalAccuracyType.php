<?php

namespace RRSVP\Stuf;

abstract class AbstractPositionalAccuracyType
{

    /**
     * @var CodeType $measureDescription
     */
    protected $measureDescription = null;

    /**
     * @param CodeType $measureDescription
     */
    public function __construct($measureDescription)
    {
      $this->measureDescription = $measureDescription;
    }

    /**
     * @return CodeType
     */
    public function getMeasureDescription()
    {
      return $this->measureDescription;
    }

    /**
     * @param CodeType $measureDescription
     * @return \RRSVP\Stuf\AbstractPositionalAccuracyType
     */
    public function setMeasureDescription($measureDescription)
    {
      $this->measureDescription = $measureDescription;
      return $this;
    }

}
