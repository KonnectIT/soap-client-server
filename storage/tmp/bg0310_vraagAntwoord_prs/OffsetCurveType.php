<?php

namespace RRSVP\Stuf;

class OffsetCurveType extends AbstractCurveSegmentType
{

    /**
     * @var CurvePropertyType $offsetBase
     */
    protected $offsetBase = null;

    /**
     * @var LengthType $distance
     */
    protected $distance = null;

    /**
     * @var VectorType $refDirection
     */
    protected $refDirection = null;

    /**
     * @param int $numDerivativesAtStart
     * @param int $numDerivativesAtEnd
     * @param int $numDerivativeInterior
     * @param CurvePropertyType $offsetBase
     * @param LengthType $distance
     */
    public function __construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior, $offsetBase, $distance)
    {
      parent::__construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior);
      $this->offsetBase = $offsetBase;
      $this->distance = $distance;
    }

    /**
     * @return CurvePropertyType
     */
    public function getOffsetBase()
    {
      return $this->offsetBase;
    }

    /**
     * @param CurvePropertyType $offsetBase
     * @return \RRSVP\Stuf\OffsetCurveType
     */
    public function setOffsetBase($offsetBase)
    {
      $this->offsetBase = $offsetBase;
      return $this;
    }

    /**
     * @return LengthType
     */
    public function getDistance()
    {
      return $this->distance;
    }

    /**
     * @param LengthType $distance
     * @return \RRSVP\Stuf\OffsetCurveType
     */
    public function setDistance($distance)
    {
      $this->distance = $distance;
      return $this;
    }

    /**
     * @return VectorType
     */
    public function getRefDirection()
    {
      return $this->refDirection;
    }

    /**
     * @param VectorType $refDirection
     * @return \RRSVP\Stuf\OffsetCurveType
     */
    public function setRefDirection($refDirection)
    {
      $this->refDirection = $refDirection;
      return $this;
    }

}
