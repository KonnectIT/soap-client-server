<?php

abstract class AbstractGeneralDerivedCRSType extends AbstractReferenceSystemType
{

    /**
     * @var CoordinateReferenceSystemRefType $baseCRS
     */
    protected $baseCRS = null;

    /**
     * @var GeneralConversionRefType $definedByConversion
     */
    protected $definedByConversion = null;

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
     */
    public function __construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope, $baseCRS, $definedByConversion)
    {
      parent::__construct($metaDataProperty, $srsName, $id, $srsID, $remarks, $validArea, $scope);
      $this->baseCRS = $baseCRS;
      $this->definedByConversion = $definedByConversion;
    }

    /**
     * @return CoordinateReferenceSystemRefType
     */
    public function getBaseCRS()
    {
      return $this->baseCRS;
    }

    /**
     * @param CoordinateReferenceSystemRefType $baseCRS
     * @return AbstractGeneralDerivedCRSType
     */
    public function setBaseCRS($baseCRS)
    {
      $this->baseCRS = $baseCRS;
      return $this;
    }

    /**
     * @return GeneralConversionRefType
     */
    public function getDefinedByConversion()
    {
      return $this->definedByConversion;
    }

    /**
     * @param GeneralConversionRefType $definedByConversion
     * @return AbstractGeneralDerivedCRSType
     */
    public function setDefinedByConversion($definedByConversion)
    {
      $this->definedByConversion = $definedByConversion;
      return $this;
    }

}
