<?php

class AbstractRingPropertyType
{

    /**
     * @var AbstractRingType $_Ring
     */
    protected $_Ring = null;

    /**
     * @param AbstractRingType $_Ring
     */
    public function __construct($_Ring)
    {
      $this->_Ring = $_Ring;
    }

    /**
     * @return AbstractRingType
     */
    public function get_Ring()
    {
      return $this->_Ring;
    }

    /**
     * @param AbstractRingType $_Ring
     * @return AbstractRingPropertyType
     */
    public function set_Ring($_Ring)
    {
      $this->_Ring = $_Ring;
      return $this;
    }

}
