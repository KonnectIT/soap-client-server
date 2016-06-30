<?php

namespace RRSVP\Stuf;

class TopoVolumeType extends AbstractTopologyType
{

    /**
     * @var DirectedTopoSolidPropertyType $directedTopoSolid
     */
    protected $directedTopoSolid = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param DirectedTopoSolidPropertyType $directedTopoSolid
     */
    public function __construct($metaDataProperty, $description, $name, $id, $directedTopoSolid)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->directedTopoSolid = $directedTopoSolid;
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
     * @return \RRSVP\Stuf\TopoVolumeType
     */
    public function setDirectedTopoSolid($directedTopoSolid)
    {
      $this->directedTopoSolid = $directedTopoSolid;
      return $this;
    }

}
