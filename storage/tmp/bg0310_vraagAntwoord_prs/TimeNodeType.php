<?php

namespace RRSVP\Stuf;

class TimeNodeType extends AbstractTimeTopologyPrimitiveType
{

    /**
     * @var TimeEdgePropertyType[] $previousEdge
     */
    protected $previousEdge = null;

    /**
     * @var TimeEdgePropertyType[] $nextEdge
     */
    protected $nextEdge = null;

    /**
     * @var TimeInstantPropertyType $position
     */
    protected $position = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     */
    public function __construct($metaDataProperty, $description, $name, $id)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
    }

    /**
     * @return TimeEdgePropertyType[]
     */
    public function getPreviousEdge()
    {
      return $this->previousEdge;
    }

    /**
     * @param TimeEdgePropertyType[] $previousEdge
     * @return \RRSVP\Stuf\TimeNodeType
     */
    public function setPreviousEdge(array $previousEdge = null)
    {
      $this->previousEdge = $previousEdge;
      return $this;
    }

    /**
     * @return TimeEdgePropertyType[]
     */
    public function getNextEdge()
    {
      return $this->nextEdge;
    }

    /**
     * @param TimeEdgePropertyType[] $nextEdge
     * @return \RRSVP\Stuf\TimeNodeType
     */
    public function setNextEdge(array $nextEdge = null)
    {
      $this->nextEdge = $nextEdge;
      return $this;
    }

    /**
     * @return TimeInstantPropertyType
     */
    public function getPosition()
    {
      return $this->position;
    }

    /**
     * @param TimeInstantPropertyType $position
     * @return \RRSVP\Stuf\TimeNodeType
     */
    public function setPosition($position)
    {
      $this->position = $position;
      return $this;
    }

}
