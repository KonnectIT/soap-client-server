<?php

namespace RRSVP\Stuf;

class CurveType extends AbstractCurveType
{

    /**
     * @var CurveSegmentArrayPropertyType $segments
     */
    protected $segments = null;

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
     * @param CurveSegmentArrayPropertyType $segments
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $segments)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->segments = $segments;
    }

    /**
     * @return CurveSegmentArrayPropertyType
     */
    public function getSegments()
    {
      return $this->segments;
    }

    /**
     * @param CurveSegmentArrayPropertyType $segments
     * @return \RRSVP\Stuf\CurveType
     */
    public function setSegments($segments)
    {
      $this->segments = $segments;
      return $this;
    }

}
