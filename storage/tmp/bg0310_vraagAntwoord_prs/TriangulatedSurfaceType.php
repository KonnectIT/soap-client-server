<?php

namespace RRSVP\Stuf;

class TriangulatedSurfaceType
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
     * @var TrianglePatchArrayPropertyType $trianglePatches
     */
    protected $trianglePatches = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param TrianglePatchArrayPropertyType $trianglePatches
     */
    public function __construct($metaDataProperty, $description, $name, $trianglePatches)
    {
      $this->metaDataProperty = $metaDataProperty;
      $this->description = $description;
      $this->name = $name;
      $this->trianglePatches = $trianglePatches;
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
     * @return \RRSVP\Stuf\TriangulatedSurfaceType
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
     * @return \RRSVP\Stuf\TriangulatedSurfaceType
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
     * @return \RRSVP\Stuf\TriangulatedSurfaceType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return TrianglePatchArrayPropertyType
     */
    public function getTrianglePatches()
    {
      return $this->trianglePatches;
    }

    /**
     * @param TrianglePatchArrayPropertyType $trianglePatches
     * @return \RRSVP\Stuf\TriangulatedSurfaceType
     */
    public function setTrianglePatches($trianglePatches)
    {
      $this->trianglePatches = $trianglePatches;
      return $this;
    }

}
