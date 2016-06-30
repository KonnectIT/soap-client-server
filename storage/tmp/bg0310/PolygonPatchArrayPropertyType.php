<?php

class PolygonPatchArrayPropertyType
{

    /**
     * @var PolygonPatchType $PolygonPatch
     */
    protected $PolygonPatch = null;

    /**
     * @param PolygonPatchType $PolygonPatch
     */
    public function __construct($PolygonPatch)
    {
      $this->PolygonPatch = $PolygonPatch;
    }

    /**
     * @return PolygonPatchType
     */
    public function getPolygonPatch()
    {
      return $this->PolygonPatch;
    }

    /**
     * @param PolygonPatchType $PolygonPatch
     * @return PolygonPatchArrayPropertyType
     */
    public function setPolygonPatch($PolygonPatch)
    {
      $this->PolygonPatch = $PolygonPatch;
      return $this;
    }

}
