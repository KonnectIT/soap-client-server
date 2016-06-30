<?php

class extended
{

    /**
     * @var titleAttrType $title
     */
    protected $title = null;

    /**
     * @var resourceType $resource
     */
    protected $resource = null;

    /**
     * @var locatorType $locator
     */
    protected $locator = null;

    /**
     * @var arcType $arc
     */
    protected $arc = null;

    /**
     * @var typeType $type
     */
    protected $type = null;

    /**
     * @var roleType $role
     */
    protected $role = null;

    /**
     * @param titleAttrType $title
     * @param resourceType $resource
     * @param locatorType $locator
     * @param arcType $arc
     * @param typeType $type
     * @param roleType $role
     */
    public function __construct($title, $resource, $locator, $arc, $type, $role)
    {
      $this->title = $title;
      $this->resource = $resource;
      $this->locator = $locator;
      $this->arc = $arc;
      $this->type = $type;
      $this->role = $role;
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
     * @return extended
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return resourceType
     */
    public function getResource()
    {
      return $this->resource;
    }

    /**
     * @param resourceType $resource
     * @return extended
     */
    public function setResource($resource)
    {
      $this->resource = $resource;
      return $this;
    }

    /**
     * @return locatorType
     */
    public function getLocator()
    {
      return $this->locator;
    }

    /**
     * @param locatorType $locator
     * @return extended
     */
    public function setLocator($locator)
    {
      $this->locator = $locator;
      return $this;
    }

    /**
     * @return arcType
     */
    public function getArc()
    {
      return $this->arc;
    }

    /**
     * @param arcType $arc
     * @return extended
     */
    public function setArc($arc)
    {
      $this->arc = $arc;
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
     * @return extended
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
     * @return extended
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

}
