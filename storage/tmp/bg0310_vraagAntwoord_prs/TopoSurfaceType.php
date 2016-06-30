<?php

namespace RRSVP\Stuf;

class TopoSurfaceType extends AbstractTopologyType
{

    /**
     * @var DirectedFacePropertyType $directedFace
     */
    protected $directedFace = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param DirectedFacePropertyType $directedFace
     */
    public function __construct($metaDataProperty, $description, $name, $id, $directedFace)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->directedFace = $directedFace;
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
     * @return \RRSVP\Stuf\TopoSurfaceType
     */
    public function setDirectedFace($directedFace)
    {
      $this->directedFace = $directedFace;
      return $this;
    }

}
