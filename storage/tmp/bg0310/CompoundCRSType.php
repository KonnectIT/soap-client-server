<?php

class CompoundCRSType extends AbstractReferenceSystemType
{

    /**
     * @var CoordinateReferenceSystemRefType $includesCRS
     */
    protected $includesCRS = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param CodeType $srsName
     * @param ID $id
     * @param IdentifierType $srsID
     * @param StringOrRefType $remarks
     * @param ExtentType $validArea
     * @param string $scope
     * @param CoordinateReferenceSystemRefType $includesCRS
     */
    public function __construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope, $includesCRS)
    {
      parent::__construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope);
      $this->includesCRS = $includesCRS;
    }

    /**
     * @return CoordinateReferenceSystemRefType
     */
    public function getIncludesCRS()
    {
      return $this->includesCRS;
    }

    /**
     * @param CoordinateReferenceSystemRefType $includesCRS
     * @return CompoundCRSType
     */
    public function setIncludesCRS($includesCRS)
    {
      $this->includesCRS = $includesCRS;
      return $this;
    }

}
