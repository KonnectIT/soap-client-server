<?php

class DerivedUnitType extends UnitDefinitionType
{

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
     * @param DerivationUnitTermType $derivationUnitTerm
     */
    public function __construct($metaDataProperty, $description, $name, $id, $quantityType, $catalogSymbol, $derivationUnitTerm)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $quantityType, $catalogSymbol);
      $this->derivationUnitTerm = $derivationUnitTerm;
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
     * @return DerivedUnitType
     */
    public function setDerivationUnitTerm($derivationUnitTerm)
    {
      $this->derivationUnitTerm = $derivationUnitTerm;
      return $this;
    }

}
