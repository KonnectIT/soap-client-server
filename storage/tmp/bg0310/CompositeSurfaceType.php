<?php

class CompositeSurfaceType extends AbstractSurfaceType
{

    /**
     * @var SurfacePropertyType $surfaceMember
     */
    protected $surfaceMember = null;

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
     * @param SurfacePropertyType $surfaceMember
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $surfaceMember)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->surfaceMember = $surfaceMember;
    }

    /**
     * @return SurfacePropertyType
     */
    public function getSurfaceMember()
    {
      return $this->surfaceMember;
    }

    /**
     * @param SurfacePropertyType $surfaceMember
     * @return CompositeSurfaceType
     */
    public function setSurfaceMember($surfaceMember)
    {
      $this->surfaceMember = $surfaceMember;
      return $this;
    }

}
