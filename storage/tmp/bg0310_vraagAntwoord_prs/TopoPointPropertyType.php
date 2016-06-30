<?php

namespace RRSVP\Stuf;

class TopoPointPropertyType
{

    /**
     * @var TopoPointType $TopoPoint
     */
    protected $TopoPoint = null;

    /**
     * @param TopoPointType $TopoPoint
     */
    public function __construct($TopoPoint)
    {
      $this->TopoPoint = $TopoPoint;
    }

    /**
     * @return TopoPointType
     */
    public function getTopoPoint()
    {
      return $this->TopoPoint;
    }

    /**
     * @param TopoPointType $TopoPoint
     * @return \RRSVP\Stuf\TopoPointPropertyType
     */
    public function setTopoPoint($TopoPoint)
    {
      $this->TopoPoint = $TopoPoint;
      return $this;
    }

}
