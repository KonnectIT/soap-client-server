<?php

namespace RRSVP\Stuf;

class CurveSegmentArrayPropertyType
{

    /**
     * @var AbstractCurveSegmentType $_CurveSegment
     */
    protected $_CurveSegment = null;

    /**
     * @param AbstractCurveSegmentType $_CurveSegment
     */
    public function __construct($_CurveSegment)
    {
      $this->_CurveSegment = $_CurveSegment;
    }

    /**
     * @return AbstractCurveSegmentType
     */
    public function get_CurveSegment()
    {
      return $this->_CurveSegment;
    }

    /**
     * @param AbstractCurveSegmentType $_CurveSegment
     * @return \RRSVP\Stuf\CurveSegmentArrayPropertyType
     */
    public function set_CurveSegment($_CurveSegment)
    {
      $this->_CurveSegment = $_CurveSegment;
      return $this;
    }

}
