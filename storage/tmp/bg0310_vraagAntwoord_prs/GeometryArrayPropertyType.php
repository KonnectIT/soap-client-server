<?php

namespace RRSVP\Stuf;

class GeometryArrayPropertyType
{

    /**
     * @var AbstractGeometryType $_Geometry
     */
    protected $_Geometry = null;

    /**
     * @param AbstractGeometryType $_Geometry
     */
    public function __construct($_Geometry)
    {
      $this->_Geometry = $_Geometry;
    }

    /**
     * @return AbstractGeometryType
     */
    public function get_Geometry()
    {
      return $this->_Geometry;
    }

    /**
     * @param AbstractGeometryType $_Geometry
     * @return \RRSVP\Stuf\GeometryArrayPropertyType
     */
    public function set_Geometry($_Geometry)
    {
      $this->_Geometry = $_Geometry;
      return $this;
    }

}
