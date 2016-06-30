<?php

namespace RRSVP\Stuf;

class PointArrayPropertyType
{

    /**
     * @var PointType $Point
     */
    protected $Point = null;

    /**
     * @param PointType $Point
     */
    public function __construct($Point)
    {
      $this->Point = $Point;
    }

    /**
     * @return PointType
     */
    public function getPoint()
    {
      return $this->Point;
    }

    /**
     * @param PointType $Point
     * @return \RRSVP\Stuf\PointArrayPropertyType
     */
    public function setPoint($Point)
    {
      $this->Point = $Point;
      return $this;
    }

}
