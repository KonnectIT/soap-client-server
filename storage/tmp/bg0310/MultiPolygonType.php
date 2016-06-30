<?php

class MultiPolygonType extends AbstractGeometricAggregateType
{

    /**
     * @var PolygonPropertyType $polygonMember
     */
    protected $polygonMember = null;

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
     * @param PolygonPropertyType $polygonMember
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $polygonMember)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->polygonMember = $polygonMember;
    }

    /**
     * @return PolygonPropertyType
     */
    public function getPolygonMember()
    {
      return $this->polygonMember;
    }

    /**
     * @param PolygonPropertyType $polygonMember
     * @return MultiPolygonType
     */
    public function setPolygonMember($polygonMember)
    {
      $this->polygonMember = $polygonMember;
      return $this;
    }

}
