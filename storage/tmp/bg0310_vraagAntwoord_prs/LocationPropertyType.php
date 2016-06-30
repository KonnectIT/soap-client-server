<?php

namespace RRSVP\Stuf;

class LocationPropertyType
{

    /**
     * @var AbstractGeometryType $_Geometry
     */
    protected $_Geometry = null;

    /**
     * @var CodeType $LocationKeyWord
     */
    protected $LocationKeyWord = null;

    /**
     * @var StringOrRefType $LocationString
     */
    protected $LocationString = null;

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
     * @param AbstractGeometryType $_Geometry
     * @param CodeType $LocationKeyWord
     * @param StringOrRefType $LocationString
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
    public function __construct($_Geometry, $LocationKeyWord, $LocationString, $Null, $remoteSchema, $type, $href, $role, $arcrole, $title, $show, $actuate)
    {
      $this->_Geometry = $_Geometry;
      $this->LocationKeyWord = $LocationKeyWord;
      $this->LocationString = $LocationString;
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
     * @return AbstractGeometryType
     */
    public function get_Geometry()
    {
      return $this->_Geometry;
    }

    /**
     * @param AbstractGeometryType $_Geometry
     * @return \RRSVP\Stuf\LocationPropertyType
     */
    public function set_Geometry($_Geometry)
    {
      $this->_Geometry = $_Geometry;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getLocationKeyWord()
    {
      return $this->LocationKeyWord;
    }

    /**
     * @param CodeType $LocationKeyWord
     * @return \RRSVP\Stuf\LocationPropertyType
     */
    public function setLocationKeyWord($LocationKeyWord)
    {
      $this->LocationKeyWord = $LocationKeyWord;
      return $this;
    }

    /**
     * @return StringOrRefType
     */
    public function getLocationString()
    {
      return $this->LocationString;
    }

    /**
     * @param StringOrRefType $LocationString
     * @return \RRSVP\Stuf\LocationPropertyType
     */
    public function setLocationString($LocationString)
    {
      $this->LocationString = $LocationString;
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
     * @return \RRSVP\Stuf\LocationPropertyType
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
     * @return \RRSVP\Stuf\LocationPropertyType
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
     * @return \RRSVP\Stuf\LocationPropertyType
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
     * @return \RRSVP\Stuf\LocationPropertyType
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
     * @return \RRSVP\Stuf\LocationPropertyType
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
     * @return \RRSVP\Stuf\LocationPropertyType
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
     * @return \RRSVP\Stuf\LocationPropertyType
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
     * @return \RRSVP\Stuf\LocationPropertyType
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
     * @return \RRSVP\Stuf\LocationPropertyType
     */
    public function setActuate($actuate)
    {
      $this->actuate = $actuate;
      return $this;
    }

}
