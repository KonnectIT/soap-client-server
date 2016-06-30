<?php

namespace RRSVP\Stuf;

class SolidType extends AbstractSolidType
{

    /**
     * @var SurfacePropertyType $exterior
     */
    protected $exterior = null;

    /**
     * @var SurfacePropertyType[] $interior
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
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
    }

    /**
     * @return SurfacePropertyType
     */
    public function getExterior()
    {
      return $this->exterior;
    }

    /**
     * @param SurfacePropertyType $exterior
     * @return \RRSVP\Stuf\SolidType
     */
    public function setExterior($exterior)
    {
      $this->exterior = $exterior;
      return $this;
    }

    /**
     * @return SurfacePropertyType[]
     */
    public function getInterior()
    {
      return $this->interior;
    }

    /**
     * @param SurfacePropertyType[] $interior
     * @return \RRSVP\Stuf\SolidType
     */
    public function setInterior(array $interior = null)
    {
      $this->interior = $interior;
      return $this;
    }

}
