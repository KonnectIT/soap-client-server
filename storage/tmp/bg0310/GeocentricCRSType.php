<?php

class GeocentricCRSType extends AbstractReferenceSystemType
{

    /**
     * @var CartesianCSRefType $usesCartesianCS
     */
    protected $usesCartesianCS = null;

    /**
     * @var SphericalCSRefType $usesSphericalCS
     */
    protected $usesSphericalCS = null;

    /**
     * @var GeodeticDatumRefType $usesGeodeticDatum
     */
    protected $usesGeodeticDatum = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $srsName
     * @param ID $id
     * @param IdentifierType $srsID
     * @param StringOrRefType $remarks
     * @param ExtentType $validArea
     * @param string $scope
     * @param CartesianCSRefType $usesCartesianCS
     * @param SphericalCSRefType $usesSphericalCS
     * @param GeodeticDatumRefType $usesGeodeticDatum
     */
    public function __construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope, $usesCartesianCS, $usesSphericalCS, $usesGeodeticDatum)
    {
      parent::__construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope);
      $this->usesCartesianCS = $usesCartesianCS;
      $this->usesSphericalCS = $usesSphericalCS;
      $this->usesGeodeticDatum = $usesGeodeticDatum;
    }

    /**
     * @return CartesianCSRefType
     */
    public function getUsesCartesianCS()
    {
      return $this->usesCartesianCS;
    }

    /**
     * @param CartesianCSRefType $usesCartesianCS
     * @return GeocentricCRSType
     */
    public function setUsesCartesianCS($usesCartesianCS)
    {
      $this->usesCartesianCS = $usesCartesianCS;
      return $this;
    }

    /**
     * @return SphericalCSRefType
     */
    public function getUsesSphericalCS()
    {
      return $this->usesSphericalCS;
    }

    /**
     * @param SphericalCSRefType $usesSphericalCS
     * @return GeocentricCRSType
     */
    public function setUsesSphericalCS($usesSphericalCS)
    {
      $this->usesSphericalCS = $usesSphericalCS;
      return $this;
    }

    /**
     * @return GeodeticDatumRefType
     */
    public function getUsesGeodeticDatum()
    {
      return $this->usesGeodeticDatum;
    }

    /**
     * @param GeodeticDatumRefType $usesGeodeticDatum
     * @return GeocentricCRSType
     */
    public function setUsesGeodeticDatum($usesGeodeticDatum)
    {
      $this->usesGeodeticDatum = $usesGeodeticDatum;
      return $this;
    }

}
