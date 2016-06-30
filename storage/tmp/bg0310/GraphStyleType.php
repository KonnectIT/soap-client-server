<?php

class GraphStyleType extends BaseStyleDescriptorType
{

    /**
     * @var boolean $planar
     */
    protected $planar = null;

    /**
     * @var boolean $directed
     */
    protected $directed = null;

    /**
     * @var boolean $grid
     */
    protected $grid = null;

    /**
     * @var float $minDistance
     */
    protected $minDistance = null;

    /**
     * @var float $minAngle
     */
    protected $minAngle = null;

    /**
     * @var GraphTypeType $graphType
     */
    protected $graphType = null;

    /**
     * @var DrawingTypeType $drawingType
     */
    protected $drawingType = null;

    /**
     * @var LineTypeType $lineType
     */
    protected $lineType = null;

    /**
     * @var AesheticCriteriaType[] $aestheticCriteria
     */
    protected $aestheticCriteria = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param animateType $animate
     * @param animateMotionType $animateMotion
     * @param animateColorType $animateColor
     * @param setType $set
     */
    public function __construct($metaDataProperty, $description, $name, $id, $animate, $animateMotion, $animateColor, $set)
    {
      parent::__construct($metaDataProperty, $description, $name, $id, $animate, $animateMotion, $animateColor, $set);
    }

    /**
     * @return boolean
     */
    public function getPlanar()
    {
      return $this->planar;
    }

    /**
     * @param boolean $planar
     * @return GraphStyleType
     */
    public function setPlanar($planar)
    {
      $this->planar = $planar;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDirected()
    {
      return $this->directed;
    }

    /**
     * @param boolean $directed
     * @return GraphStyleType
     */
    public function setDirected($directed)
    {
      $this->directed = $directed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGrid()
    {
      return $this->grid;
    }

    /**
     * @param boolean $grid
     * @return GraphStyleType
     */
    public function setGrid($grid)
    {
      $this->grid = $grid;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinDistance()
    {
      return $this->minDistance;
    }

    /**
     * @param float $minDistance
     * @return GraphStyleType
     */
    public function setMinDistance($minDistance)
    {
      $this->minDistance = $minDistance;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinAngle()
    {
      return $this->minAngle;
    }

    /**
     * @param float $minAngle
     * @return GraphStyleType
     */
    public function setMinAngle($minAngle)
    {
      $this->minAngle = $minAngle;
      return $this;
    }

    /**
     * @return GraphTypeType
     */
    public function getGraphType()
    {
      return $this->graphType;
    }

    /**
     * @param GraphTypeType $graphType
     * @return GraphStyleType
     */
    public function setGraphType($graphType)
    {
      $this->graphType = $graphType;
      return $this;
    }

    /**
     * @return DrawingTypeType
     */
    public function getDrawingType()
    {
      return $this->drawingType;
    }

    /**
     * @param DrawingTypeType $drawingType
     * @return GraphStyleType
     */
    public function setDrawingType($drawingType)
    {
      $this->drawingType = $drawingType;
      return $this;
    }

    /**
     * @return LineTypeType
     */
    public function getLineType()
    {
      return $this->lineType;
    }

    /**
     * @param LineTypeType $lineType
     * @return GraphStyleType
     */
    public function setLineType($lineType)
    {
      $this->lineType = $lineType;
      return $this;
    }

    /**
     * @return AesheticCriteriaType[]
     */
    public function getAestheticCriteria()
    {
      return $this->aestheticCriteria;
    }

    /**
     * @param AesheticCriteriaType[] $aestheticCriteria
     * @return GraphStyleType
     */
    public function setAestheticCriteria(array $aestheticCriteria = null)
    {
      $this->aestheticCriteria = $aestheticCriteria;
      return $this;
    }

}
