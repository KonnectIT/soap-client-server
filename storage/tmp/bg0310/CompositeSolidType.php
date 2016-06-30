<?php

class CompositeSolidType extends AbstractSolidType
{

    /**
     * @var SolidPropertyType $solidMember
     */
    protected $solidMember = null;

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
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $solidMember)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->solidMember = $solidMember;
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
     * @return CompositeSolidType
     */
    public function setSolidMember($solidMember)
    {
      $this->solidMember = $solidMember;
      return $this;
    }

}
