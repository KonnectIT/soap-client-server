<?php

namespace RRSVP\Stuf;

class LabelStylePropertyType
{

    /**
     * @var LabelStyleType $LabelStyle
     */
    protected $LabelStyle = null;

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
     * @param LabelStyleType $LabelStyle
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
    public function __construct($LabelStyle, $about, $remoteSchema, $type, $href, $role, $arcrole, $title, $show, $actuate)
    {
      $this->LabelStyle = $LabelStyle;
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
     * @return LabelStyleType
     */
    public function getLabelStyle()
    {
      return $this->LabelStyle;
    }

    /**
     * @param LabelStyleType $LabelStyle
     * @return \RRSVP\Stuf\LabelStylePropertyType
     */
    public function setLabelStyle($LabelStyle)
    {
      $this->LabelStyle = $LabelStyle;
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
     * @return \RRSVP\Stuf\LabelStylePropertyType
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
     * @return \RRSVP\Stuf\LabelStylePropertyType
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
     * @return \RRSVP\Stuf\LabelStylePropertyType
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
     * @return \RRSVP\Stuf\LabelStylePropertyType
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
     * @return \RRSVP\Stuf\LabelStylePropertyType
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
     * @return \RRSVP\Stuf\LabelStylePropertyType
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
     * @return \RRSVP\Stuf\LabelStylePropertyType
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
     * @return \RRSVP\Stuf\LabelStylePropertyType
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
     * @return \RRSVP\Stuf\LabelStylePropertyType
     */
    public function setActuate($actuate)
    {
      $this->actuate = $actuate;
      return $this;
    }

}
