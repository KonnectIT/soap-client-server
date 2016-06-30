<?php

namespace RRSVP\Stuf;

class TrianglePatchArrayPropertyType
{

    /**
     * @var TriangleType $Triangle
     */
    protected $Triangle = null;

    /**
     * @param TriangleType $Triangle
     */
    public function __construct($Triangle)
    {
      $this->Triangle = $Triangle;
    }

    /**
     * @return TriangleType
     */
    public function getTriangle()
    {
      return $this->Triangle;
    }

    /**
     * @param TriangleType $Triangle
     * @return \RRSVP\Stuf\TrianglePatchArrayPropertyType
     */
    public function setTriangle($Triangle)
    {
      $this->Triangle = $Triangle;
      return $this;
    }

}
