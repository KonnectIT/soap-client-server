<?php

namespace RRSVP\Stuf;

class MultiSolidType extends AbstractGeometricAggregateType
{

    /**
     * @var SolidPropertyType $solidMember
     */
    protected $solidMember = null;

    /**
     * @var SolidArrayPropertyType $solidMembers
     */
    protected $solidMembers = null;

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
     * @param SolidPropertyType $solidMember
     * @param SolidArrayPropertyType $solidMembers
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $solidMember, $solidMembers)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->solidMember = $solidMember;
      $this->solidMembers = $solidMembers;
    }

    /**
     * @return SolidPropertyType
     */
    public function getSolidMember()
    {
      return $this->solidMember;
    }

    /**
     * @param SolidPropertyType $solidMember
     * @return \RRSVP\Stuf\MultiSolidType
     */
    public function setSolidMember($solidMember)
    {
      $this->solidMember = $solidMember;
      return $this;
    }

    /**
     * @return SolidArrayPropertyType
     */
    public function getSolidMembers()
    {
      return $this->solidMembers;
    }

    /**
     * @param SolidArrayPropertyType $solidMembers
     * @return \RRSVP\Stuf\MultiSolidType
     */
    public function setSolidMembers($solidMembers)
    {
      $this->solidMembers = $solidMembers;
      return $this;
    }

}
