<?php

namespace RRSVP\Stuf;

class locatorType
{

    /**
     * @var titleAttrType $title
     */
    protected $title = null;

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
     * @var labelType $label
     */
    protected $label = null;

    /**
     * @param titleAttrType $title
     * @param typeType $type
     * @param hrefType $href
     * @param roleType $role
     * @param labelType $label
     */
    public function __construct($title, $type, $href, $role, $label)
    {
      $this->title = $title;
      $this->type = $type;
      $this->href = $href;
      $this->role = $role;
      $this->label = $label;
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
     * @return \RRSVP\Stuf\locatorType
     */
    public function setTitle($title)
    {
      $this->title = $title;
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
     * @return \RRSVP\Stuf\locatorType
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
     * @return \RRSVP\Stuf\locatorType
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
     * @return \RRSVP\Stuf\locatorType
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

    /**
     * @return labelType
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param labelType $label
     * @return \RRSVP\Stuf\locatorType
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

}
