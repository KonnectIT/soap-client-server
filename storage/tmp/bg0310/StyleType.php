<?php

class StyleType extends AbstractStyleType
{

    /**
     * @var FeatureStylePropertyType $featureStyle
     */
    protected $featureStyle = null;

    /**
     * @var GraphStylePropertyType $graphStyle
     */
    protected $graphStyle = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param FeatureStylePropertyType $featureStyle
     * @param GraphStylePropertyType $graphStyle
     */
    public function __construct($metaDataProperty, $description, $name, $id, $featureStyle, $graphStyle)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->featureStyle = $featureStyle;
      $this->graphStyle = $graphStyle;
    }

    /**
     * @return FeatureStylePropertyType
     */
    public function getFeatureStyle()
    {
      return $this->featureStyle;
    }

    /**
     * @param FeatureStylePropertyType $featureStyle
     * @return StyleType
     */
    public function setFeatureStyle($featureStyle)
    {
      $this->featureStyle = $featureStyle;
      return $this;
    }

    /**
     * @return GraphStylePropertyType
     */
    public function getGraphStyle()
    {
      return $this->graphStyle;
    }

    /**
     * @param GraphStylePropertyType $graphStyle
     * @return StyleType
     */
    public function setGraphStyle($graphStyle)
    {
      $this->graphStyle = $graphStyle;
      return $this;
    }

}
