<?php

class TriangleType extends AbstractSurfacePatchType
{

    /**
     * @var AbstractRingPropertyType $exterior
     */
    protected $exterior = null;

    /**
     * @var SurfaceInterpolationType $interpolation
     */
    protected $interpolation = null;

    /**
     * @param AbstractRingPropertyType $exterior
     * @param SurfaceInterpolationType $interpolation
     */
    public function __construct($exterior, $interpolation)
    {
      $this->exterior = $exterior;
      $this->interpolation = $interpolation;
    }

    /**
     * @return AbstractRingPropertyType
     */
    public function getExterior()
    {
      return $this->exterior;
    }

    /**
     * @param AbstractRingPropertyType $exterior
     * @return TriangleType
     */
    public function setExterior($exterior)
    {
      $this->exterior = $exterior;
      return $this;
    }

    /**
     * @return SurfaceInterpolationType
     */
    public function getInterpolation()
    {
      return $this->interpolation;
    }

    /**
     * @param SurfaceInterpolationType $interpolation
     * @return TriangleType
     */
    public function setInterpolation($interpolation)
    {
      $this->interpolation = $interpolation;
      return $this;
    }

}
