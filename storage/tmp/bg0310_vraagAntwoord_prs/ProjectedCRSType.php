<?php

namespace RRSVP\Stuf;

class ProjectedCRSType extends AbstractGeneralDerivedCRSType
{

    /**
     * @var CartesianCSRefType $usesCartesianCS
     */
    protected $usesCartesianCS = null;

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
     * @param CartesianCSRefType $usesCartesianCS
     */
    public function __construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope, $baseCRS, $definedByConversion, $usesCartesianCS)
    {
      parent::__construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope, $baseCRS, $definedByConversion);
      $this->usesCartesianCS = $usesCartesianCS;
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
     * @return \RRSVP\Stuf\ProjectedCRSType
     */
    public function setUsesCartesianCS($usesCartesianCS)
    {
      $this->usesCartesianCS = $usesCartesianCS;
      return $this;
    }

}
