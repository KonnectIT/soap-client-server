<?php

namespace RRSVP\Stuf;

class GeodeticDatumType extends AbstractDatumType
{

    /**
     * @var PrimeMeridianRefType $usesPrimeMeridian
     */
    protected $usesPrimeMeridian = null;

    /**
     * @var EllipsoidRefType $usesEllipsoid
     */
    protected $usesEllipsoid = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $datumName
     * @param ID $id
     * @param IdentifierType $datumID
     * @param StringOrRefType $remarks
     * @param CodeType $anchorPoint
     * @param date $realizationEpoch
     * @param ExtentType $validArea
     * @param string $scope
     * @param PrimeMeridianRefType $usesPrimeMeridian
     * @param EllipsoidRefType $usesEllipsoid
     */
    public function __construct($metaDataProperty, $datumName, $id, $datumID, $remarks, $anchorPoint, $realizationEpoch, $validArea, $scope, $usesPrimeMeridian, $usesEllipsoid)
    {
      parent::__construct($metaDataProperty, $datumName, $id, $datumID, $remarks, $anchorPoint, $realizationEpoch, $validArea, $scope);
      $this->usesPrimeMeridian = $usesPrimeMeridian;
      $this->usesEllipsoid = $usesEllipsoid;
    }

    /**
     * @return PrimeMeridianRefType
     */
    public function getUsesPrimeMeridian()
    {
      return $this->usesPrimeMeridian;
    }

    /**
     * @param PrimeMeridianRefType $usesPrimeMeridian
     * @return \RRSVP\Stuf\GeodeticDatumType
     */
    public function setUsesPrimeMeridian($usesPrimeMeridian)
    {
      $this->usesPrimeMeridian = $usesPrimeMeridian;
      return $this;
    }

    /**
     * @return EllipsoidRefType
     */
    public function getUsesEllipsoid()
    {
      return $this->usesEllipsoid;
    }

    /**
     * @param EllipsoidRefType $usesEllipsoid
     * @return \RRSVP\Stuf\GeodeticDatumType
     */
    public function setUsesEllipsoid($usesEllipsoid)
    {
      $this->usesEllipsoid = $usesEllipsoid;
      return $this;
    }

}
