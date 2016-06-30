<?php

namespace RRSVP\Stuf;

class TopoCurvePropertyType
{

    /**
     * @var TopoCurveType $TopoCurve
     */
    protected $TopoCurve = null;

    /**
     * @param TopoCurveType $TopoCurve
     */
    public function __construct($TopoCurve)
    {
      $this->TopoCurve = $TopoCurve;
    }

    /**
     * @return TopoCurveType
     */
    public function getTopoCurve()
    {
      return $this->TopoCurve;
    }

    /**
     * @param TopoCurveType $TopoCurve
     * @return \RRSVP\Stuf\TopoCurvePropertyType
     */
    public function setTopoCurve($TopoCurve)
    {
      $this->TopoCurve = $TopoCurve;
      return $this;
    }

}
