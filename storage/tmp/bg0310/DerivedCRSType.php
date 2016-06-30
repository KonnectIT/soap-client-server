<?php

class DerivedCRSType extends AbstractGeneralDerivedCRSType
{

    /**
     * @var DerivedCRSTypeType $derivedCRSType
     */
    protected $derivedCRSType = null;

    /**
     * @var CoordinateSystemRefType $usesCS
     */
    protected $usesCS = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $srsName
     * @param ID $id
     * @param IdentifierType $srsID
     * @param StringOrRefType $remarks
     * @param ExtentType $validArea
     * @param string $scope
     * @param CoordinateReferenceSystemRefType $baseCRS
     * @param GeneralConversionRefType $definedByConversion
     * @param DerivedCRSTypeType $derivedCRSType
     * @param CoordinateSystemRefType $usesCS
     */
    public function __construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope, $baseCRS, $definedByConversion, $derivedCRSType, $usesCS)
    {
      parent::__construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope, $baseCRS, $definedByConversion);
      $this->derivedCRSType = $derivedCRSType;
      $this->usesCS = $usesCS;
    }

    /**
     * @return DerivedCRSTypeType
     */
    public function getDerivedCRSType()
    {
      return $this->derivedCRSType;
    }

    /**
     * @param DerivedCRSTypeType $derivedCRSType
     * @return DerivedCRSType
     */
    public function setDerivedCRSType($derivedCRSType)
    {
      $this->derivedCRSType = $derivedCRSType;
      return $this;
    }

    /**
     * @return CoordinateSystemRefType
     */
    public function getUsesCS()
    {
      return $this->usesCS;
    }

    /**
     * @param CoordinateSystemRefType $usesCS
     * @return DerivedCRSType
     */
    public function setUsesCS($usesCS)
    {
      $this->usesCS = $usesCS;
      return $this;
    }

}
