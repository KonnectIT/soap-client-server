<?php

class SurfaceArrayPropertyType
{

    /**
     * @var AbstractSurfaceType $_Surface
     */
    protected $_Surface = null;

    /**
     * @param AbstractSurfaceType $_Surface
     */
    public function __construct($_Surface)
    {
      $this->_Surface = $_Surface;
    }

    /**
     * @return AbstractSurfaceType
     */
    public function get_Surface()
    {
      return $this->_Surface;
    }

    /**
     * @param AbstractSurfaceType $_Surface
     * @return SurfaceArrayPropertyType
     */
    public function set_Surface($_Surface)
    {
      $this->_Surface = $_Surface;
      return $this;
    }

}
