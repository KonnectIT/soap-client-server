<?php

namespace RRSVP\Stuf;

class ArrayAssociationType
{

    /**
     * @var anyType $_Object
     */
    protected $_Object = null;

    /**
     * @param anyType $_Object
     */
    public function __construct($_Object)
    {
      $this->_Object = $_Object;
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
     * @return \RRSVP\Stuf\ArrayAssociationType
     */
    public function set_Object($_Object)
    {
      $this->_Object = $_Object;
      return $this;
    }

}
