<?php

class GeographicCRSType extends AbstractReferenceSystemType
{

    /**
     * @var EllipsoidalCSRefType $usesEllipsoidalCS
     */
    protected $usesEllipsoidalCS = null;

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
     * @param EllipsoidalCSRefType $usesEllipsoidalCS
     * @param GeodeticDatumRefType $usesGeodeticDatum
     */
    public function __construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope, $usesEllipsoidalCS, $usesGeodeticDatum)
    {
      parent::__construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope);
      $this->usesEllipsoidalCS = $usesEllipsoidalCS;
      $this->usesGeodeticDatum = $usesGeodeticDatum;
    }

    /**
     * @return EllipsoidalCSRefType
     */
    public function getUsesEllipsoidalCS()
    {
      return $this->usesEllipsoidalCS;
    }

    /**
     * @param EllipsoidalCSRefType $usesEllipsoidalCS
     * @return GeographicCRSType
     */
    public function setUsesEllipsoidalCS($usesEllipsoidalCS)
    {
      $this->usesEllipsoidalCS = $usesEllipsoidalCS;
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
     * @return GeographicCRSType
     */
    public function setUsesGeodeticDatum($usesGeodeticDatum)
    {
      $this->usesGeodeticDatum = $usesGeodeticDatum;
      return $this;
    }

}
