<?php

namespace RRSVP\Stuf;

class MultiGeometryType extends AbstractGeometricAggregateType
{

    /**
     * @var GeometryPropertyType $geometryMember
     */
    protected $geometryMember = null;

    /**
     * @var GeometryArrayPropertyType $geometryMembers
     */
    protected $geometryMembers = null;

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
     * @param GeometryPropertyType $geometryMember
     * @param GeometryArrayPropertyType $geometryMembers
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $geometryMember, $geometryMembers)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->geometryMember = $geometryMember;
      $this->geometryMembers = $geometryMembers;
    }

    /**
     * @return GeometryPropertyType
     */
    public function getGeometryMember()
    {
      return $this->geometryMember;
    }

    /**
     * @param GeometryPropertyType $geometryMember
     * @return \RRSVP\Stuf\MultiGeometryType
     */
    public function setGeometryMember($geometryMember)
    {
      $this->geometryMember = $geometryMember;
      return $this;
    }

    /**
     * @return GeometryArrayPropertyType
     */
    public function getGeometryMembers()
    {
      return $this->geometryMembers;
    }

    /**
     * @param GeometryArrayPropertyType $geometryMembers
     * @return \RRSVP\Stuf\MultiGeometryType
     */
    public function setGeometryMembers($geometryMembers)
    {
      $this->geometryMembers = $geometryMembers;
      return $this;
    }

}
