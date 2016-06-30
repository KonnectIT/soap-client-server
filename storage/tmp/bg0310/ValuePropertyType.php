<?php

class ValuePropertyType
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
     * @var anyURI $remoteSchema
     */
    protected $remoteSchema = null;

    /**
     * @var typeType $type
     */
    protected $type = null;

    /**
     * @var hrefType $href
     */
    protected $href = null;

    /**
     * @var roleType $role
     */
    protected $role = null;

    /**
     * @var arcroleType $arcrole
     */
    protected $arcrole = null;

    /**
     * @var titleAttrType $title
     */
    protected $title = null;

    /**
     * @var showType $show
     */
    protected $show = null;

    /**
     * @var actuateType $actuate
     */
    protected $actuate = null;

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
     * @param anyURI $remoteSchema
     * @param typeType $type
     * @param hrefType $href
     * @param roleType $role
     * @param arcroleType $arcrole
     * @param titleAttrType $title
     * @param showType $show
     * @param actuateType $actuate
     */
    public function __construct($Boolean, $Category, $Quantity, $Count, $BooleanList, $CategoryList, $QuantityList, $CountList, $CategoryExtent, $QuantityExtent, $CountExtent, $CompositeValue, $_Object, $Null, $remoteSchema, $type, $href, $role, $arcrole, $title, $show, $actuate)
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
      $this->remoteSchema = $remoteSchema;
      $this->type = $type;
      $this->href = $href;
      $this->role = $role;
      $this->arcrole = $arcrole;
      $this->title = $title;
      $this->show = $show;
      $this->actuate = $actuate;
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
     * @return ValuePropertyType
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
     * @return ValuePropertyType
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
     * @return ValuePropertyType
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
     * @return ValuePropertyType
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
     * @return ValuePropertyType
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
     * @return ValuePropertyType
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
     * @return ValuePropertyType
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
     * @return ValuePropertyType
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
     * @return ValuePropertyType
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
     * @return ValuePropertyType
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
     * @return ValuePropertyType
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
     * @return ValuePropertyType
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
     * @return ValuePropertyType
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
     * @return ValuePropertyType
     */
    public function setNull($Null)
    {
      $this->Null = $Null;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getRemoteSchema()
    {
      return $this->remoteSchema;
    }

    /**
     * @param anyURI $remoteSchema
     * @return ValuePropertyType
     */
    public function setRemoteSchema($remoteSchema)
    {
      $this->remoteSchema = $remoteSchema;
      return $this;
    }

    /**
     * @return typeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param typeType $type
     * @return ValuePropertyType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return hrefType
     */
    public function getHref()
    {
      return $this->href;
    }

    /**
     * @param hrefType $href
     * @return ValuePropertyType
     */
    public function setHref($href)
    {
      $this->href = $href;
      return $this;
    }

    /**
     * @return roleType
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param roleType $role
     * @return ValuePropertyType
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

    /**
     * @return arcroleType
     */
    public function getArcrole()
    {
      return $this->arcrole;
    }

    /**
     * @param arcroleType $arcrole
     * @return ValuePropertyType
     */
    public function setArcrole($arcrole)
    {
      $this->arcrole = $arcrole;
      return $this;
    }

    /**
     * @return titleAttrType
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param titleAttrType $title
     * @return ValuePropertyType
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return showType
     */
    public function getShow()
    {
      return $this->show;
    }

    /**
     * @param showType $show
     * @return ValuePropertyType
     */
    public function setShow($show)
    {
      $this->show = $show;
      return $this;
    }

    /**
     * @return actuateType
     */
    public function getActuate()
    {
      return $this->actuate;
    }

    /**
     * @param actuateType $actuate
     * @return ValuePropertyType
     */
    public function setActuate($actuate)
    {
      $this->actuate = $actuate;
      return $this;
    }

}
