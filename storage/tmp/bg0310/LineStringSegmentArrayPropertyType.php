<?php

class LineStringSegmentArrayPropertyType
{

    /**
     * @var LineStringSegmentType $LineStringSegment
     */
    protected $LineStringSegment = null;

    /**
     * @param LineStringSegmentType $LineStringSegment
     */
    public function __construct($LineStringSegment)
    {
      $this->LineStringSegment = $LineStringSegment;
    }

    /**
     * @return LineStringSegmentType
     */
    public function getLineStringSegment()
    {
      return $this->LineStringSegment;
    }

    /**
     * @param LineStringSegmentType $LineStringSegment
     * @return LineStringSegmentArrayPropertyType
     */
    public function setLineStringSegment($LineStringSegment)
    {
      $this->LineStringSegment = $LineStringSegment;
      return $this;
    }

}
