<?php

class TemporalCRSType extends AbstractReferenceSystemType
{

    /**
     * @var TemporalCSRefType $usesTemporalCS
     */
    protected $usesTemporalCS = null;

    /**
     * @var TemporalDatumRefType $usesTemporalDatum
     */
    protected $usesTemporalDatum = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $srsName
     * @param ID $id
     * @param IdentifierType $srsID
     * @param StringOrRefType $remarks
     * @param ExtentType $validArea
     * @param string $scope
     * @param TemporalCSRefType $usesTemporalCS
     * @param TemporalDatumRefType $usesTemporalDatum
     */
    public function __construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope, $usesTemporalCS, $usesTemporalDatum)
    {
      parent::__construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope);
      $this->usesTemporalCS = $usesTemporalCS;
      $this->usesTemporalDatum = $usesTemporalDatum;
    }

    /**
     * @return TemporalCSRefType
     */
    public function getUsesTemporalCS()
    {
      return $this->usesTemporalCS;
    }

    /**
     * @param TemporalCSRefType $usesTemporalCS
     * @return TemporalCRSType
     */
    public function setUsesTemporalCS($usesTemporalCS)
    {
      $this->usesTemporalCS = $usesTemporalCS;
      return $this;
    }

    /**
     * @return TemporalDatumRefType
     */
    public function getUsesTemporalDatum()
    {
      return $this->usesTemporalDatum;
    }

    /**
     * @param TemporalDatumRefType $usesTemporalDatum
     * @return TemporalCRSType
     */
    public function setUsesTemporalDatum($usesTemporalDatum)
    {
      $this->usesTemporalDatum = $usesTemporalDatum;
      return $this;
    }

}
