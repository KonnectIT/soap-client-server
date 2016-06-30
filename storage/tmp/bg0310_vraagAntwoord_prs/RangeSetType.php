<?php

namespace RRSVP\Stuf;

class RangeSetType
{

    /**
     * @var ValueArrayType $ValueArray
     */
    protected $ValueArray = null;

    /**
     * @var booleanOrNullList $BooleanList
     */
    protected $BooleanList = null;

    /**
     * @var CodeOrNullListType $CategoryList
     */
    protected $CategoryList = null;

    /**
     * @var MeasureOrNullListType $QuantityList
     */
    protected $QuantityList = null;

    /**
     * @var integerOrNullList $CountList
     */
    protected $CountList = null;

    /**
     * @var DataBlockType $DataBlock
     */
    protected $DataBlock = null;

    /**
     * @var FileType $File
     */
    protected $File = null;

    /**
     * @param ValueArrayType $ValueArray
     * @param booleanOrNullList $BooleanList
     * @param CodeOrNullListType $CategoryList
     * @param MeasureOrNullListType $QuantityList
     * @param integerOrNullList $CountList
     * @param DataBlockType $DataBlock
     * @param FileType $File
     */
    public function __construct($ValueArray, $BooleanList, $CategoryList, $QuantityList, $CountList, $DataBlock, $File)
    {
      $this->ValueArray = $ValueArray;
      $this->BooleanList = $BooleanList;
      $this->CategoryList = $CategoryList;
      $this->QuantityList = $QuantityList;
      $this->CountList = $CountList;
      $this->DataBlock = $DataBlock;
      $this->File = $File;
    }

    /**
     * @return ValueArrayType
     */
    public function getValueArray()
    {
      return $this->ValueArray;
    }

    /**
     * @param ValueArrayType $ValueArray
     * @return \RRSVP\Stuf\RangeSetType
     */
    public function setValueArray($ValueArray)
    {
      $this->ValueArray = $ValueArray;
      return $this;
    }

    /**
     * @return booleanOrNullList
     */
    public function getBooleanList()
    {
      return $this->BooleanList;
    }

    /**
     * @param booleanOrNullList $BooleanList
     * @return \RRSVP\Stuf\RangeSetType
     */
    public function setBooleanList($BooleanList)
    {
      $this->BooleanList = $BooleanList;
      return $this;
    }

    /**
     * @return CodeOrNullListType
     */
    public function getCategoryList()
    {
      return $this->CategoryList;
    }

    /**
     * @param CodeOrNullListType $CategoryList
     * @return \RRSVP\Stuf\RangeSetType
     */
    public function setCategoryList($CategoryList)
    {
      $this->CategoryList = $CategoryList;
      return $this;
    }

    /**
     * @return MeasureOrNullListType
     */
    public function getQuantityList()
    {
      return $this->QuantityList;
    }

    /**
     * @param MeasureOrNullListType $QuantityList
     * @return \RRSVP\Stuf\RangeSetType
     */
    public function setQuantityList($QuantityList)
    {
      $this->QuantityList = $QuantityList;
      return $this;
    }

    /**
     * @return integerOrNullList
     */
    public function getCountList()
    {
      return $this->CountList;
    }

    /**
     * @param integerOrNullList $CountList
     * @return \RRSVP\Stuf\RangeSetType
     */
    public function setCountList($CountList)
    {
      $this->CountList = $CountList;
      return $this;
    }

    /**
     * @return DataBlockType
     */
    public function getDataBlock()
    {
      return $this->DataBlock;
    }

    /**
     * @param DataBlockType $DataBlock
     * @return \RRSVP\Stuf\RangeSetType
     */
    public function setDataBlock($DataBlock)
    {
      $this->DataBlock = $DataBlock;
      return $this;
    }

    /**
     * @return FileType
     */
    public function getFile()
    {
      return $this->File;
    }

    /**
     * @param FileType $File
     * @return \RRSVP\Stuf\RangeSetType
     */
    public function setFile($File)
    {
      $this->File = $File;
      return $this;
    }

}
