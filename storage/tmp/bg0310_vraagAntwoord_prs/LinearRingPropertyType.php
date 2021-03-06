<?php

namespace RRSVP\Stuf;

class LinearRingPropertyType
{

    /**
     * @var LinearRingType $LinearRing
     */
    protected $LinearRing = null;

    /**
     * @param LinearRingType $LinearRing
     */
    public function __construct($LinearRing)
    {
      $this->LinearRing = $LinearRing;
    }

    /**
     * @return LinearRingType
     */
    public function getLinearRing()
    {
      return $this->LinearRing;
    }

    /**
     * @param LinearRingType $LinearRing
     * @return \RRSVP\Stuf\LinearRingPropertyType
     */
    public function setLinearRing($LinearRing)
    {
      $this->LinearRing = $LinearRing;
      return $this;
    }

}
