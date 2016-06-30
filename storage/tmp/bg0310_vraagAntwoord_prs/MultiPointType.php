<?php

namespace RRSVP\Stuf;

class MultiPointType extends AbstractGeometricAggregateType
{

    /**
     * @var PointPropertyType $pointMember
     */
    protected $pointMember = null;

    /**
     * @var PointArrayPropertyType $pointMembers
     */
    protected $pointMembers = null;

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
     * @param PointPropertyType $pointMember
     * @param PointArrayPropertyType $pointMembers
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $pointMember, $pointMembers)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->pointMember = $pointMember;
      $this->pointMembers = $pointMembers;
    }

    /**
     * @return PointPropertyType
     */
    public function getPointMember()
    {
      return $this->pointMember;
    }

    /**
     * @param PointPropertyType $pointMember
     * @return \RRSVP\Stuf\MultiPointType
     */
    public function setPointMember($pointMember)
    {
      $this->pointMember = $pointMember;
      return $this;
    }

    /**
     * @return PointArrayPropertyType
     */
    public function getPointMembers()
    {
      return $this->pointMembers;
    }

    /**
     * @param PointArrayPropertyType $pointMembers
     * @return \RRSVP\Stuf\MultiPointType
     */
    public function setPointMembers($pointMembers)
    {
      $this->pointMembers = $pointMembers;
      return $this;
    }

}
