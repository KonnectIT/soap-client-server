<?php

namespace RRSVP\Stuf;

class UnitDefinitionType extends DefinitionType
{

    /**
     * @var StringOrRefType $quantityType
     */
    protected $quantityType = null;

    /**
     * @var CodeType $catalogSymbol
     */
    protected $catalogSymbol = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param StringOrRefType $quantityType
     * @param CodeType $catalogSymbol
     */
    public function __construct($metaDataProperty, $description, $name, $id, $quantityType, $catalogSymbol)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->quantityType = $quantityType;
      $this->catalogSymbol = $catalogSymbol;
    }

    /**
     * @return StringOrRefType
     */
    public function getQuantityType()
    {
      return $this->quantityType;
    }

    /**
     * @param StringOrRefType $quantityType
     * @return \RRSVP\Stuf\UnitDefinitionType
     */
    public function setQuantityType($quantityType)
    {
      $this->quantityType = $quantityType;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getCatalogSymbol()
    {
      return $this->catalogSymbol;
    }

    /**
     * @param CodeType $catalogSymbol
     * @return \RRSVP\Stuf\UnitDefinitionType
     */
    public function setCatalogSymbol($catalogSymbol)
    {
      $this->catalogSymbol = $catalogSymbol;
      return $this;
    }

}
