<?php

abstract class AbstractTimeSliceType extends AbstractGMLType
{

    /**
     * @var TimePrimitivePropertyType $validTime
     */
    protected $validTime = null;

    /**
     * @var StringOrRefType $dataSource
     */
    protected $dataSource = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param TimePrimitivePropertyType $validTime
     * @param StringOrRefType $dataSource
     */
    public function __construct($metaDataProperty, $description, $name, $id, $validTime, $dataSource)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->validTime = $validTime;
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
     * @return AbstractTimeSliceType
     */
    public function setValidTime($validTime)
    {
      $this->validTime = $validTime;
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
     * @return AbstractTimeSliceType
     */
    public function setDataSource($dataSource)
    {
      $this->dataSource = $dataSource;
      return $this;
    }

}
