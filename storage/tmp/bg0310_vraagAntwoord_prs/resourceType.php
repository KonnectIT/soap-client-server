<?php

namespace RRSVP\Stuf;

class resourceType
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var typeType $type
     */
    protected $type = null;

    /**
     * @var roleType $role
     */
    protected $role = null;

    /**
     * @var titleAttrType $title
     */
    protected $title = null;

    /**
     * @var labelType $label
     */
    protected $label = null;

    /**
     * @param string $any
     * @param typeType $type
     * @param roleType $role
     * @param titleAttrType $title
     * @param labelType $label
     */
    public function __construct($any, $type, $role, $title, $label)
    {
      $this->any = $any;
      $this->type = $type;
      $this->role = $role;
      $this->title = $title;
      $this->label = $label;
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
     * @return \RRSVP\Stuf\resourceType
     */
    public function setAny($any)
    {
      $this->any = $any;
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
     * @return \RRSVP\Stuf\resourceType
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \RRSVP\Stuf\resourceType
     */
    public function setRole($role)
    {
      $this->role = $role;
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
     * @return \RRSVP\Stuf\resourceType
     */
    public function setTitle($title)
    {
      $this->title = $title;
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
     * @return \RRSVP\Stuf\resourceType
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

}
