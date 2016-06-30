<?php

class NodeType extends AbstractTopoPrimitiveType
{

    /**
     * @var DirectedEdgePropertyType $directedEdge
     */
    protected $directedEdge = null;

    /**
     * @var PointPropertyType $pointProperty
     */
    protected $pointProperty = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param IsolatedPropertyType $isolated
     * @param ContainerPropertyType $container
     * @param DirectedEdgePropertyType $directedEdge
     * @param PointPropertyType $pointProperty
     */
    public function __construct($metaDataProperty, $description, $name, $id, $isolated, $container, $directedEdge, $pointProperty)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $isolated, $container);
      $this->directedEdge = $directedEdge;
      $this->pointProperty = $pointProperty;
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
     * @return NodeType
     */
    public function setDirectedEdge($directedEdge)
    {
      $this->directedEdge = $directedEdge;
      return $this;
    }

    /**
     * @return PointPropertyType
     */
    public function getPointProperty()
    {
      return $this->pointProperty;
    }

    /**
     * @param PointPropertyType $pointProperty
     * @return NodeType
     */
    public function setPointProperty($pointProperty)
    {
      $this->pointProperty = $pointProperty;
      return $this;
    }

}
