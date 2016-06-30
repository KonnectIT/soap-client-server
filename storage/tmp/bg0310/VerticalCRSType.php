<?php

class VerticalCRSType extends AbstractReferenceSystemType
{

    /**
     * @var VerticalCSRefType $usesVerticalCS
     */
    protected $usesVerticalCS = null;

    /**
     * @var VerticalDatumRefType $usesVerticalDatum
     */
    protected $usesVerticalDatum = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $srsName
     * @param ID $id
     * @param IdentifierType $srsID
     * @param StringOrRefType $remarks
     * @param ExtentType $validArea
     * @param string $scope
     * @param VerticalCSRefType $usesVerticalCS
     * @param VerticalDatumRefType $usesVerticalDatum
     */
    public function __construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope, $usesVerticalCS, $usesVerticalDatum)
    {
      parent::__construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope);
      $this->usesVerticalCS = $usesVerticalCS;
      $this->usesVerticalDatum = $usesVerticalDatum;
    }

    /**
     * @return VerticalCSRefType
     */
    public function getUsesVerticalCS()
    {
      return $this->usesVerticalCS;
    }

    /**
     * @param VerticalCSRefType $usesVerticalCS
     * @return VerticalCRSType
     */
    public function setUsesVerticalCS($usesVerticalCS)
    {
      $this->usesVerticalCS = $usesVerticalCS;
      return $this;
    }

    /**
     * @return VerticalDatumRefType
     */
    public function getUsesVerticalDatum()
    {
      return $this->usesVerticalDatum;
    }

    /**
     * @param VerticalDatumRefType $usesVerticalDatum
     * @return VerticalCRSType
     */
    public function setUsesVerticalDatum($usesVerticalDatum)
    {
      $this->usesVerticalDatum = $usesVerticalDatum;
      return $this;
    }

}
