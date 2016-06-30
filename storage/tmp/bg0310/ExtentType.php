<?php

class ExtentType
{

    /**
     * @var StringOrRefType $description
     */
    protected $description = null;

    /**
     * @var EnvelopeType $boundingBox
     */
    protected $boundingBox = null;

    /**
     * @var PolygonType $boundingPolygon
     */
    protected $boundingPolygon = null;

    /**
     * @var EnvelopeType $verticalExtent
     */
    protected $verticalExtent = null;

    /**
     * @var TimePeriodType $temporalExtent
     */
    protected $temporalExtent = null;

    /**
     * @param StringOrRefType $description
     * @param EnvelopeType $boundingBox
     * @param PolygonType $boundingPolygon
     * @param EnvelopeType $verticalExtent
     * @param TimePeriodType $temporalExtent
     */
    public function __construct($description, $boundingBox, $boundingPolygon, $verticalExtent, $temporalExtent)
    {
      $this->description = $description;
      $this->boundingBox = $boundingBox;
      $this->boundingPolygon = $boundingPolygon;
      $this->verticalExtent = $verticalExtent;
      $this->temporalExtent = $temporalExtent;
    }

    /**
     * @return StringOrRefType
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param StringOrRefType $description
     * @return ExtentType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return EnvelopeType
     */
    public function getBoundingBox()
    {
      return $this->boundingBox;
    }

    /**
     * @param EnvelopeType $boundingBox
     * @return ExtentType
     */
    public function setBoundingBox($boundingBox)
    {
      $this->boundingBox = $boundingBox;
      return $this;
    }

    /**
     * @return PolygonType
     */
    public function getBoundingPolygon()
    {
      return $this->boundingPolygon;
    }

    /**
     * @param PolygonType $boundingPolygon
     * @return ExtentType
     */
    public function setBoundingPolygon($boundingPolygon)
    {
      $this->boundingPolygon = $boundingPolygon;
      return $this;
    }

    /**
     * @return EnvelopeType
     */
    public function getVerticalExtent()
    {
      return $this->verticalExtent;
    }

    /**
     * @param EnvelopeType $verticalExtent
     * @return ExtentType
     */
    public function setVerticalExtent($verticalExtent)
    {
      $this->verticalExtent = $verticalExtent;
      return $this;
    }

    /**
     * @return TimePeriodType
     */
    public function getTemporalExtent()
    {
      return $this->temporalExtent;
    }

    /**
     * @param TimePeriodType $temporalExtent
     * @return ExtentType
     */
    public function setTemporalExtent($temporalExtent)
    {
      $this->temporalExtent = $temporalExtent;
      return $this;
    }

}
