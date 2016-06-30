<?php

class TopoPrimitiveArrayAssociationType
{

    /**
     * @var AbstractTopoPrimitiveType $_TopoPrimitive
     */
    protected $_TopoPrimitive = null;

    /**
     * @param AbstractTopoPrimitiveType $_TopoPrimitive
     */
    public function __construct($_TopoPrimitive)
    {
      $this->_TopoPrimitive = $_TopoPrimitive;
    }

    /**
     * @return AbstractTopoPrimitiveType
     */
    public function get_TopoPrimitive()
    {
      return $this->_TopoPrimitive;
    }

    /**
     * @param AbstractTopoPrimitiveType $_TopoPrimitive
     * @return TopoPrimitiveArrayAssociationType
     */
    public function set_TopoPrimitive($_TopoPrimitive)
    {
      $this->_TopoPrimitive = $_TopoPrimitive;
      return $this;
    }

}
