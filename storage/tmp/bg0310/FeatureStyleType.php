<?php

class FeatureStyleType extends AbstractGMLType
{

    /**
     * @var string $featureConstraint
     */
    protected $featureConstraint = null;

    /**
     * @var GeometryStylePropertyType $geometryStyle
     */
    protected $geometryStyle = null;

    /**
     * @var TopologyStylePropertyType $topologyStyle
     */
    protected $topologyStyle = null;

    /**
     * @var LabelStylePropertyType $labelStyle
     */
    protected $labelStyle = null;

    /**
     * @var string $featureType
     */
    protected $featureType = null;

    /**
     * @var string $baseType
     */
    protected $baseType = null;

    /**
     * @var QueryGrammarEnumeration $queryGrammar
     */
    protected $queryGrammar = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param GeometryStylePropertyType $geometryStyle
     * @param TopologyStylePropertyType $topologyStyle
     * @param LabelStylePropertyType $labelStyle
     * @param string $featureType
     * @param string $baseType
     * @param QueryGrammarEnumeration $queryGrammar
     */
    public function __construct($metaDataProperty, $description, $name, $id, $geometryStyle, $topologyStyle, $labelStyle, $featureType, $baseType, $queryGrammar)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->geometryStyle = $geometryStyle;
      $this->topologyStyle = $topologyStyle;
      $this->labelStyle = $labelStyle;
      $this->featureType = $featureType;
      $this->baseType = $baseType;
      $this->queryGrammar = $queryGrammar;
    }

    /**
     * @return string
     */
    public function getFeatureConstraint()
    {
      return $this->featureConstraint;
    }

    /**
     * @param string $featureConstraint
     * @return FeatureStyleType
     */
    public function setFeatureConstraint($featureConstraint)
    {
      $this->featureConstraint = $featureConstraint;
      return $this;
    }

    /**
     * @return GeometryStylePropertyType
     */
    public function getGeometryStyle()
    {
      return $this->geometryStyle;
    }

    /**
     * @param GeometryStylePropertyType $geometryStyle
     * @return FeatureStyleType
     */
    public function setGeometryStyle($geometryStyle)
    {
      $this->geometryStyle = $geometryStyle;
      return $this;
    }

    /**
     * @return TopologyStylePropertyType
     */
    public function getTopologyStyle()
    {
      return $this->topologyStyle;
    }

    /**
     * @param TopologyStylePropertyType $topologyStyle
     * @return FeatureStyleType
     */
    public function setTopologyStyle($topologyStyle)
    {
      $this->topologyStyle = $topologyStyle;
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
     * @return FeatureStyleType
     */
    public function setLabelStyle($labelStyle)
    {
      $this->labelStyle = $labelStyle;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeatureType()
    {
      return $this->featureType;
    }

    /**
     * @param string $featureType
     * @return FeatureStyleType
     */
    public function setFeatureType($featureType)
    {
      $this->featureType = $featureType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBaseType()
    {
      return $this->baseType;
    }

    /**
     * @param string $baseType
     * @return FeatureStyleType
     */
    public function setBaseType($baseType)
    {
      $this->baseType = $baseType;
      return $this;
    }

    /**
     * @return QueryGrammarEnumeration
     */
    public function getQueryGrammar()
    {
      return $this->queryGrammar;
    }

    /**
     * @param QueryGrammarEnumeration $queryGrammar
     * @return FeatureStyleType
     */
    public function setQueryGrammar($queryGrammar)
    {
      $this->queryGrammar = $queryGrammar;
      return $this;
    }

}
