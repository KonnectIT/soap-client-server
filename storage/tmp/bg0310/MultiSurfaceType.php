<?php

class MultiSurfaceType extends AbstractGeometricAggregateType
{

    /**
     * @var SurfacePropertyType $surfaceMember
     */
    protected $surfaceMember = null;

    /**
     * @var SurfaceArrayPropertyType $surfaceMembers
     */
    protected $surfaceMembers = null;

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
     * @param SurfaceArrayPropertyType $surfaceMembers
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $surfaceMember, $surfaceMembers)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->surfaceMember = $surfaceMember;
      $this->surfaceMembers = $surfaceMembers;
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
     * @return MultiSurfaceType
     */
    public function setSurfaceMember($surfaceMember)
    {
      $this->surfaceMember = $surfaceMember;
      return $this;
    }

    /**
     * @return SurfaceArrayPropertyType
     */
    public function getSurfaceMembers()
    {
      return $this->surfaceMembers;
    }

    /**
     * @param SurfaceArrayPropertyType $surfaceMembers
     * @return MultiSurfaceType
     */
    public function setSurfaceMembers($surfaceMembers)
    {
      $this->surfaceMembers = $surfaceMembers;
      return $this;
    }

}
