<?php

class ValueArrayPropertyType
{

    /**
     * @var boolean $Boolean
     */
    protected $Boolean = null;

    /**
     * @var CodeType $Category
     */
    protected $Category = null;

    /**
     * @var MeasureType $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $Count
     */
    protected $Count = null;

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
     * @var CategoryExtentType $CategoryExtent
     */
    protected $CategoryExtent = null;

    /**
     * @var QuantityExtentType $QuantityExtent
     */
    protected $QuantityExtent = null;

    /**
     * @var CountExtentType $CountExtent
     */
    protected $CountExtent = null;

    /**
     * @var CompositeValueType $CompositeValue
     */
    protected $CompositeValue = null;

    /**
     * @var anyType $_Object
     */
    protected $_Object = null;

    /**
     * @var NullType $Null
     */
    protected $Null = null;

    /**
     * @param boolean $Boolean
     * @param CodeType $Category
     * @param MeasureType $Quantity
     * @param int $Count
     * @param booleanOrNullList $BooleanList
     * @param CodeOrNullListType $CategoryList
     * @param MeasureOrNullListType $QuantityList
     * @param integerOrNullList $CountList
     * @param CategoryExtentType $CategoryExtent
     * @param QuantityExtentType $QuantityExtent
     * @param CountExtentType $CountExtent
     * @param CompositeValueType $CompositeValue
     * @param anyType $_Object
     * @param NullType $Null
     */
    public function __construct($Boolean, $Category, $Quantity, $Count, $BooleanList, $CategoryList, $QuantityList, $CountList, $CategoryExtent, $QuantityExtent, $CountExtent, $CompositeValue, $_Object, $Null)
    {
      $this->Boolean = $Boolean;
      $this->Category = $Category;
      $this->Quantity = $Quantity;
      $this->Count = $Count;
      $this->BooleanList = $BooleanList;
      $this->CategoryList = $CategoryList;
      $this->QuantityList = $QuantityList;
      $this->CountList = $CountList;
      $this->CategoryExtent = $CategoryExtent;
      $this->QuantityExtent = $QuantityExtent;
      $this->CountExtent = $CountExtent;
      $this->CompositeValue = $CompositeValue;
      $this->_Object = $_Object;
      $this->Null = $Null;
    }

    /**
     * @return boolean
     */
    public function getBoolean()
    {
      return $this->Boolean;
    }

    /**
     * @param boolean $Boolean
     * @return ValueArrayPropertyType
     */
    public function setBoolean($Boolean)
    {
      $this->Boolean = $Boolean;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param CodeType $Category
     * @return ValueArrayPropertyType
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param MeasureType $Quantity
     * @return ValueArrayPropertyType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return ValueArrayPropertyType
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
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
     * @return ValueArrayPropertyType
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
     * @return ValueArrayPropertyType
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
     * @return ValueArrayPropertyType
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
     * @return ValueArrayPropertyType
     */
    public function setCountList($CountList)
    {
      $this->CountList = $CountList;
      return $this;
    }

    /**
     * @return CategoryExtentType
     */
    public function getCategoryExtent()
    {
      return $this->CategoryExtent;
    }

    /**
     * @param CategoryExtentType $CategoryExtent
     * @return ValueArrayPropertyType
     */
    public function setCategoryExtent($CategoryExtent)
    {
      $this->CategoryExtent = $CategoryExtent;
      return $this;
    }

    /**
     * @return QuantityExtentType
     */
    public function getQuantityExtent()
    {
      return $this->QuantityExtent;
    }

    /**
     * @param QuantityExtentType $QuantityExtent
     * @return ValueArrayPropertyType
     */
    public function setQuantityExtent($QuantityExtent)
    {
      $this->QuantityExtent = $QuantityExtent;
      return $this;
    }

    /**
     * @return CountExtentType
     */
    public function getCountExtent()
    {
      return $this->CountExtent;
    }

    /**
     * @param CountExtentType $CountExtent
     * @return ValueArrayPropertyType
     */
    public function setCountExtent($CountExtent)
    {
      $this->CountExtent = $CountExtent;
      return $this;
    }

    /**
     * @return CompositeValueType
     */
    public function getCompositeValue()
    {
      return $this->CompositeValue;
    }

    /**
     * @param CompositeValueType $CompositeValue
     * @return ValueArrayPropertyType
     */
    public function setCompositeValue($CompositeValue)
    {
      $this->CompositeValue = $CompositeValue;
      return $this;
    }

    /**
     * @return anyType
     */
    public function get_Object()
    {
      return $this->_Object;
    }

    /**
     * @param anyType $_Object
     * @return ValueArrayPropertyType
     */
    public function set_Object($_Object)
    {
      $this->_Object = $_Object;
      return $this;
    }

    /**
     * @return NullType
     */
    public function getNull()
    {
      return $this->Null;
    }

    /**
     * @param NullType $Null
     * @return ValueArrayPropertyType
     */
    public function setNull($Null)
    {
      $this->Null = $Null;
      return $this;
    }

}
