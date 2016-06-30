<?php

class ClothoidType extends AbstractCurveSegmentType
{

    /**
     * @var refLocation $refLocation
     */
    protected $refLocation = null;

    /**
     * @var float $scaleFactor
     */
    protected $scaleFactor = null;

    /**
     * @var float $startParameter
     */
    protected $startParameter = null;

    /**
     * @var float $endParameter
     */
    protected $endParameter = null;

    /**
     * @param int $numDerivativesAtStart
     * @param int $numDerivativesAtEnd
     * @param int $numDerivativeInterior
     * @param refLocation $refLocation
     * @param float $scaleFactor
     * @param float $startParameter
     * @param float $endParameter
     */
    public function __construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior, $refLocation, $scaleFactor, $startParameter, $endParameter)
    {
      parent::__construct($numDerivativesAtStart, $numDerivativesAtEnd, $numDerivativeInterior);
      $this->refLocation = $refLocation;
      $this->scaleFactor = $scaleFactor;
      $this->startParameter = $startParameter;
      $this->endParameter = $endParameter;
    }

    /**
     * @return refLocation
     */
    public function getRefLocation()
    {
      return $this->refLocation;
    }

    /**
     * @param refLocation $refLocation
     * @return ClothoidType
     */
    public function setRefLocation($refLocation)
    {
      $this->refLocation = $refLocation;
      return $this;
    }

    /**
     * @return float
     */
    public function getScaleFactor()
    {
      return $this->scaleFactor;
    }

    /**
     * @param float $scaleFactor
     * @return ClothoidType
     */
    public function setScaleFactor($scaleFactor)
    {
      $this->scaleFactor = $scaleFactor;
      return $this;
    }

    /**
     * @return float
     */
    public function getStartParameter()
    {
      return $this->startParameter;
    }

    /**
     * @param float $startParameter
     * @return ClothoidType
     */
    public function setStartParameter($startParameter)
    {
      $this->startParameter = $startParameter;
      return $this;
    }

    /**
     * @return float
     */
    public function getEndParameter()
    {
      return $this->endParameter;
    }

    /**
     * @param float $endParameter
     * @return ClothoidType
     */
    public function setEndParameter($endParameter)
    {
      $this->endParameter = $endParameter;
      return $this;
    }

}
