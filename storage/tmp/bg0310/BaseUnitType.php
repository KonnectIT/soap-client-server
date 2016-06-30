<?php

class BaseUnitType extends UnitDefinitionType
{

    /**
     * @var ReferenceType $unitsSystem
     */
    protected $unitsSystem = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param StringOrRefType $quantityType
     * @param CodeType $catalogSymbol
     * @param ReferenceType $unitsSystem
     */
    public function __construct($metaDataProperty, $description, $name, $id, $quantityType, $catalogSymbol, $unitsSystem)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $quantityType, $catalogSymbol);
      $this->unitsSystem = $unitsSystem;
    }

    /**
     * @return ReferenceType
     */
    public function getUnitsSystem()
    {
      return $this->unitsSystem;
    }

    /**
     * @param ReferenceType $unitsSystem
     * @return BaseUnitType
     */
    public function setUnitsSystem($unitsSystem)
    {
      $this->unitsSystem = $unitsSystem;
      return $this;
    }

}
