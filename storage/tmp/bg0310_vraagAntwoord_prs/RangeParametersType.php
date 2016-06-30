<?php

namespace RRSVP\Stuf;

class RangeParametersType
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
     * @param anyURI $remoteSchema
     * @param typeType $type
     * @param hrefType $href
     * @param roleType $role
     * @param arcroleType $arcrole
     * @param titleAttrType $title
     * @param showType $show
     * @param actuateType $actuate
     */
    public function __construct($Boolean, $Category, $Quantity, $Count, $BooleanList, $CategoryList, $QuantityList, $CountList, $CategoryExtent, $QuantityExtent, $CountExtent, $CompositeValue, $remoteSchema, $type, $href, $role, $arcrole, $title, $show, $actuate)
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
     */
    public function setCompositeValue($CompositeValue)
    {
      $this->CompositeValue = $CompositeValue;
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
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
     * @return \RRSVP\Stuf\RangeParametersType
     */
    public function setActuate($actuate)
    {
      $this->actuate = $actuate;
      return $this;
    }

}
