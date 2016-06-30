<?php

namespace RRSVP\Stuf;

class TopoSolidType extends AbstractTopoPrimitiveType
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
     * @param IsolatedPropertyType $isolated
     * @param ContainerPropertyType $container
     * @param DirectedFacePropertyType $directedFace
     */
    public function __construct($metaDataProperty, $description, $name, $id, $isolated, $container, $directedFace)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $isolated, $container);
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
     * @return \RRSVP\Stuf\TopoSolidType
     */
    public function setDirectedFace($directedFace)
    {
      $this->directedFace = $directedFace;
      return $this;
    }

}
