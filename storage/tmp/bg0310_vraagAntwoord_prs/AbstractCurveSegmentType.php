<?php

namespace RRSVP\Stuf;

abstract class AbstractCurveSegmentType
{

    /**
     * @var int $numDerivativesAtStart
     */
    protected $numDerivativesAtStart = null;

    /**
     * @var int $numDerivativesAtEnd
     */
    protected $numDerivativesAtEnd = null;

    /**
     * @var int $numDerivativeInterior
     */
    protected $numDerivativeInterior = null;

    /**
     * @param int $numDerivativesAtStart
     * @param int $numDerivativesAtEnd
     * @param int $numDerivativeInterior
     */
    public function __construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior)
    {
      $this->numDerivativesAtStart = $numDerivativesAtStart;
      $this->numDerivativesAtEnd = $numDerivativesAtEnd;
      $this->numDerivativeInterior = $numDerivativeInterior;
    }

    /**
     * @return int
     */
    public function getNumDerivativesAtStart()
    {
      return $this->numDerivativesAtStart;
    }

    /**
     * @param int $numDerivativesAtStart
     * @return \RRSVP\Stuf\AbstractCurveSegmentType
     */
    public function setNumDerivativesAtStart($numDerivativesAtStart)
    {
      $this->numDerivativesAtStart = $numDerivativesAtStart;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumDerivativesAtEnd()
    {
      return $this->numDerivativesAtEnd;
    }

    /**
     * @param int $numDerivativesAtEnd
     * @return \RRSVP\Stuf\AbstractCurveSegmentType
     */
    public function setNumDerivativesAtEnd($numDerivativesAtEnd)
    {
      $this->numDerivativesAtEnd = $numDerivativesAtEnd;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumDerivativeInterior()
    {
      return $this->numDerivativeInterior;
    }

    /**
     * @param int $numDerivativeInterior
     * @return \RRSVP\Stuf\AbstractCurveSegmentType
     */
    public function setNumDerivativeInterior($numDerivativeInterior)
    {
      $this->numDerivativeInterior = $numDerivativeInterior;
      return $this;
    }

}
