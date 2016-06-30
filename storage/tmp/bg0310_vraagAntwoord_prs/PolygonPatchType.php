<?php

namespace RRSVP\Stuf;

class PolygonPatchType extends AbstractSurfacePatchType
{

    /**
     * @var AbstractRingPropertyType $exterior
     */
    protected $exterior = null;

    /**
     * @var AbstractRingPropertyType $interior
     */
    protected $interior = null;

    /**
     * @var SurfaceInterpolationType $interpolation
     */
    protected $interpolation = null;

    /**
     * @param AbstractRingPropertyType $exterior
     * @param AbstractRingPropertyType $interior
     * @param SurfaceInterpolationType $interpolation
     */
    public function __construct($exterior, $interior, $interpolation)
    {
      $this->exterior = $exterior;
      $this->interior = $interior;
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
     * @return \RRSVP\Stuf\PolygonPatchType
     */
    public function setExterior($exterior)
    {
      $this->exterior = $exterior;
      return $this;
    }

    /**
     * @return AbstractRingPropertyType
     */
    public function getInterior()
    {
      return $this->interior;
    }

    /**
     * @param AbstractRingPropertyType $interior
     * @return \RRSVP\Stuf\PolygonPatchType
     */
    public function setInterior($interior)
    {
      $this->interior = $interior;
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
     * @return \RRSVP\Stuf\PolygonPatchType
     */
    public function setInterpolation($interpolation)
    {
      $this->interpolation = $interpolation;
      return $this;
    }

}
