<?php

namespace RRSVP\Stuf;

class OrientableSurfaceType extends AbstractSurfaceType
{

    /**
     * @var SurfacePropertyType $baseSurface
     */
    protected $baseSurface = null;

    /**
     * @var SignType $orientation
     */
    protected $orientation = null;

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
     * @param SurfacePropertyType $baseSurface
     * @param SignType $orientation
     */
    public function __construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels, $baseSurface, $orientation)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $gid, $srsName, $srsDimension, $axisLabels, $uomLabels);
      $this->baseSurface = $baseSurface;
      $this->orientation = $orientation;
    }

    /**
     * @return SurfacePropertyType
     */
    public function getBaseSurface()
    {
      return $this->baseSurface;
    }

    /**
     * @param SurfacePropertyType $baseSurface
     * @return \RRSVP\Stuf\OrientableSurfaceType
     */
    public function setBaseSurface($baseSurface)
    {
      $this->baseSurface = $baseSurface;
      return $this;
    }

    /**
     * @return SignType
     */
    public function getOrientation()
    {
      return $this->orientation;
    }

    /**
     * @param SignType $orientation
     * @return \RRSVP\Stuf\OrientableSurfaceType
     */
    public function setOrientation($orientation)
    {
      $this->orientation = $orientation;
      return $this;
    }

}
