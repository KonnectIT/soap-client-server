<?php

class ConventionalUnitType extends UnitDefinitionType
{

    /**
     * @var ConversionToPreferredUnitType $conversionToPreferredUnit
     */
    protected $conversionToPreferredUnit = null;

    /**
     * @var ConversionToPreferredUnitType $roughConversionToPreferredUnit
     */
    protected $roughConversionToPreferredUnit = null;

    /**
     * @var DerivationUnitTermType $derivationUnitTerm
     */
    protected $derivationUnitTerm = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param StringOrRefType $quantityType
     * @param CodeType $catalogSymbol
     * @param ConversionToPreferredUnitType $conversionToPreferredUnit
     * @param ConversionToPreferredUnitType $roughConversionToPreferredUnit
     * @param DerivationUnitTermType $derivationUnitTerm
     */
    public function __construct($metaDataProperty, $description, $name, $id, $quantityType, $catalogSymbol, $conversionToPreferredUnit, $roughConversionToPreferredUnit, $derivationUnitTerm)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $quantityType, $catalogSymbol);
      $this->conversionToPreferredUnit = $conversionToPreferredUnit;
      $this->roughConversionToPreferredUnit = $roughConversionToPreferredUnit;
      $this->derivationUnitTerm = $derivationUnitTerm;
    }

    /**
     * @return ConversionToPreferredUnitType
     */
    public function getConversionToPreferredUnit()
    {
      return $this->conversionToPreferredUnit;
    }

    /**
     * @param ConversionToPreferredUnitType $conversionToPreferredUnit
     * @return ConventionalUnitType
     */
    public function setConversionToPreferredUnit($conversionToPreferredUnit)
    {
      $this->conversionToPreferredUnit = $conversionToPreferredUnit;
      return $this;
    }

    /**
     * @return ConversionToPreferredUnitType
     */
    public function getRoughConversionToPreferredUnit()
    {
      return $this->roughConversionToPreferredUnit;
    }

    /**
     * @param ConversionToPreferredUnitType $roughConversionToPreferredUnit
     * @return ConventionalUnitType
     */
    public function setRoughConversionToPreferredUnit($roughConversionToPreferredUnit)
    {
      $this->roughConversionToPreferredUnit = $roughConversionToPreferredUnit;
      return $this;
    }

    /**
     * @return DerivationUnitTermType
     */
    public function getDerivationUnitTerm()
    {
      return $this->derivationUnitTerm;
    }

    /**
     * @param DerivationUnitTermType $derivationUnitTerm
     * @return ConventionalUnitType
     */
    public function setDerivationUnitTerm($derivationUnitTerm)
    {
      $this->derivationUnitTerm = $derivationUnitTerm;
      return $this;
    }

}
