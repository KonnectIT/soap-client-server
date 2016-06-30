<?php

class TinType extends TriangulatedSurfaceType
{

    /**
     * @var LineStringSegmentArrayPropertyType[] $stopLines
     */
    protected $stopLines = null;

    /**
     * @var LineStringSegmentArrayPropertyType[] $breakLines
     */
    protected $breakLines = null;

    /**
     * @var LengthType $maxLength
     */
    protected $maxLength = null;

    /**
     * @var controlPoint $controlPoint
     */
    protected $controlPoint = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param TrianglePatchArrayPropertyType $trianglePatches
     * @param LengthType $maxLength
     * @param controlPoint $controlPoint
     */
    public function __construct($metaDataProperty, $description, $name, $trianglePatches, $maxLength, $controlPoint)
    {
      parent::__construct($metaDataProperty, $description, $name, $trianglePatches);
      $this->maxLength = $maxLength;
      $this->controlPoint = $controlPoint;
    }

    /**
     * @return LineStringSegmentArrayPropertyType[]
     */
    public function getStopLines()
    {
      return $this->stopLines;
    }

    /**
     * @param LineStringSegmentArrayPropertyType[] $stopLines
     * @return TinType
     */
    public function setStopLines(array $stopLines = null)
    {
      $this->stopLines = $stopLines;
      return $this;
    }

    /**
     * @return LineStringSegmentArrayPropertyType[]
     */
    public function getBreakLines()
    {
      return $this->breakLines;
    }

    /**
     * @param LineStringSegmentArrayPropertyType[] $breakLines
     * @return TinType
     */
    public function setBreakLines(array $breakLines = null)
    {
      $this->breakLines = $breakLines;
      return $this;
    }

    /**
     * @return LengthType
     */
    public function getMaxLength()
    {
      return $this->maxLength;
    }

    /**
     * @param LengthType $maxLength
     * @return TinType
     */
    public function setMaxLength($maxLength)
    {
      $this->maxLength = $maxLength;
      return $this;
    }

    /**
     * @return controlPoint
     */
    public function getControlPoint()
    {
      return $this->controlPoint;
    }

    /**
     * @param controlPoint $controlPoint
     * @return TinType
     */
    public function setControlPoint($controlPoint)
    {
      $this->controlPoint = $controlPoint;
      return $this;
    }

}
