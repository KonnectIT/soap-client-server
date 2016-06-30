<?php

class FaceType extends AbstractTopoPrimitiveType
{

    /**
     * @var DirectedEdgePropertyType $directedEdge
     */
    protected $directedEdge = null;

    /**
     * @var DirectedTopoSolidPropertyType $directedTopoSolid
     */
    protected $directedTopoSolid = null;

    /**
     * @var SurfacePropertyType $surfaceProperty
     */
    protected $surfaceProperty = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param IsolatedPropertyType $isolated
     * @param ContainerPropertyType $container
     * @param DirectedEdgePropertyType $directedEdge
     * @param DirectedTopoSolidPropertyType $directedTopoSolid
     * @param SurfacePropertyType $surfaceProperty
     */
    public function __construct($metaDataProperty, $description, $name, $id, $isolated, $container, $directedEdge, $directedTopoSolid, $surfaceProperty)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $isolated, $container);
      $this->directedEdge = $directedEdge;
      $this->directedTopoSolid = $directedTopoSolid;
      $this->surfaceProperty = $surfaceProperty;
    }

    /**
     * @return DirectedEdgePropertyType
     */
    public function getDirectedEdge()
    {
      return $this->directedEdge;
    }

    /**
     * @param DirectedEdgePropertyType $directedEdge
     * @return FaceType
     */
    public function setDirectedEdge($directedEdge)
    {
      $this->directedEdge = $directedEdge;
      return $this;
    }

    /**
     * @return DirectedTopoSolidPropertyType
     */
    public function getDirectedTopoSolid()
    {
      return $this->directedTopoSolid;
    }

    /**
     * @param DirectedTopoSolidPropertyType $directedTopoSolid
     * @return FaceType
     */
    public function setDirectedTopoSolid($directedTopoSolid)
    {
      $this->directedTopoSolid = $directedTopoSolid;
      return $this;
    }

    /**
     * @return SurfacePropertyType
     */
    public function getSurfaceProperty()
    {
      return $this->surfaceProperty;
    }

    /**
     * @param SurfacePropertyType $surfaceProperty
     * @return FaceType
     */
    public function setSurfaceProperty($surfaceProperty)
    {
      $this->surfaceProperty = $surfaceProperty;
      return $this;
    }

}
