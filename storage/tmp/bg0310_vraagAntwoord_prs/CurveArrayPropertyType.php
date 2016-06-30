<?php

namespace RRSVP\Stuf;

class CurveArrayPropertyType
{

    /**
     * @var AbstractCurveType $_Curve
     */
    protected $_Curve = null;

    /**
     * @param AbstractCurveType $_Curve
     */
    public function __construct($_Curve)
    {
      $this->_Curve = $_Curve;
    }

    /**
     * @return AbstractCurveType
     */
    public function get_Curve()
    {
      return $this->_Curve;
    }

    /**
     * @param AbstractCurveType $_Curve
     * @return \RRSVP\Stuf\CurveArrayPropertyType
     */
    public function set_Curve($_Curve)
    {
      $this->_Curve = $_Curve;
      return $this;
    }

}
