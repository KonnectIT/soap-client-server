<?php

namespace RRSVP\Stuf;

class PolyhedralSurfaceType
{

    /**
     * @var MetaDataPropertyType $metaDataProperty
     */
    protected $metaDataProperty = null;

    /**
     * @var StringOrRefType $description
     */
    protected $description = null;

    /**
     * @var CodeType $name
     */
    protected $name = null;

    /**
     * @var PolygonPatchArrayPropertyType $polygonPatches
     */
    protected $polygonPatches = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param PolygonPatchArrayPropertyType $polygonPatches
     */
    public function __construct($metaDataProperty, $description, $name, $polygonPatches)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->description = $description;
      $this->name = $name;
      $this->polygonPatches = $polygonPatches;
    }

    /**
     * @return MetaDataPropertyType
     */
    public function getMetaDataProperty()
    {
      return $this->metaDataProperty;
    }

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @return \RRSVP\Stuf\PolyhedralSurfaceType
     */
    public function setMetaDataProperty($metaDataProperty)
    {
      $this->metaDataProperty = $metaDataProperty;
      return $this;
    }

    /**
     * @return StringOrRefType
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param StringOrRefType $description
     * @return \RRSVP\Stuf\PolyhedralSurfaceType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param CodeType $name
     * @return \RRSVP\Stuf\PolyhedralSurfaceType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return PolygonPatchArrayPropertyType
     */
    public function getPolygonPatches()
    {
      return $this->polygonPatches;
    }

    /**
     * @param PolygonPatchArrayPropertyType $polygonPatches
     * @return \RRSVP\Stuf\PolyhedralSurfaceType
     */
    public function setPolygonPatches($polygonPatches)
    {
      $this->polygonPatches = $polygonPatches;
      return $this;
    }

}
