<?php

namespace RRSVP\Stuf;

class TopologyStyleType extends BaseStyleDescriptorType
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
     * @var string $topologyProperty
     */
    protected $topologyProperty = null;

    /**
     * @var string $topologyType
     */
    protected $topologyType = null;

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
     * @param string $topologyProperty
     * @param string $topologyType
     */
    public function __construct($metaDataProperty, $description, $name, $id, $animate, $animateMotion, $animateColor, $set, $symbol, $style, $labelStyle, $topologyProperty, $topologyType)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $animate, $animateMotion, $animateColor, $set);
      $this->symbol = $symbol;
      $this->style = $style;
      $this->labelStyle = $labelStyle;
      $this->topologyProperty = $topologyProperty;
      $this->topologyType = $topologyType;
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
     * @return \RRSVP\Stuf\TopologyStyleType
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
     * @return \RRSVP\Stuf\TopologyStyleType
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
     * @return \RRSVP\Stuf\TopologyStyleType
     */
    public function setLabelStyle($labelStyle)
    {
      $this->labelStyle = $labelStyle;
      return $this;
    }

    /**
     * @return string
     */
    public function getTopologyProperty()
    {
      return $this->topologyProperty;
    }

    /**
     * @param string $topologyProperty
     * @return \RRSVP\Stuf\TopologyStyleType
     */
    public function setTopologyProperty($topologyProperty)
    {
      $this->topologyProperty = $topologyProperty;
      return $this;
    }

    /**
     * @return string
     */
    public function getTopologyType()
    {
      return $this->topologyType;
    }

    /**
     * @param string $topologyType
     * @return \RRSVP\Stuf\TopologyStyleType
     */
    public function setTopologyType($topologyType)
    {
      $this->topologyType = $topologyType;
      return $this;
    }

}
