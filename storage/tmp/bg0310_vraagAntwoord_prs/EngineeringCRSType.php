<?php

namespace RRSVP\Stuf;

class EngineeringCRSType extends AbstractReferenceSystemType
{

    /**
     * @var CoordinateSystemRefType $usesCS
     */
    protected $usesCS = null;

    /**
     * @var EngineeringDatumRefType $usesEngineeringDatum
     */
    protected $usesEngineeringDatum = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $srsName
     * @param ID $id
     * @param IdentifierType $srsID
     * @param StringOrRefType $remarks
     * @param ExtentType $validArea
     * @param string $scope
     * @param CoordinateSystemRefType $usesCS
     * @param EngineeringDatumRefType $usesEngineeringDatum
     */
    public function __construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope, $usesCS, $usesEngineeringDatum)
    {
      parent::__construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope);
      $this->usesCS = $usesCS;
      $this->usesEngineeringDatum = $usesEngineeringDatum;
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
     * @return \RRSVP\Stuf\EngineeringCRSType
     */
    public function setUsesCS($usesCS)
    {
      $this->usesCS = $usesCS;
      return $this;
    }

    /**
     * @return EngineeringDatumRefType
     */
    public function getUsesEngineeringDatum()
    {
      return $this->usesEngineeringDatum;
    }

    /**
     * @param EngineeringDatumRefType $usesEngineeringDatum
     * @return \RRSVP\Stuf\EngineeringCRSType
     */
    public function setUsesEngineeringDatum($usesEngineeringDatum)
    {
      $this->usesEngineeringDatum = $usesEngineeringDatum;
      return $this;
    }

}
