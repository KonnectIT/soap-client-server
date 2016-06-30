<?php

class SecondDefiningParameterType
{

    /**
     * @var MeasureType $inverseFlattening
     */
    protected $inverseFlattening = null;

    /**
     * @var MeasureType $semiMinorAxis
     */
    protected $semiMinorAxis = null;

    /**
     * @var isSphere $isSphere
     */
    protected $isSphere = null;

    /**
     * @param MeasureType $inverseFlattening
     * @param MeasureType $semiMinorAxis
     * @param isSphere $isSphere
     */
    public function __construct($inverseFlattening, $semiMinorAxis, $isSphere)
    {
      $this->inverseFlattening = $inverseFlattening;
      $this->semiMinorAxis = $semiMinorAxis;
      $this->isSphere = $isSphere;
    }

    /**
     * @return MeasureType
     */
    public function getInverseFlattening()
    {
      return $this->inverseFlattening;
    }

    /**
     * @param MeasureType $inverseFlattening
     * @return SecondDefiningParameterType
     */
    public function setInverseFlattening($inverseFlattening)
    {
      $this->inverseFlattening = $inverseFlattening;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getSemiMinorAxis()
    {
      return $this->semiMinorAxis;
    }

    /**
     * @param MeasureType $semiMinorAxis
     * @return SecondDefiningParameterType
     */
    public function setSemiMinorAxis($semiMinorAxis)
    {
      $this->semiMinorAxis = $semiMinorAxis;
      return $this;
    }

    /**
     * @return isSphere
     */
    public function getIsSphere()
    {
      return $this->isSphere;
    }

    /**
     * @param isSphere $isSphere
     * @return SecondDefiningParameterType
     */
    public function setIsSphere($isSphere)
    {
      $this->isSphere = $isSphere;
      return $this;
    }

}
