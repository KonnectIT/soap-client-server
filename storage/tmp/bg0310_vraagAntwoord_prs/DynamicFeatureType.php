<?php

namespace RRSVP\Stuf;

class DynamicFeatureType extends AbstractFeatureType
{

    /**
     * @var TimePrimitivePropertyType $validTime
     */
    protected $validTime = null;

    /**
     * @var HistoryPropertyType $history
     */
    protected $history = null;

    /**
     * @var StringOrRefType $dataSource
     */
    protected $dataSource = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param BoundingShapeType $boundedBy
     * @param LocationPropertyType $location
     * @param TimePrimitivePropertyType $validTime
     * @param HistoryPropertyType $history
     * @param StringOrRefType $dataSource
     */
    public function __construct($metaDataProperty, $description, $name, $id, $boundedBy, $location, $validTime, $history, $dataSource)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $boundedBy, $location);
      $this->validTime = $validTime;
      $this->history = $history;
      $this->dataSource = $dataSource;
    }

    /**
     * @return TimePrimitivePropertyType
     */
    public function getValidTime()
    {
      return $this->validTime;
    }

    /**
     * @param TimePrimitivePropertyType $validTime
     * @return \RRSVP\Stuf\DynamicFeatureType
     */
    public function setValidTime($validTime)
    {
      $this->validTime = $validTime;
      return $this;
    }

    /**
     * @return HistoryPropertyType
     */
    public function getHistory()
    {
      return $this->history;
    }

    /**
     * @param HistoryPropertyType $history
     * @return \RRSVP\Stuf\DynamicFeatureType
     */
    public function setHistory($history)
    {
      $this->history = $history;
      return $this;
    }

    /**
     * @return StringOrRefType
     */
    public function getDataSource()
    {
      return $this->dataSource;
    }

    /**
     * @param StringOrRefType $dataSource
     * @return \RRSVP\Stuf\DynamicFeatureType
     */
    public function setDataSource($dataSource)
    {
      $this->dataSource = $dataSource;
      return $this;
    }

}
