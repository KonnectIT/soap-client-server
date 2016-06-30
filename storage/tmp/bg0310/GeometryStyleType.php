<?php

class GeometryStyleType extends BaseStyleDescriptorType
{

    /**
     * @var SymbolType $symbol
     */
    protected $symbol = null;

    /**
     * @var string $style
     */
    protected $style = null;

    /**
     * @var LabelStylePropertyType $labelStyle
     */
    protected $labelStyle = null;

    /**
     * @var string $geometryProperty
     */
    protected $geometryProperty = null;

    /**
     * @var string $geometryType
     */
    protected $geometryType = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param animateType $animate
     * @param animateMotionType $animateMotion
     * @param animateColorType $animateColor
     * @param setType $set
     * @param SymbolType $symbol
     * @param string $style
     * @param LabelStylePropertyType $labelStyle
     * @param string $geometryProperty
     * @param string $geometryType
     */
    public function __construct($metaDataProperty, $description, $name, $id, $animate, $animateMotion, $animateColor, $set, $symbol, $style, $labelStyle, $geometryProperty, $geometryType)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $animate, $animateMotion, $animateColor, $set);
      $this->symbol = $symbol;
      $this->style = $style;
      $this->labelStyle = $labelStyle;
      $this->geometryProperty = $geometryProperty;
      $this->geometryType = $geometryType;
    }

    /**
     * @return SymbolType
     */
    public function getSymbol()
    {
      return $this->symbol;
    }

    /**
     * @param SymbolType $symbol
     * @return GeometryStyleType
     */
    public function setSymbol($symbol)
    {
      $this->symbol = $symbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getStyle()
    {
      return $this->style;
    }

    /**
     * @param string $style
     * @return GeometryStyleType
     */
    public function setStyle($style)
    {
      $this->style = $style;
      return $this;
    }

    /**
     * @return LabelStylePropertyType
     */
    public function getLabelStyle()
    {
      return $this->labelStyle;
    }

    /**
     * @param LabelStylePropertyType $labelStyle
     * @return GeometryStyleType
     */
    public function setLabelStyle($labelStyle)
    {
      $this->labelStyle = $labelStyle;
      return $this;
    }

    /**
     * @return string
     */
    public function getGeometryProperty()
    {
      return $this->geometryProperty;
    }

    /**
     * @param string $geometryProperty
     * @return GeometryStyleType
     */
    public function setGeometryProperty($geometryProperty)
    {
      $this->geometryProperty = $geometryProperty;
      return $this;
    }

    /**
     * @return string
     */
    public function getGeometryType()
    {
      return $this->geometryType;
    }

    /**
     * @param string $geometryType
     * @return GeometryStyleType
     */
    public function setGeometryType($geometryType)
    {
      $this->geometryType = $geometryType;
      return $this;
    }

}
