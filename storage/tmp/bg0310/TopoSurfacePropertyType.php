<?php

class TopoSurfacePropertyType
{

    /**
     * @var TopoSurfaceType $TopoSurface
     */
    protected $TopoSurface = null;

    /**
     * @param TopoSurfaceType $TopoSurface
     */
    public function __construct($TopoSurface)
    {
      $this->TopoSurface = $TopoSurface;
    }

    /**
     * @return TopoSurfaceType
     */
    public function getTopoSurface()
    {
      return $this->TopoSurface;
    }

    /**
     * @param TopoSurfaceType $TopoSurface
     * @return TopoSurfacePropertyType
     */
    public function setTopoSurface($TopoSurface)
    {
      $this->TopoSurface = $TopoSurface;
      return $this;
    }

}
