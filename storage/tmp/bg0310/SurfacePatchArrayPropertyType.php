<?php

class SurfacePatchArrayPropertyType
{

    /**
     * @var AbstractSurfacePatchType $_SurfacePatch
     */
    protected $_SurfacePatch = null;

    /**
     * @param AbstractSurfacePatchType $_SurfacePatch
     */
    public function __construct($_SurfacePatch)
    {
      $this->_SurfacePatch = $_SurfacePatch;
    }

    /**
     * @return AbstractSurfacePatchType
     */
    public function get_SurfacePatch()
    {
      return $this->_SurfacePatch;
    }

    /**
     * @param AbstractSurfacePatchType $_SurfacePatch
     * @return SurfacePatchArrayPropertyType
     */
    public function set_SurfacePatch($_SurfacePatch)
    {
      $this->_SurfacePatch = $_SurfacePatch;
      return $this;
    }

}
