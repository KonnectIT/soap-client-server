<?php

class LabelType
{

    /**
     * @var string[] $LabelExpression
     */
    protected $LabelExpression = null;

    /**
     * @var string $transform
     */
    protected $transform = null;

    /**
     * @param string $transform
     */
    public function __construct($transform)
    {
      $this->transform = $transform;
    }

    /**
     * @return string[]
     */
    public function getLabelExpression()
    {
      return $this->LabelExpression;
    }

    /**
     * @param string[] $LabelExpression
     * @return LabelType
     */
    public function setLabelExpression(array $LabelExpression = null)
    {
      $this->LabelExpression = $LabelExpression;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransform()
    {
      return $this->transform;
    }

    /**
     * @param string $transform
     * @return LabelType
     */
    public function setTransform($transform)
    {
      $this->transform = $transform;
      return $this;
    }

}
