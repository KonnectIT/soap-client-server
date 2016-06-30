<?php

class ValueArrayType extends CompositeValueType
{

    /**
     * @var anyURI $codeSpace
     */
    protected $codeSpace = null;

    /**
     * @var anyURI $uom
     */
    protected $uom = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param ValuePropertyType $valueComponent
     * @param ValueArrayPropertyType $valueComponents
     * @param anyURI $codeSpace
     * @param anyURI $uom
     */
    public function __construct($metaDataProperty, $description, $name, $id, $valueComponent, $valueComponents, $codeSpace, $uom)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $valueComponent, $valueComponents);
      $this->codeSpace = $codeSpace;
      $this->uom = $uom;
    }

    /**
     * @return anyURI
     */
    public function getCodeSpace()
    {
      return $this->codeSpace;
    }

    /**
     * @param anyURI $codeSpace
     * @return ValueArrayType
     */
    public function setCodeSpace($codeSpace)
    {
      $this->codeSpace = $codeSpace;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getUom()
    {
      return $this->uom;
    }

    /**
     * @param anyURI $uom
     * @return ValueArrayType
     */
    public function setUom($uom)
    {
      $this->uom = $uom;
      return $this;
    }

}
