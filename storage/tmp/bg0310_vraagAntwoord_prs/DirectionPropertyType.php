<?php

namespace RRSVP\Stuf;

class DirectionPropertyType
{

    /**
     * @var DirectionVectorType $DirectionVector
     */
    protected $DirectionVector = null;

    /**
     * @var CompassPointEnumeration $CompassPoint
     */
    protected $CompassPoint = null;

    /**
     * @var CodeType $DirectionKeyword
     */
    protected $DirectionKeyword = null;

    /**
     * @var StringOrRefType $DirectionString
     */
    protected $DirectionString = null;

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
     * @param DirectionVectorType $DirectionVector
     * @param CompassPointEnumeration $CompassPoint
     * @param CodeType $DirectionKeyword
     * @param StringOrRefType $DirectionString
     * @param anyURI $remoteSchema
     * @param typeType $type
     * @param hrefType $href
     * @param roleType $role
     * @param arcroleType $arcrole
     * @param titleAttrType $title
     * @param showType $show
     * @param actuateType $actuate
     */
    public function __construct($DirectionVector, $CompassPoint, $DirectionKeyword, $DirectionString, $remoteSchema, $type, $href, $role, $arcrole, $title, $show, $actuate)
    {
      $this->DirectionVector = $DirectionVector;
      $this->CompassPoint = $CompassPoint;
      $this->DirectionKeyword = $DirectionKeyword;
      $this->DirectionString = $DirectionString;
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
     * @return DirectionVectorType
     */
    public function getDirectionVector()
    {
      return $this->DirectionVector;
    }

    /**
     * @param DirectionVectorType $DirectionVector
     * @return \RRSVP\Stuf\DirectionPropertyType
     */
    public function setDirectionVector($DirectionVector)
    {
      $this->DirectionVector = $DirectionVector;
      return $this;
    }

    /**
     * @return CompassPointEnumeration
     */
    public function getCompassPoint()
    {
      return $this->CompassPoint;
    }

    /**
     * @param CompassPointEnumeration $CompassPoint
     * @return \RRSVP\Stuf\DirectionPropertyType
     */
    public function setCompassPoint($CompassPoint)
    {
      $this->CompassPoint = $CompassPoint;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getDirectionKeyword()
    {
      return $this->DirectionKeyword;
    }

    /**
     * @param CodeType $DirectionKeyword
     * @return \RRSVP\Stuf\DirectionPropertyType
     */
    public function setDirectionKeyword($DirectionKeyword)
    {
      $this->DirectionKeyword = $DirectionKeyword;
      return $this;
    }

    /**
     * @return StringOrRefType
     */
    public function getDirectionString()
    {
      return $this->DirectionString;
    }

    /**
     * @param StringOrRefType $DirectionString
     * @return \RRSVP\Stuf\DirectionPropertyType
     */
    public function setDirectionString($DirectionString)
    {
      $this->DirectionString = $DirectionString;
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
     * @return \RRSVP\Stuf\DirectionPropertyType
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
     * @return \RRSVP\Stuf\DirectionPropertyType
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
     * @return \RRSVP\Stuf\DirectionPropertyType
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
     * @return \RRSVP\Stuf\DirectionPropertyType
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
     * @return \RRSVP\Stuf\DirectionPropertyType
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
     * @return \RRSVP\Stuf\DirectionPropertyType
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
     * @return \RRSVP\Stuf\DirectionPropertyType
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
     * @return \RRSVP\Stuf\DirectionPropertyType
     */
    public function setActuate($actuate)
    {
      $this->actuate = $actuate;
      return $this;
    }

}
