<?php

class EdgeType extends AbstractTopoPrimitiveType
{

    /**
     * @var DirectedNodePropertyType $directedNode
     */
    protected $directedNode = null;

    /**
     * @var DirectedFacePropertyType $directedFace
     */
    protected $directedFace = null;

    /**
     * @var CurvePropertyType $curveProperty
     */
    protected $curveProperty = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param IsolatedPropertyType $isolated
     * @param ContainerPropertyType $container
     * @param DirectedNodePropertyType $directedNode
     * @param DirectedFacePropertyType $directedFace
     * @param CurvePropertyType $curveProperty
     */
    public function __construct($metaDataProperty, $description, $name, $id, $isolated, $container, $directedNode, $directedFace, $curveProperty)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $isolated, $container);
      $this->directedNode = $directedNode;
      $this->directedFace = $directedFace;
      $this->curveProperty = $curveProperty;
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
     * @return EdgeType
     */
    public function setDirectedNode($directedNode)
    {
      $this->directedNode = $directedNode;
      return $this;
    }

    /**
     * @return DirectedFacePropertyType
     */
    public function getDirectedFace()
    {
      return $this->directedFace;
    }

    /**
     * @param DirectedFacePropertyType $directedFace
     * @return EdgeType
     */
    public function setDirectedFace($directedFace)
    {
      $this->directedFace = $directedFace;
      return $this;
    }

    /**
     * @return CurvePropertyType
     */
    public function getCurveProperty()
    {
      return $this->curveProperty;
    }

    /**
     * @param CurvePropertyType $curveProperty
     * @return EdgeType
     */
    public function setCurveProperty($curveProperty)
    {
      $this->curveProperty = $curveProperty;
      return $this;
    }

}
