<?php

class TopoCurveType extends AbstractTopologyType
{

    /**
     * @var DirectedEdgePropertyType $directedEdge
     */
    protected $directedEdge = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param DirectedEdgePropertyType $directedEdge
     */
    public function __construct($metaDataProperty, $description, $name, $id, $directedEdge)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->directedEdge = $directedEdge;
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
     * @return TopoCurveType
     */
    public function setDirectedEdge($directedEdge)
    {
      $this->directedEdge = $directedEdge;
      return $this;
    }

}
