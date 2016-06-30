<?php

class MultiCurveType extends AbstractGeometricAggregateType
{

    /**
     * @var CurvePropertyType $curveMember
     */
    protected $curveMember = null;

    /**
     * @var CurveArrayPropertyType $curveMembers
     */
    protected $curveMembers = null;

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
     * @param CurveArrayPropertyType $curveMembers
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $curveMember, $curveMembers)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->curveMember = $curveMember;
      $this->curveMembers = $curveMembers;
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
     * @return MultiCurveType
     */
    public function setCurveMember($curveMember)
    {
      $this->curveMember = $curveMember;
      return $this;
    }

    /**
     * @return CurveArrayPropertyType
     */
    public function getCurveMembers()
    {
      return $this->curveMembers;
    }

    /**
     * @param CurveArrayPropertyType $curveMembers
     * @return MultiCurveType
     */
    public function setCurveMembers($curveMembers)
    {
      $this->curveMembers = $curveMembers;
      return $this;
    }

}
