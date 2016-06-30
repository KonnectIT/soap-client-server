<?php

class DataBlockType
{

    /**
     * @var RangeParametersType $rangeParameters
     */
    protected $rangeParameters = null;

    /**
     * @var CoordinatesType $tupleList
     */
    protected $tupleList = null;

    /**
     * @var doubleOrNullList $doubleOrNullTupleList
     */
    protected $doubleOrNullTupleList = null;

    /**
     * @param RangeParametersType $rangeParameters
     * @param CoordinatesType $tupleList
     * @param doubleOrNullList $doubleOrNullTupleList
     */
    public function __construct($rangeParameters, $tupleList, $doubleOrNullTupleList)
    {
      $this->rangeParameters = $rangeParameters;
      $this->tupleList = $tupleList;
      $this->doubleOrNullTupleList = $doubleOrNullTupleList;
    }

    /**
     * @return RangeParametersType
     */
    public function getRangeParameters()
    {
      return $this->rangeParameters;
    }

    /**
     * @param RangeParametersType $rangeParameters
     * @return DataBlockType
     */
    public function setRangeParameters($rangeParameters)
    {
      $this->rangeParameters = $rangeParameters;
      return $this;
    }

    /**
     * @return CoordinatesType
     */
    public function getTupleList()
    {
      return $this->tupleList;
    }

    /**
     * @param CoordinatesType $tupleList
     * @return DataBlockType
     */
    public function setTupleList($tupleList)
    {
      $this->tupleList = $tupleList;
      return $this;
    }

    /**
     * @return doubleOrNullList
     */
    public function getDoubleOrNullTupleList()
    {
      return $this->doubleOrNullTupleList;
    }

    /**
     * @param doubleOrNullList $doubleOrNullTupleList
     * @return DataBlockType
     */
    public function setDoubleOrNullTupleList($doubleOrNullTupleList)
    {
      $this->doubleOrNullTupleList = $doubleOrNullTupleList;
      return $this;
    }

}
