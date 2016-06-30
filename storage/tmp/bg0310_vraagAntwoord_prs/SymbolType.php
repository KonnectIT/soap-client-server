<?php

namespace RRSVP\Stuf;

class SymbolType
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var SymbolTypeEnumeration $symbolType
     */
    protected $symbolType = null;

    /**
     * @var string $transform
     */
    protected $transform = null;

    /**
     * @var anyURI $about
     */
    protected $about = null;

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
     * @param string $any
     * @param SymbolTypeEnumeration $symbolType
     * @param string $transform
     * @param anyURI $about
     * @param anyURI $remoteSchema
     * @param typeType $type
     * @param hrefType $href
     * @param roleType $role
     * @param arcroleType $arcrole
     * @param titleAttrType $title
     * @param showType $show
     * @param actuateType $actuate
     */
    public function __construct($any, $symbolType, $transform, $about, $remoteSchema, $type, $href, $role, $arcrole, $title, $show, $actuate)
    {
      $this->any = $any;
      $this->symbolType = $symbolType;
      $this->transform = $transform;
      $this->about = $about;
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
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \RRSVP\Stuf\SymbolType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return SymbolTypeEnumeration
     */
    public function getSymbolType()
    {
      return $this->symbolType;
    }

    /**
     * @param SymbolTypeEnumeration $symbolType
     * @return \RRSVP\Stuf\SymbolType
     */
    public function setSymbolType($symbolType)
    {
      $this->symbolType = $symbolType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransform()
    {
      return $this->transform;
    }

    /**
     * @param string $transform
     * @return \RRSVP\Stuf\SymbolType
     */
    public function setTransform($transform)
    {
      $this->transform = $transform;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getAbout()
    {
      return $this->about;
    }

    /**
     * @param anyURI $about
     * @return \RRSVP\Stuf\SymbolType
     */
    public function setAbout($about)
    {
      $this->about = $about;
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
     * @return \RRSVP\Stuf\SymbolType
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
     * @return \RRSVP\Stuf\SymbolType
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
     * @return \RRSVP\Stuf\SymbolType
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
     * @return \RRSVP\Stuf\SymbolType
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
     * @return \RRSVP\Stuf\SymbolType
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
     * @return \RRSVP\Stuf\SymbolType
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
     * @return \RRSVP\Stuf\SymbolType
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
     * @return \RRSVP\Stuf\SymbolType
     */
    public function setActuate($actuate)
    {
      $this->actuate = $actuate;
      return $this;
    }

}
