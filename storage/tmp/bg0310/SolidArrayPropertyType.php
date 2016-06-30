<?php

class SolidArrayPropertyType
{

    /**
     * @var AbstractSolidType $_Solid
     */
    protected $_Solid = null;

    /**
     * @param AbstractSolidType $_Solid
     */
    public function __construct($_Solid)
    {
      $this->_Solid = $_Solid;
    }

    /**
     * @return AbstractSolidType
     */
    public function get_Solid()
    {
      return $this->_Solid;
    }

    /**
     * @param AbstractSolidType $_Solid
     * @return SolidArrayPropertyType
     */
    public function set_Solid($_Solid)
    {
      $this->_Solid = $_Solid;
      return $this;
    }

}
