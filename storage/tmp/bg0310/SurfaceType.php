<?php

class SurfaceType extends AbstractSurfaceType
{

    /**
     * @var SurfacePatchArrayPropertyType $patches
     */
    protected $patches = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param string $gid
     * @param anyURI $srsName
     * @param int $srsDimension
     * @param NCNameList $axisLabels
     * @param NCNameList $uomLabels
     * @param SurfacePatchArrayPropertyType $patches
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $patches)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->patches = $patches;
    }

    /**
     * @return SurfacePatchArrayPropertyType
     */
    public function getPatches()
    {
      return $this->patches;
    }

    /**
     * @param SurfacePatchArrayPropertyType $patches
     * @return SurfaceType
     */
    public function setPatches($patches)
    {
      $this->patches = $patches;
      return $this;
    }

}
