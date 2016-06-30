<?php

namespace RRSVP\Stuf;

class TopoPointType extends AbstractTopologyType
{

    /**
     * @var DirectedNodePropertyType $directedNode
     */
    protected $directedNode = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param DirectedNodePropertyType $directedNode
     */
    public function __construct($metaDataProperty, $description, $name, $id, $directedNode)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->directedNode = $directedNode;
    }

    /**
     * @return DirectedNodePropertyType
     */
    public function getDirectedNode()
    {
      return $this->directedNode;
    }

    /**
     * @param DirectedNodePropertyType $directedNode
     * @return \RRSVP\Stuf\TopoPointType
     */
    public function setDirectedNode($directedNode)
    {
      $this->directedNode = $directedNode;
      return $this;
    }

}
