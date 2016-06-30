<?php

namespace RRSVP\Stuf;

class TimeEdgeType extends AbstractTimeTopologyPrimitiveType
{

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
     * @return TimeNodePropertyType
     */
    public function getStart()
    {
      return $this->start;
    }

    /**
     * @param TimeNodePropertyType $start
     * @return \RRSVP\Stuf\TimeEdgeType
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
     * @return \RRSVP\Stuf\TimeEdgeType
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
     * @return \RRSVP\Stuf\TimeEdgeType
     */
    public function setExtent($extent)
    {
      $this->extent = $extent;
      return $this;
    }

}
