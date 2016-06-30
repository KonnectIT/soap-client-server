<?php

namespace RRSVP\Stuf;

class PolygonType extends AbstractSurfaceType
{

    /**
     * @var AbstractRingPropertyType $exterior
     */
    protected $exterior = null;

    /**
     * @var AbstractRingPropertyType $interior
     */
    protected $interior = null;

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
     * @param AbstractRingPropertyType $exterior
     * @param AbstractRingPropertyType $interior
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $exterior, $interior)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->exterior = $exterior;
      $this->interior = $interior;
    }

    /**
     * @return AbstractRingPropertyType
     */
    public function getExterior()
    {
      return $this->exterior;
    }

    /**
     * @param AbstractRingPropertyType $exterior
     * @return \RRSVP\Stuf\PolygonType
     */
    public function setExterior($exterior)
    {
      $this->exterior = $exterior;
      return $this;
    }

    /**
     * @return AbstractRingPropertyType
     */
    public function getInterior()
    {
      return $this->interior;
    }

    /**
     * @param AbstractRingPropertyType $interior
     * @return \RRSVP\Stuf\PolygonType
     */
    public function setInterior($interior)
    {
      $this->interior = $interior;
      return $this;
    }

}
