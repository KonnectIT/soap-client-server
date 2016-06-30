<?php

class scope
{

    /**
     * @var VESscopeprsr $object
     */
    protected $object = null;

    /**
     * @param VESscopeprsr $object
     */
    public function __construct($object)
    {
      $this->object = $object;
    }

    /**
     * @return VESscopeprsr
     */
    public function getObject()
    {
      return $this->object;
    }

    /**
     * @param VESscopeprsr $object
     * @return scope
     */
    public function setObject($object)
    {
      $this->object = $object;
      return $this;
    }

}
