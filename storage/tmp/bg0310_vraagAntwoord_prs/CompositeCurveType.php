<?php

namespace RRSVP\Stuf;

class CompositeCurveType extends AbstractCurveType
{

    /**
     * @var CurvePropertyType $curveMember
     */
    protected $curveMember = null;

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
     * @param CurvePropertyType $curveMember
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $curveMember)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->curveMember = $curveMember;
    }

    /**
     * @return CurvePropertyType
     */
    public function getCurveMember()
    {
      return $this->curveMember;
    }

    /**
     * @param CurvePropertyType $curveMember
     * @return \RRSVP\Stuf\CompositeCurveType
     */
    public function setCurveMember($curveMember)
    {
      $this->curveMember = $curveMember;
      return $this;
    }

}
